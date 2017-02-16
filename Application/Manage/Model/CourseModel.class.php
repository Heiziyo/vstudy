<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/21
 * Time: 14:43
 */
namespace Manage\Model;
use Think\Model;


class CourseModel extends Model{
    protected $arr = array(
        '1' => '入门',
        '2' => '中等难度',
        '3' => '高级进阶',
    );

    protected $_validate = array(
        array('course_name','require','课程名称必须！'), //默认情况下用正则进行验证
    );

    //添加课程
    public function addCouser($data = null){
        if (empty($data)){
            return false;
        }
        if (!is_array($data)){
            return false;
        }
        $cp_id = '';
        if (!empty($data['course_chapter'])){
            foreach ($data['course_chapter'] as $v){
                $data['cp_name'] = $v;
                M('Course_chapter')->add($data);
                $cp_id .= M('Course_chapter')->getLastInsID();
                $cp_id .=",";
            }
        }
        $data['course_chapter']=$cp_id;
        if (!$this->add($data)){
            return false;
        }
        return true;
    }

    //预览课程
    public function view($cid){
        $list = $this -> find($cid);
        $list['course_difficulty'] = $this -> arr[$list['course_difficulty']];
        return $list;
    }
}