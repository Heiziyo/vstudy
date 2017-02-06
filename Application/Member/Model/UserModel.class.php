<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/4
 * Time: 15:10
 */

namespace Member\Model;
use Think\Model;

class UserModel extends Model{

    //邮箱验证
    public $_email_validate = array(

        array('user_email','email','邮箱填写错误')
    );

    //密码验证
    public $_pwd_validate = array(

        array('user_pwd','6,12','密码为6到12位','length')
    );

    //邮箱
    public function email(){

        $id=$_SESSION['uid'];
        $email=$this->user_email;
        $where=array('user_id'=>$id);
        $data=$this->where($where)->find();
        if($data){
            $this->where($where)->setField('user_email',$email);
            return true;
        }else{
            return false;
        }
    }

    //密码
    public function pwd(){

        $id=$_SESSION['uid'];
        $salt = C("REG_SALT");
        $pwd=md5(md5($this->user_pwd) . $salt);
        $where=array('user_id'=>$id);
        $data=$this->where($where)->find();
        if($data){
            $this->where($where)->setField('user_pwd',$pwd);
            return true;
        }else{
            return false;
        }
    }
}