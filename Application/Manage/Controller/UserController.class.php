<?php
namespace Manage\Controller;
use Think\Controller;
class UserController extends Controller {
    public function _initialize(){
        if(!session('?manager_name')){
            $this->display('Index/login');
            die();
        }
    }

    public function userList(){
        $user = M('user') -> select();
        $this -> assign('user',$user);
        $this -> display();
    }

    public function changeStatus(){
        $uid = I('get.id');
        $status = I('get.status');
        if($status == 'none'){
            $data['status'] = 'show';
        }else{
            $data['status'] = 'none';
        }

        if(M('user') -> where(['user_id'=>$uid]) -> save($data)){
            $this -> success('更新状态成功！',U('userList'));
        }else{
            $this -> error('更新状态失败！',U('userList'));
        }
    }

    public function view(){
        if(IS_AJAX){
            $uid = I('post.id');
            $user = M('user') -> find($uid);
            if($user){
                $data['data'] = $user;
                $data['msg'] = '成功';
                $data['errno'] = 0;
            }else{
                $data['data'] = null;
                $data['msg'] = '失败';
                $data['errno'] = 1;
            }
            $this -> ajaxReturn($data);
        }
    }
}