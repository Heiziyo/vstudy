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

    public function _before_update(&$data, $options)
    {
        $salt = C("REG_SALT");
        $data['user_pwd'] = md5( md5($data['user_pwd']) . $salt );
    }

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
        $pwd=$this->user_pwd;
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