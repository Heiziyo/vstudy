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
			$chapter['cp_name'] = $_POST['course_chapter'];
			$chapter['course_id'] = 0;
			$chapter['cp_thumbnail'] = '';
			$_POST['course_chapter'] = $this -> addMyChapter($chapter);
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
	public function addMyChapter($chapter){
		$cc = M('course_chapter');
		if(($data = $cc -> create($chapter))){
			if($cc -> add($data)){
				$ch = $cc -> where(['cp_name'=>$chapter['cp_name']]) -> field('cp_id') -> find();
				return $ch['cp_id'];
			}
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
			$forword = M('class_type') -> where(['c_pid'=>$cid]) -> select();
			$this -> assign('forword',$forword);
			$fw = $this -> fetch('ajax');
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
		$c = M('user_course');
		if($c->delete(I('get.pc_id'))){
			$this -> success('删除课程成功！',U('myCourse'));
		}else{
			$this -> error('删除课程失败！',U('myCourse'));
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
		if(IS_POST){
			$v = M('user_video');
			$data['v_id'] = I('post.v_id');
			$data['user_id'] = $_SESSION['uid'];
			if(($uv = $v -> create($data))){
				if($v -> add($uv)){
					$this -> success('添加视频成功！','myVideo');
				}else{
					$this -> error('添加视频失败！','myVideo');
				}
			}else{
				$this -> error($v -> getError());
			}
		}
	}

	//删除视频
	public function deleteMyVideo(){
		$v = M('user_video');
		if($v->delete(I('get.pv_id'))){
			$this -> success('删除视频成功！',U('myVideo'));
		}else{
			$this -> error('删除视频失败！',U('myVideo'));
		}
	}

    /*
     * 课程分类
     */

    /*public function courseType()
    {
		if(IS_AJAX){
			$arr=array();
			$ct = M('class_type');
			$a = $ct -> where(['c_pid'=>0]) -> select();
			foreach ($a as $v) {
				$arr[] = ['id'=>$v['c_id'],'pid'=>$v['c_pid'],'name'=>$v['c_name']];
				if(($info = $ct -> where(['c_pid'=>$v['c_id']]) -> select())){
					foreach ($info as $item) {
						$arr[] = ['id'=>$item['c_id'],'pid'=>$item['c_pid'],'name'=>$item['c_name'],'file'=>'course?id='.$item['c_id']];
					}
				}
			}
			$this->ajaxReturn($arr);
		}
		$this->display();
    }

	public function course(){
		$uid = $_SESSION['uid'];
		$course = M('user_course')->alias('uc')
				->field('pc_id,user_id,course_forword,course_name,course_time,course_difficulty')
				->join('vs_course as c on c.course_id=uc.course_id')
				->where("uc.user_id=$uid")
				->select();
		$arr = array();
		$id = explode('.',I('get.id'))[0];
		foreach ($course as $v) {
			if($v['course_forword'] == $id){
				$arr[] = $v;
			}
		}
		$this->assign('course',$arr);
		$this->display();
	}*/
}