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
        array('code', '_checkCode','验证码不正确', 1, 'callback',4)
    );

    public function _checkCode($code)
    {
        // 验证码验证
        $verify = new \Think\Verify();
        return $verify->check($code);

    }

    //登录验证
    public function login(){
            $username = $this->user_name; // 获取表单里面的用户名
            $password = $this->user_pwd; // // 获取表单里面的密码
            $where = array('user_name' => $username);
            $info = $this->where($where)->find();
        if($info){
            if($info['user_pwd']==$password){
                //登录成功，存储登录的用户名和密码
                $_SESSION['user_name']=$username;
                $_SESSION['user_id']=$info['user_id'];
                // 检查是否记住了密码
                $remember = I("post.remember");
                if(!empty($remember)){

                    $time = time() + 86400 * 7;
                    setcookie('user_id', $info['user_id'], $time, '/');
                }

                return true;

            }
        }
        $this->error = '用户名或密码错误';
        return false;

    }

}