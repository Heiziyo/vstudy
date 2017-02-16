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

class CourseController extends BaseController
{
    public function _initialize()
    {
        if (!session('?manager_id')) {
            $this->display('Index/login');
            die();
        }
    }

    //课程列表
    public function courseList(){
        $c = M('course');
        $list = $c -> select();
        foreach ($list as $k=>$v) {
            $arr = M('class_type') -> where(['c_id'=>$v['course_type']]) -> field('c_name') -> find();
            $list[$k]['course_type'] = $arr['c_name'];
            $arr2 = M('class_type') -> where(['c_id'=>$v['course_forword']]) -> field('c_name') -> find();
            $list[$k]['course_forword'] = $arr2['c_name'];
            $arr3 = M('user') -> where(['user_id'=>$v['u_id']]) -> field('user_name') -> find();
            $list[$k]['u_id'] = $arr3['user_name'];
        }

        $this -> assign('list',$list);
        $this -> display();
    }

    //课程预览
    public function view(){
        if(IS_AJAX){
            $cid = I('post.id');
            $list = D('course') -> view($cid);
            $arr = M('class_type') -> where(['c_id'=>$list['course_type']]) -> field('c_name') -> find();
            $list['course_type'] = $arr['c_name'];
            $arr2 = M('class_type') -> where(['c_id'=>$list['course_forword']]) -> field('c_name') -> find();
            $list['course_forword'] = $arr2['c_name'];
            $arr3 = M('user') -> where(['user_id'=>$list['u_id']]) -> field('user_name') -> find();
            $list['u_id'] = $arr3['user_name'];
            $arr4 = M('course_chapter') -> where(['cp_id'=>['in',$list['course_chapter']]]) -> field('cp_name') -> select();
            $list['course_chapter'] = '';
            foreach ($arr4 as $item) {
                $list['course_chapter'] .= $item['cp_name'].',';
            }
            if($list){
                $data['data'] = $list;
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

    //添加课程和章节
    public function addChapter(){
        $vModel = D("course");
        if (IS_POST){
            $_POST['u_id'] = session('manager_id');
            $_POST['status'] = 'show';
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
        if($pid != 0){
            $courseforword = $mod->where("c_pid = ".$pid )->select();
        }
        die(json_encode( $courseforword));
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

    //修改课程状态
    public function changeStatus(){
        $c = M('course');
        $cid = I('get.id');
        $course = $c -> find($cid);
        if($course['status'] == 'show'){
            $data['status'] = 'hide';
            if($c -> where(['course_id'=>$cid]) -> save($data)){
                $uid = $course['u_id'];
                if(M('user_course') -> where(['user_id'=>$uid,'course_id'=>$cid]) -> delete()){
                    $this -> success('修改状态成功！',U('courseList'));
                }else{
                    $this -> error('用户课程删除失败！',U('courseList'));
                }
            }else{
                $this -> error('修改状态失败！',U('courseList'));
            }
        }else{
            $data['status'] = 'show';
            if($c -> where(['course_id'=>$cid]) -> save($data)){
                $uc['user_id'] = $course['u_id'];
                $uc['course_id'] = $cid;
                if(M('user_course') -> add($uc)){
                    $this -> success('修改状态成功！',U('courseList'));
                }else{
                    $this -> error('用户课程添加失败！',U('courseList'));
                }
            }else{
                $this -> error('修改状态失败！',U('courseList'));
            }
        }
    }

    //章节列表
    public function chapterList(){
        $chapter = M('course_chapter') -> where(['cp_id'=>['in',$_GET['course_chapter']]]) -> select();
        foreach ($chapter as $k=>$v) {
            $chapter[$k]['course_name'] = $_GET['course_name'];
        }
        $this -> assign('cid',$_GET['course_id']);
        $this -> assign('chapter',$chapter);
        $this -> display();
    }

    //添加章节
    public function addCChapter(){
        if(IS_POST){
            $cc = M('course_chapter');
            $c = M('course');
            $cid = I('post.cid');
            $course = $c -> find($cid);
            if($data = ($cc -> create(I('post.')))){
                if($cc -> add($data)){
                    $l = $cc -> where(['cp_name'=>I('post.cp_name')]) -> find();
                    $course['course_chapter'] .= $l['cp_id'].',';
                    if($c -> where(['course_id'=>$cid]) -> save($course)){
                        $this -> success('添加章节成功！',U('courseList'));
                    }else{
                        $this -> error('章节导入课程失败！',U('courseList'));
                    }
                }else{
                    $this -> error('添加章节失败！',U('courseList'));
                }
            }else{
                $this -> error($cc -> getError());
            }
        }
    }

    //删除章节
    public function deleteChapter(){
        $cc = M('course_chapter');
        $c = M('course');
        $course = $c -> find(I('get.cid'));
        if($cc -> where(['cp_id'=>I('get.cp_id')]) -> delete()){
            $course['course_chapter'] = str_replace(I('get.cp_id').',','',$course['course_chapter']);
            if($c -> where(['course_id'=>I('get.cid')]) -> save($course)){
                $this -> success('删除章节成功！',U('courseList'));
            }else{
                $this -> error('章节导出课程失败！',U('courseList'));
            }
        }else{
            $this -> error('删除章节失败！',U('courseList'));
        }
    }

    //修改章节
    public function updateChapter(){
        $cc = M('course_chapter');
        if(IS_AJAX){
            $chapter = $cc -> where(['cp_id'=>I('post.id')]) -> find();
            if($chapter){
                $data['data'] = $chapter;
                $data['msg'] = '成功';
                $data['errno'] = 1;
            }else{
                $data['data'] = null;
                $data['msg'] = '失败';
                $data['errno'] = 0;
            }
            $this -> ajaxReturn($data);
        }elseif(IS_GET){
            $cp_id = I('get.cp_id');
            $data['cp_name'] = I('get.cp_name');
            if($cc -> where(['cp_id'=>$cp_id]) -> save($data)){
                $this -> success('修改章节成功！',U('courseList'));
            }else{
                $this -> error('修改章节失败！',U('courseList'));
            }
        }
    }
}