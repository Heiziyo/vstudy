<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/4
 * Time: 11:13
 */

namespace Member\Controller;
use Common\Controller\BaseController;

class UserController extends BaseController{

    //账号绑定
    public function setBindSNS(){

        if(IS_POST){

            $model=D('User');
            $data=I('post.');

            if(!empty($data['user_email'])){
                if($model->validate($model->_email_validate)->create($data)){
                    $status=$model->email();
                    if($status === true){
                        $this->success('修改成功');
                        exit();
                    }else{
                        $this->error('修改失败');
                    }
                }else{
                    $this->error('验证失败'.$model->getError());
                }
            }
            if(!empty($data['user_pwd'])){

                if($model->validate($model->_pwd_validate)->create($data)){
                    $status=$model->pwd();
                    if($status === true){
                        $this->success('修改成功');
                        exit();
                    }else{
                        $this->error('修改失败');
                    }
                }else{
                    $this->error('验证失败'.$model->getError());
                }
            }
        }
        $email=M('user')->field('user_email')->where(array('user_id'=>$_SESSION['uid']))->select();
        $this->assign('email',$email);
        $this->display();
    }

    //个人信息
    public function profile(){

        if(IS_POST){
            $model=D('User');
            $data=I('post.');
            if($model->validate($model->_person_validate)->create($data)){
                $status=$model->person();
                if($status===true){
                    $this->success('修改成功！','profile');exit;
                }else{
                    $this->error('修改失败！','profile');
                }
            }else{
                $this->error('验证失败'.$model->getError());
            }
        }
        $userInfo=M('user')->where(array('user_id'=>$_SESSION['uid']))->select();
        $this->assign('userInfo',$userInfo);
        $this->display();
    }

    //操作记录
    public function record(){

        $id=$_SESSION['uid'];
        $model=M('user_opreate');
        $data=$model->where(array('user_id'=>$id))->select();
        //dump($data);exit;
        $this->assign('record',$data);
        $this->display();
    }

    //实名认证
    public function realName(){

        $this->display();
    }

    //收货地址
    public function address(){

        $this->display();
    }
}