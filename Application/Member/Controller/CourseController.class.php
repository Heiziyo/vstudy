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
    			->field('pc_id,user_id,course_name,course_time,course_difficulty')
    			->join('vs_course as c on c.course_id=pc.course_id')
    			->where("pc.user_id=$uid")
    			->select();
		//dump($data);exit;
    	$this->assign('myCourse',$data);
    	$this->display();
    }

    //我的视频
    public function myVideo(){

    	$uid=$_SESSION['uid'];
		$pc=M('user_video');
		$data1=$pc->alias('pv')
				->field('pv_id,v_name,v_url')
				->join('vs_video as v on v.v_id=pv.v_id')
				->join('vs_user as p on p.user_id=pv.user_id')
				->where("pv.user_id=$uid")
				->select();
		$this->assign('myVideo',$data1);
		$this->display();
    }
//    /*
//     * 课程分类
//     */
//
//    public function courseType()
//    {
//		if(IS_AJAX){
//			$arr=array();
//			$ct = M('class_type');
//			$a = $ct -> where(['c_pid'=>0]) -> select();
//			foreach ($a as $v) {
//				$arr[] = ['id'=>$v['c_id'],'pid'=>$v['c_pid'],'name'=>$v['c_name']];
//				if(($info = $ct -> where(['c_pid'=>$v['c_id']]) -> select())){
//					foreach ($info as $item) {
//						$arr[] = ['id'=>$item['c_id'],'pid'=>$item['c_pid'],'name'=>$item['c_name'],'file'=>'course?id='.$item['c_id']];
//					}
//				}
//			}
//			$this->ajaxReturn($arr);
//		}
//		$this->display();
//    }
//
//	public function course(){
//		$uid = $_SESSION['uid'];
//		$course = M('user_course')->alias('uc')
//				->field('pc_id,user_id,course_forword,course_name,course_time,course_difficulty')
//				->join('vs_course as c on c.course_id=uc.course_id')
//				->where("uc.user_id=$uid")
//				->select();
//		$arr = array();
//		$id = explode('.',I('get.id'))[0];
//		foreach ($course as $v) {
//			if($v['course_forword'] == $id){
//				$arr[] = $v;
//			}
//		}
//		$this->assign('course',$arr);
//		$this->display();
//	}
}