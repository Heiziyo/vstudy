<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/13
 * Time: 11:54
 */
namespace Manage\Controller;
use OSS\OssClient;
use Think\Controller;
use Common\Controller\BaseController;

class VideoController extends BaseController {

    public function videoType(){


        $this->display();
    }

    public function getVideoCategory(){
        $ccid = I("post.c_pid");
        $data = M("Class_type")->where("c_pid = ".$ccid)->select();
        $tree_data = "";
        foreach ($data as $v){
            $tree_data[$v['catdir']] = array(
                'name'=>$v['c_name'],
                'type'=> 'folder',
                'icon-class'=>'red'
            );
           $tree_data[$v['catdir']]['additionalParameters'] =  $this->getChild($v['c_id']);
        }
        $tree_d = array('status'=>"OK",'data'=>$tree_data);

        echo json_encode($tree_d,false);
    }
    public function getChild($cid){
        $childData = M("Class_type")->where("c_pid = $cid")->select();
        $child = '';
        foreach ($childData as $v){
            $child['childen'][]= array(
                'name'=>$v['c_name'],
                'type'=>'item',
            );
        }
        return $child;
    }

    public function videoList(){

        $this->display();
    }
    public function addVideo(){
        if (IS_POST){
            $data = I("post.");
            if (M('video')->add($data)){
                $this->success("添加成功");
            }else{
                $this->error("添加失败");
            }
        }else{
            $this->assign("course",$this->getCourse());
            $this->display();
        }
    }
    //添加课程和章节
    public function addChapter(){
        $vModel = D("Video");
        if (IS_POST){
           $data = I('post.');
           if ($vModel->create()){
                if ($vModel->addCouser($data)){
                    $this->success("添加成功！");
                }else{
                    $this->error("添加出错！");
                }
           }else{
               $this->error($vModel->getError());
           }
        }else{
            $this->assign("coursetype",$this->getCourseType());
            $this->display();
        }
    }
    //获取课程类型
    public function getCourseType(){
        $mod = M("Class_type");
        $course = $mod->where("c_pid = 0" )->select();
        return $course;
    }

    //获取课程方向
    public function getCourseForword(){
        $mod = M("Class_type");
        $pid = I('get.pid');
        $courseforword = $mod->where("c_pid = ".$pid )->select();
        die(json_encode( $courseforword));
    }
    //获取课程
    public function getCourse(){
        $mod = M("Course");
        $course = $mod->select();
        return $course;
    }
    //获取子分类
    public function getCourseChapter(){
        $mod = M("Course_chapter");
        $pid = I("get.pid");
        $vchapter = M('Course')->where("course_id = ".$pid)->find();
        //章节
        $cid = rtrim($vchapter['course_chapter'],",");
        $vchapter= M('Course_chapter')->where("cp_id in (".$cid.")")->order("cp_id asc")->select();
        echo json_encode($vchapter);

    }
    //视频上传
    public function upVideo(){
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        @set_time_limit(5 * 60);
        $targetDir = "videofile/".date("Ymd",time());
        $cleanupTargetDir = true;
        $maxFileAge = 5 * 3600;
        if (!is_dir($targetDir)) {
            @mkdir($targetDir,0777,true);
        }
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
            $fileName = substr(strrpos($fileName,0,$fileName,"."));
            $fileName = time()."_1".".mp4";
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
            $fileName = substr(strrpos($fileName,0,$fileName,"."));
            $fileName = time()."_1".".mp4";
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }
        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }
        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }
        @fclose($out);
        @fclose($in);
        if (!$chunks || $chunk == $chunks - 1) {
            rename("{$filePath}.part", $filePath);
        }
        $path =$filePath;
        if (isset($path)){
            oss_upload($path);
        }else{
            die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to upload"}, "id" : "id"}');
        }
        die('{"jsonrpc" : "2.0", "result" : "'.C('VIDEOS_PATH').$filePath.'", "id" : "id"}');
    }
    //视频上传
    public function upChapter(){
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        @set_time_limit(5 * 60);
        $targetDir = "chaptCover/".date("Ymd",time());
        $cleanupTargetDir = true;
        $maxFileAge = 5 * 3600;
        if (!is_dir($targetDir)) {
            @mkdir($targetDir,0777,true);
        }
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }
        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }
        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }
        @fclose($out);
        @fclose($in);
        if (!$chunks || $chunk == $chunks - 1) {
            rename("{$filePath}.part", $filePath);
        }
        $path =$filePath;
        if (isset($path)){
            if (oss_upload($path)){
                die('{"jsonrpc" : "2.0", "result" : "'.C('VIDEOS_PATH').$filePath.'", "id" : "id"}');
            }
        }else{
            die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to upload"}, "id" : "id"}');
        }
    }
    //视频封面
    public function upCover(){
        // Make sure file is not cached (as it happens for example on iOS devices)
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        /*
        // Support CORS
        header("Access-Control-Allow-Origin: *");
        // other CORS headers if any...
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            exit; // finish preflight CORS requests here
        }
        */

        // 5 minutes execution time
        @set_time_limit(5 * 60);

        // Uncomment this one to fake upload time
        // usleep(5000);

        // Settings
        $targetDir = "upCover/".date("Ymd",time());
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds
        // Create target dir
        if (!file_exists($targetDir)) {
            @mkdir($targetDir,0777,true);
        }
        // Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

        // Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;


        // Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // If temp file is current file proceed to the next
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }
                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }
        // Open temp file
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }

            // Read binary input stream and append it to temp file
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

        // Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);
        }
        $path =$filePath;
        oss_upload($path);
        // Return Success JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : "'.$filePath.'", "id" : "id"}');

    }
    public function test(){

        $file = "videofile/2016-12-19/videoplayback.mp4";

        $a = strrpos($file,".");
        print_r(substr($file,0,$a));
        uoloadFile();
    }

}

