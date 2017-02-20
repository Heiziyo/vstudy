<?php
namespace Manage\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        if(session('?manager_id')){
            $this->display();
        }else{
            $this->display('login');
        }



    }

    public function login(){
        $login = I('post.');
        $user = M('manager');
        $where['manager_name'] = $login['name'];
        $n = $user -> where($where) -> find();
        if($n){
            if(md5($login['pwd']) == $n['manager_pwd']){
                session('manager_id',$n['manager_id']);
                session('manager_name',$n['manager_name']);
                $this -> success('登录成功！','index');
            }else{
                $this -> error('密码错误！');
            }
        }else{
            $this -> error('用户名不存在！');
        }
    }

    public function logout(){
        session(null);
        $this -> success('退出成功','index');
    }
}