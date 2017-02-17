<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/30
 * Time: 15:20
 */

namespace Member\Controller;
use Common\Controller\BaseController;


class  CourseController extends BaseController{

	public function _initialize()
	{
		if (!session('?uid')) {
			$this->display('Public/login');
			die();
		}
	}


    public function index()
    {
		$this->display();
    }

    //我的课程
    public function myCourse(){

    	$uid=$_SESSION['uid'];
		//dump($uid);exit;
    	$pc=M('user_course');
    	$data=$pc->alias('pc')
    			->field('pc_id,user_id,course_name,c.course_id,course_time,course_difficulty')
    			->join('vs_course as c on c.course_id=pc.course_id')
    			->where("pc.user_id=$uid")
    			->select();
	//		dump($data);exit;
    	$this->assign('myCourse',$data);
    	$this->display();
    }

	//添加课程
	public function addMyCourse(){
		if(IS_POST){
			$c = D('course');
			$p = $this -> upload($_FILES['course_thumbnail']);
			$_POST['course_thumbnail'] = $p;
			$d = trim($_POST['course_chapter'],',');
			$chapter = explode(',',$d);
			foreach ($chapter as $k=>$v) {
				$chapter[$k] = ['cp_name'=>$v];
			}
			$ch = $this -> addMyChapter($chapter,$d);
			$_POST['course_chapter'] = '';
			foreach ($ch as $v) {
				foreach ($v as $item) {
					$_POST['course_chapter'] .= $item.',';
				}
			}
			$_POST['status'] = 'hide';
			$_POST['u_id'] = $_SESSION['uid'];
			if(($data = $c -> create(I('post.')))){
				if($c -> add($data)){
					$this -> success('添加课程成功！','myCourse');
				}else{
					$this -> error('添加课程失败！');
				}
			}else{
				$this -> error($c -> getError());
			}
		}else{
			$type = M('class_type') -> where(['c_pid'=>0]) -> select();
			$this -> assign('type',$type);
			$this -> display();
		}
	}

	//添加章节
	public function addMyChapter($chapter,$d){
		$cc = M('course_chapter');
		$where['cp_name'] = ['in',$d];
		if($cc -> addAll($chapter)){
			$ch = $cc -> where($where) -> field('cp_id') -> select();
			return $ch;
		}
	}

	//图片上传
	public function upload($pic){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath  =      './Public/Uploads/';
		$info   =   $upload->uploadOne($pic);
		if(!$info) {
			$this->error($upload->getError());
		}else{
			return $info['savepath'].$info['savename'];
		}
	}

	//获取课程方向
	public function getCourseForword(){
		if(IS_AJAX){
			$cid = I('get.cid');
			if($cid != ''){
				$forword = M('class_type') -> where(['c_pid'=>$cid]) -> select();
			}
			$this -> assign('forword',$forword);
			$fw = $this -> fetch('forwordAjax');
			if($fw){
				$data['data'] = $fw;
				$data['msg'] = '成功';
				$data['errno'] = 0;
			}else{
				$data['data'] = null;
				$data['msg'] = '失败';
				$data['errno'] = 1;
			}
			$this -> ajaxReturn($data);
		}
	}

	//删除课程
	public function deleteMyCourse(){
		$uc = M('user_course');
		$c = M('course');
		$pc_id = I('get.pc_id');
		$course_id = $uc -> find($pc_id)['course_id'];
		$course = $c -> find($course_id);
		$course['status'] = 'hide';
		if($uc->delete($pc_id)){
			if($c -> where(['course_id'=>$course_id]) -> save($course)){
				$this -> success('删除课程成功！',U('myCourse'));
			}else{
				$this -> error('删除课程失败！',U('myCourse'));
			}
		}else{
			$this -> error('删除我的课程失败！',U('myCourse'));
		}
	}

    //我的视频
    public function myVideo(){

    	$uid=$_SESSION['uid'];
		$pc=M('user_video');
		$data1=$pc->alias('pv')
				->field('pv_id,v_name,v_url,v.v_id')
				->join('vs_video as v on v.v_id=pv.v_id')
				->join('vs_user as p on p.user_id=pv.user_id')
				->where("pv.user_id=$uid")
				->select();
		$arr = array();
		foreach ($data1 as $k=>$v) {
			$arr[] = M('video')->alias('v')
					->field('course_name,cp_name,c.course_id')
					->join('vs_course as c on c.course_id=v.v_coursename')
					->join('vs_course_chapter as cc on cc.cp_id=v.v_coursechapter')
					->where(["v.v_id"=>$v['v_id']])
					->find();
			foreach ($arr as $item) {
				$data1[$k]['course_name'] = $item['course_name'];
				$data1[$k]['cp_name'] = $item['cp_name'];
			}
		}
		$this->assign('myVideo',$data1);
		$this->display();
    }

	//添加视频
	public function addMyVideo(){
		if (IS_POST){
			$_POST['status'] = 'hide';
			$_POST['u_id'] = $_SESSION['uid'];
			$data = I("post.");
			if (M('video')->add($data)){
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		}else{
			$mod = M("Course");
			$course = $mod->select();
			$this->assign("course",$course);
			$this->display();
		}
	}

	/*获取课程章节*/
	public function getCourseChapter(){
		if(IS_AJAX){
			$cid = I('get.cid');
			$course = M('course') ->find($cid);
			$chapter = M('course_chapter') -> where(['cp_id'=>['in',$course['course_chapter']]]) -> select();
			$this -> assign('chapter',$chapter);
			$fw = $this -> fetch('chapterAjax');
			if($fw){
				$data['data'] = $fw;
				$data['msg'] = '成功';
				$data['errno'] = 0;
			}else{
				$data['data'] = null;
				$data['msg'] = '失败';
				$data['errno'] = 1;
			}
			$this -> ajaxReturn($data);
		}
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
		while ($buff = fread($in, 00000)) {
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

    //删除视频
    public function deleteMyVideo(){
        $uv = M('user_video');
		$v = M('video');
		$pv_id = I('get.pv_id');
		$v_id = $uv -> find($pv_id)['course_id'];
		$video = $v -> find($v_id);
		$video['status'] = 'hide';
        if($uv->delete($pv_id)){
			if($v -> where(['course_id'=>$v_id]) -> save($video)){
				$this -> success('删除视频成功！',U('myVideo'));
			}else{
				$this -> error('删除视频失败！',U('myVideo'));
			}
        }else{
            $this -> error('删除我的视频失败！',U('myVideo'));
        }
    }
}