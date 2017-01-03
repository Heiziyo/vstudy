<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/27
 * Time: 14:08
 */
namespace Course\Model;
use Think\Model;

class CourseModel extends Model{



    public function getChapter($chapterid){
        $model = M('video');
        $info = $model->where('v_coursechapter = '.$chapterid)->select();
        return $info;
    }

}