<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/4
 * Time: 15:10
 */

namespace Member\Model;
use Think\Model;

class CourseModel extends Model{
    protected $_validate = array(
        array('course_name','require','课程名称必须！'),
    );
}