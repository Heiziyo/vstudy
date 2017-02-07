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

    public function _initialize()
    {

        $act = array("addChapter", 'videoList', 'addVideo', 'videoType');
        $this->assign('act', $act);
    }
}