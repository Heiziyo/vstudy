<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/28
 * Time: 15:54
 */

namespace Member\Controller;
use Common\Controller\BaseController;


class PublicController extends BaseController{


    public function login(){
        if(IS_POST){
            $username=trim($_POST['username']);
            $pwd=trim($_POST['pwd']);
            $data=M('user')->where("user_name='$username' and user_pwd='$pwd'")->select();
            //dump($data);exit;
            //$date=date('Y-m-d H:i:s');
            if($data){

                $this->success('登录成功',U('Course/index'),1);

                //setcookie('username','pwd');
            }else{
                $this->error('用户名或密码错误','login',3);
            }
        }
        $this->display();
    }
}