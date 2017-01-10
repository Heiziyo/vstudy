<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/1/6
 * Time: 9:12
 */
namespace Member\Model;
use Think\Model;

class PublicModel extends Model{

    protected $_validate = array(
        array('user_name','require','用户名不能为空'),
        array('user_pwd','require','密码不能为空'),
        array('user_name','','用户名已经存在',1,'unique',1),
        array('user_pwd','6,12','密码为6到12位',1,'length',1),
        array('rpassword','user_pwd','两次输入的密码不一致',1,'confirm'),
        array('code', '_checkCode','验证码不正确', 1, 'callback')
    );

    public $_login_validate = array(
        array('user_name','require','用户名不能为空'),
        array('user_pwd','require','密码不能为空'),
        array('code', '_checkCode','验证码不正确', 1, 'callback',4)
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

    public function _checkCode($code){
        // 验证码验证
        $verify = new \Think\Verify();
        return $verify->check($code);
    }

    //登录验证
    public function login(){
        $username = $this->user_name;
        $password = $this->user_pwd;
        $where = array('user_name' => $username,'user_pwd' => $password);
        $info = $this->where($where)->find();
        if($info){
            if($info['user_pwd']==$password){
                $_SESSION['user_name']=$username;
                $_SESSION['uid']=$info['user_id'];
                $remember = I("post.remember");
                if(!empty($remember)){
                    $ip=  get_client_ip();
                    $value=$username."|".$ip;
                    $value=encryption($value);
                    $time = time() + 86400 * 7;
                    setcookie('remember', $value, $time, '/');
                }
                return true;
            }
        }
        $this->error = '用户名或密码错误';
        return false;
    }
}