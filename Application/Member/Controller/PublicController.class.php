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

    //注册
    public function register(){

        if (IS_POST) {
            //表单
            $userModel = D('Public');
            if ($userModel->create()) {
                if ($userModel->add()) {
                    $this->success('注册成功', U('Public/login'));
                    exit;
                } else {
                    $this->error('注册失败,' . $userModel->getDbError());
                }
            }else{

                $error = $userModel->getError();
                $this->error('注册失败,' . $error);
            }
        }
        $this->display();
    }

    //登录
    public function login(){

        if(IS_POST){
            // 接受表单
            $userModel=D('Public');
/*          $data=I('post.');
            dump($data);exit;*/
            $data['user_name']=$_POST['user_name'];
            $data['user_pwd']=$_POST['user_pwd'];
            $data['code']=$_POST['code'];
/*          $data1=$userModel->create($data);
            dump($data);exit;*/
            if($userModel->validate($userModel->_login_validate)->create($data,4)){
                // 用户信息合法性检查
                $status = $userModel->login();
                if($status === true){
                    $this->success('登录成功！',U('Course/index'));
                    exit();
                }else{
                    $status == 1 ? $this->error('用户名错误！') : $this->error('密码错误！');
                }
            }else{
                $this->error('登录失败！'.$userModel->getError());
            }
        }
        $this->display();
    }

    // 退出
    public function logout()
    {
        session(null);
        cookie(null);
        $this->success('退出成功！', U('Public/login'));
        exit();
    }

    //验证码
    public function code(){
        $config = array(
            'length' => 4,
            'useNoise' => true,
            'useCurve' => false,
            'reset'  => true
        );

        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
}