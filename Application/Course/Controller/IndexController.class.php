<?php
namespace Course\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function __initinlizae(){

    }

    public function index(){

        $filter['catid'] = I('get.catid');
        $where = '';
        $child_where = '';
        if ($filter['catid']){
            $child_where ="c_pid = " .$filter['catid'] ." and ";
        }
        //获取方向
        $cat = M('Class_type');
        $catn = $cat->field("c_name as name , c_id as id")->where("c_pid = 0")->select();
        //根据方向获取当前下的全部小分类
        $chile_cat = $cat->field("c_name as name , c_id as id,c_pid as pid")->where($child_where . " c_pid != 0")->select();
        $this->assign('catname',$catn);
        $this->assign('chile_cat',$chile_cat);
        //catid cid
        $catid = I('get.catid');
        $cid = I('get.cid');
        $this->assign('course_list',$this->courseList($catid,$cid));

        $this->display();
    }
    /*
     * 获取当前栏目的列表
     */
    private function courseList($catid = NULL,$cid = NULL){

        $mod = M("Course");
        $where = "";
        if ($catid == NULL && $cid == NULL){
            $where = "";
        }
        if (!empty($catid)){
            $where = "course_type = ".$catid;
        }
        if (!empty($cid)){
            $where = "course_forword = ".$cid;
        }
        $data = $mod->where($where)->select();
        return $data;
    }

    /*
     * 章节
     */
    public function courseChapter(){
        $cvid = I('get.cvdid',0);
        if (empty($cvid)){
            $this->error("当前课程不存在");
            return false;
        }
        $vchapter = M('Course')->where("course_id = ".$cvid)->find();
        //章节
        $cid = rtrim($vchapter['course_chapter'],",");
        $vchapter['chapter'] = M('Course_chapter')->where("cp_id in (".$cid.")")->order("cp_id asc")->select();
        $this->assign("vchapter",$vchapter);
        $this->display();
    }
    /*
     * 播放页
     */
    public function video(){

        $vid = I('get.vid');
        if (empty($vid)){
            $this->error("迷路了哟！");
            return false;
        }
        $mod = M('video');
        $info = $mod->where('v_id = '.$vid)->find();
        $topca = M('Course_chapter')->where('cp_id = '.$info['v_coursechapter'])->find();
        $this->assign('topca',$topca);
        $this->assign('info',$info);
        $this->display();
    }
}