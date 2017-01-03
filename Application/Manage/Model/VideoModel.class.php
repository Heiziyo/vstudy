<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/21
 * Time: 14:43
 */
namespace Manage\Model;
use Think\Model;


class VideoModel extends Model{
    protected $tableName = 'course';
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
}