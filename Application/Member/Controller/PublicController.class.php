<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/28
 * Time: 15:54
 */

namespace Member\Controller;
use Common\Controller\LoginController;


class PublicController extends LoginController{

    function __construct()
    { //构造方法
        parent::__construct();
    }

    //注册
    public function register(){

        if (IS_POST) {
            //表单
            $userModel = D('User');
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
            $userModel=D('User');
            $data['user_name']=$_POST['user_name'];
            $data['user_pwd']=$_POST['user_pwd'];
            $data['code']=$_POST['code'];
            if($userModel->validate($userModel->_login_validate)->create($data,4)){
                // 用户信息合法性检查
                $status = $userModel->signin();
                if($status === true){
                    $this->log();
                    $this->success('登录成功！',U('Course/Index'));
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

    public function log(){
        $mobile = parent::isMobile(); //实例化该方法
        if($mobile=="true"){
            $login_machine='mobile';
        }else{
            $login_machine='web';
        }
        if(isset($_SESSION['uid'])){
            $model=M('user_opreate');
            $login_ip='27.18.95.175';
            $login_time=date('Y-m-d H:i:s');
            $taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$login_ip;
            $IPinfo = json_decode(file_get_contents($taobaoIP));
            $province = $IPinfo->data->region;
            $city = $IPinfo->data->city;
            $address = $province.$city;
            $data=array('user_id'=>$_SESSION['uid'],'login_ip'=>$login_ip,'login_time'=>$login_time,'login_address'=>$address,'login_machine'=>$login_machine);
            $model->add($data);
        }
    }


    // 退出
    public function logout()
    {
        session(null);
        cookie(null);
        setcookie('user_name','',time()-1,'/');
        setcookie('uid','',time()-1,'/');
        $this->success('退出成功',U('Public/login'));

        exit();
    }

    //找回密码
    public function found(){

        if(IS_POST){
            //接受表单
            $model=D('User');
            $info=I('post.');
            //dump($info);exit;
            if($model->validate($model->_found_validate)->create($info)){
                $status=$model->found();
                if($status === true){
                    $this->success('验证成功',U('Public/reset'));exit();
                }else{
                    $status == 1 ? $this->error('用户名错误！') : $this->error('邮箱错误！');
                }
            }else{
                $this->error('验证失败'.$model->getError());
            }
        }
        $this->display();
    }

    //重置密码
    public function reset(){

        if(IS_POST){
            $model=D('User');
            $data=I('post.');
            if($model->validate($model->_reset_validate)->create($data)){
                $status=$model->reset();
                if($status === true){
                    $this->success('修改成功！',U('Public/login'));exit();
                }else{
                    $this->error('修改失败！');
                }
            }else{
                $this->error('验证失败'.$model->getError());
            }
        }
        $this->display();
    }

    //验证码
    public function code(){
        $config = array(
            'length' => 4,
            'useNoise' => true,
            'useCurve' => false,
            'reset'  => true,
        );

        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
}