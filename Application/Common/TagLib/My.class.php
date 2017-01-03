<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/23
 * Time: 11:44
 */
namespace Common\TagLib;
use Think\Template\TagLib;


class MY extends TagLib{
    // 数据库where表达式
    protected $comparisonvstudy = array(
        '{eq}' => '=',
        '{neq}' => '<>',
        '{elt}' => '<=',
        '{egt}' => '>=',
        '{gt}' => '>',
        '{lt}' => '<',
    );

    protected $tags   =  array(
        'chapter'    =>  array('attr'=>'name,id,chapterid,offset,length,key,mod','level'=>3,'alias'=>'iterate'),

    );




    public function _chapter($tag,$content){
        if (!empty($tag['chapterid'])){


        }
        $chapyid =$tag['chapterid'];
        //拼接php代码
        $parseStr = '<?php';
        $parseStr .= ' $content_tag = \Think\Think::instance("Course\Model\CourseModel");' . "\r\n";

        //根据当前chaptid 获取内容

        $parseStr .='$data = $content_tag->getChapter();';
        //解析模板
        $parseStr .= 'var_dump(11);';

        $parseStr .= ' ?>';

        return $tag['chapterid'];
    }
}