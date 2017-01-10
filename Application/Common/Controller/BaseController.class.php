<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/20
 * Time: 12:49
 */

namespace Common\Controller;
use Think\Controller;

class BaseController extends Controller{

    public function _initialize(){

        $act = array("addChapter",'videoList','addVideo','videoType');
        $this->assign('act',$act);

        if(isset($_COOKIE['remember']) && !$_SESSION['uid']){
            $value= explode('|',encryption($_COOKIE['remember'],1));
            //查看ip是否一致
            if($value[1] == get_client_ip()){
                $m=M('Public');
                $where=array('user_name'=>$value[0]);
                //检查用户名
                if($id=$m->where($where)->getField('user_id')){
                    $_SESSION['uid']=$id;

                }
            }
        }
        if(!isset($_SESSION['uid'])){

            header('Public/login');
        }else{

            header('Course/index');
        }
    }


}