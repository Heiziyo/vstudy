<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public $db = '';
    public function __initialize(){


    }

    public function index(){
        
        $this->assign('topCategory',$this->getTopCategory());
        $this->assign('childCategory',$this->getChildCategory());
        $this->display();
    }


    private function getTopCategory(){


        $data = M('Class_type')->where("c_pid = 0")->select();
        return $data;

    }

    private function getChildCategory(){
        $topCategory = $this->getTopCategory();
        $data = '';
        foreach ($topCategory as $k=>$v){
            $data[] = M('Class_type')->where("c_pid = ".$v['c_id'])->select();
        }
        return $data;
    }
}