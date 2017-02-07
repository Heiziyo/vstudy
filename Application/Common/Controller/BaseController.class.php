<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/20
 * Time: 12:49
 */

namespace Common\Controller;
use Think\Controller;

class BaseController extends Controller{

    public function _initialize(){

        $act = array("addChapter",'videoList','addVideo','videoType');
        $this->assign('act',$act);
<<<<<<< HEAD
        if(isset($_COOKIE['uid']) && !$_SESSION['uid']){
            $m=M('Public');
=======

        if(isset($_COOKIE['uid']) && isset($_COOKIE['user_name'])){
            $m=D('User');
>>>>>>> lyy
            $where=array('user_name'=>$_COOKIE['user_name']);
            if($id=$m->where($where)->getField('user_id')){
                $_SESSION['uid']=$id;
                $_SESSION['user_name']=$_COOKIE['user_name'];
                $this->success('欢迎回来',U('Course/index'));exit;
            }

        }
        if(!isset($_SESSION['uid'])){

<<<<<<< HEAD
           // header('Member/Public/login');

            $this->error('登录','Member/Public/login');
=======
            redirect('Public/login');
>>>>>>> lyy
        }
    }


}