<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public $db = '';
    public function __initialize(){


    }

    public function index(){
        $topCategory = $this -> getTopCategory();
        $arr = [];
        foreach ($topCategory as $k=>$v) {
            $course = M('course') -> where(['course_type'=>$v['c_id'],'status'=>'show']) -> select();
            foreach ($course as $item) {
                if($v['c_id'] == $item['course_type']){
                    $arr[$v['c_id']][] = $item;
                }
            }
        }

        $this->assign('topCategory',$topCategory);
        $this->assign('arr',$arr);
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
            $data[$v['c_id']] = M('Class_type')->where("c_pid = ".$v['c_id'])->select();
        }
        return $data;
    }
}