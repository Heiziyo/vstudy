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
            // 接受表单
            $userModel = D('Public');
/*          $data=I('post.');
            dump($data);exit;*/
            $data['user_name']=$_POST['user_name'];
            $data['user_pwd']=$_POST['user_pwd'];
            $data['code']=$_POST['code'];
/*          $data1=$userModel->create($data);
            dump($data);exit;*/
            if($userModel->create($data,4)){
                // 用户信息合法性检查
                $status = $userModel->login();
                if($status === true){
                    $this->success('登录成功！', U('Course/index'));
                    exit();
                }else{
                    $status == 1 ? $this->error('用户名不存在！') : $this->error('密码错误！');
                }
            }else{
                $this->error('登录失败！'.$userModel->getError());
            }
        }

        $this->display();
    }

    // 用户退出
    public function logout()
    {
        // 清除session数据
        session(null);
        // 清除cookie数据
        setcookie('user_id','', time()-1, '/');
        $this->success('退出成功！', U('Public/login'));
        exit();
    }

    //验证码
    public function code(){
        $config = array(
            'length' => 3,
            'useNoise' => false,
            'useCurve' => false,
        );

        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
}