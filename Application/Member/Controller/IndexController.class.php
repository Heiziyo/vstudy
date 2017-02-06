<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/28
 * Time: 16:14
 */

namespace Member\Controller;
use Common\Controller\BaseController;


class IndexController extends BaseController{

    public function getUserInfo(){
        $uid=$_SESSION['uid'];
        $nc=M('public')->where("user_id=$uid")->select();
        return $nc;
    }
    public function index(){

<<<<<<< HEAD


=======
		$this->assign('nc',$this->getUserInfo());
>>>>>>> origin/lyy
        $this->display();
    }

}