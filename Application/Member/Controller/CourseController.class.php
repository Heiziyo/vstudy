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
    	$pc=M('public_course');
    	$data=$pc->alias('pc')
    			->field('pc_id,course_name,course_time,course_difficulty')
    			->join('vs_course as c c.course_id=pc.course_id')
    			->where("pc.user_id=$uid")
    			->select();
    	$this->assign('myCourse',$data);
    	$this->display();
    }

    //我的视频
    public function myVideo(){

    	$uid=$_SESSION['uid'];
    	$pc=M('public_video');
    	$data1=$pc->alias('pv')
    			->field('pv_id,v_name')
    			->join('vs_video as v v._id=pv.v_id')
    			->where("pv.user_id=$uid")
    			->select();
    	$this->assign('myVideo',$data1);
    	$this->display();
    }

}