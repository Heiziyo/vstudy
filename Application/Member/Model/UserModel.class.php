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

    protected $_validate = array(
        array('user_name','require','用户名不能为空'),
        array('user_pwd','require','密码不能为空'),
        array('user_email','','邮箱已被注册',1,'unique',1),
        array('user_email','email','邮箱地址错误',1),
        array('user_name','','用户名已经存在',1,'unique',1),
        array('user_name','3,20','用户名至少为3位',1,'length',1),
        array('user_pwd','6,12','密码为6到12位',1,'length',1),
        array('rpassword','user_pwd','两次输入的密码不一致',1,'confirm'),
        array('code', '_checkCode','验证码不正确', 1, 'callback')
    );

    //登录
    public $_login_validate = array(
        array('user_name','require','用户名不能为空'),
        array('user_pwd','require','密码不能为空'),
        array('code', '_checkCode','验证码不正确', 1, 'callback',4)
    );

    //找回密码
    public $_found_validate = array(
        array('user_name','require','用户名不能为空'),
        array('user_email','email','邮箱填写错误'),
        array('code','_checkCode','验证码不正确',1,'callback')
    );

    //重置密码
    public $_reset_validate = array(

        array('user_pwd','6,12','密码为6到12位',1,'length'),
        array('code','_checkCode','验证码不正确',1,'callback')
    );

    protected $_auto = array(

        array('regist_time', '_time', 1, 'callback'),

    );


    public function _time()
    {
        $time=date('Y-m-d H:i:s');

        return $time;
    }

    public function _before_insert(&$data, $options)
    {
        $salt = C("REG_SALT");
        $data['user_pwd'] = md5( md5($data['user_pwd']) . $salt );
    }

    // 验证码验证
    public function _checkCode($code){
        $verify = new \Think\Verify();
        return $verify->check($code);
    }

    //登录验证
    public function signin(){
        $salt=C('REG_SALT');
        $username = $this->user_name;
        $password = $this->user_pwd;
        $upassword=md5(md5($password).$salt);
        $where = array('user_name' => $username,'user_pwd' => $upassword);
        $info = $this->where($where)->find();
        if($info){
            if($info['user_pwd']==$upassword){
                $_SESSION['user_name']=$username;
                $_SESSION['uid']=$info['user_id'];
                $remember = I("post.remember");
                if(!empty($remember)){
                    $time = time() + 86400 * 7;
                    setcookie('uid',$info['user_id'],$time,'/');
                    setcookie('user_name',$info['user_name'],$time,'/');
                }
                $login_ip=$_SERVER['REMOTE_ADDR'];
                $id=array('user_id'=>$info['user_id']);
                $login_time=date('Y-m-d H:i:s');
                $data=array('login_ip'=>$login_ip,'login_time'=>$login_time);
                $this->where($id)->setField($data);
                return true;
            }
        }
        $this->error = '用户名或密码错误';
        return false;
    }

    //找回密码
    public function found(){

        $username=$this->user_name;
        $email=$this->user_email;
        $where=array('user_name'=>$username,'user_email'=>$email);
        $data=$this->where($where)->find();
        if($data){
            if($data['user_name']==$username && $data['user_email']==$email){
                $_SESSION['uid']=$data['user_id'];
                return true;
            }
        }
        $this->error = '用户名或邮箱输入有误！';
        return false;
    }

    //重置密码
    public function reset(){

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
        $pwd=$this->user_pwd;
        $email=$this->user_email;
        $where=array('user_id'=>$id);
        $data=$this->where($where)->find();
        if($data['user_pwd'] == $pwd){
            $this->where($where)->setField('user_email',$email);
            return true;
        }else{
            $this->error='密码错误！';
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