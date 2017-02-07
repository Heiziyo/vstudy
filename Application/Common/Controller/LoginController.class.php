<?php
namespace Common\Controller;
use Think\Controller;

class LoginController extends Controller{

    public function _initialize(){


        if(isset($_COOKIE['uid']) && !isset($_SESSION['uid'])){
            $m=D('User');
            $where=array('user_name'=>$_COOKIE['user_name']);
            if($id=$m->where($where)->getField('user_id')){
                $_SESSION['uid']=$id;
                $_SESSION['user_name']=$_COOKIE['user_name'];
                $this->success('欢迎回来',U('Course/index'));exit;
            }

        }else{
            return false;
        }


    }
}