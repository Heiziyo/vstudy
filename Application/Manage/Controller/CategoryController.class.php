<?php
/**
 * Created by PhpStorm.
 * User: 黑子
 * Date: 2016/12/13
 * Time: 11:54
 */
namespace Manage\Controller;
use OSS\OssClient;
use Think\Controller;
use Common\Controller\BaseController;

class CategoryController extends BaseController
{
    public function _initialize()
    {
        if (!session('?manager_id')) {
            $this->display('Index/login');
            die();
        }
    }

    //分类列表
    public function categoryList(){
        $top = $this -> digui();
        $this -> assign('category',$top);
        $this -> display();
    }

    public function digui($pid = 0,$arr = [],$list = 0){
        $ct = M('class_type');
        $res = $ct -> where(['c_pid'=>$pid]) -> select();
        $list++;
        if($res){
            foreach($res as $v){
                $v['list'] = $list;
                $arr[] = $v;
                $arr = $this -> digui($v['c_id'],$arr,$list);
            }
        }
        return $arr;
    }

    //添加课程方向
    public function addForword(){
        $ct = M('class_type');
        if(IS_POST){
            if(($data = $ct -> create(I('post.')))){
                if($ct -> add($data)){
                    $this -> success('添加课程方向成功！',U('categoryList'));
                }else{
                    $this -> error('添加课程方向失败！',U('categoryList'));
                }
            }else{
                $this -> error($ct -> getError());
            }
        }
    }

    //删除课程分类或方向
    public function delCategory(){
        if(IS_POST){
            if(M('class_type') -> where(['c_id'=>I('post.c_id')]) -> delete()){
                $this -> success('删除成功！',U('categoryList'));
            }else{
                $this -> error('删除失败！',U('categoryList'));
            }
        }
    }

    //修改课程分类或方向
    public function updateCategory(){
        $ct = M('class_type');
        if(IS_POST){
            $cid = I('post.c_id');
            unset($_POST['c_id']);
            if(($data = $ct -> create())){
                if($ct -> where(['c_id'=>$cid]) -> save($data)){
                    $this -> success('修改成功！',U('categoryList'));
                }else{
                    $this -> error('修改失败！',U('categoryList'));
                }
            }else{
                $this -> error($ct -> getError());
            }
        }elseif(IS_GET){
            $forword = $ct -> find(I('get.c_id'));
            if($forword['c_pid'] == 0){
                $forword['c_pname'] = '顶级分类';
            }else{
                $f = $ct -> where(['c_id'=>$forword['c_pid']]) -> find();
                $forword['c_pname'] = $f['c_name'];
            }
            $cate = $ct -> where(['c_pid'=>0]) -> select();
            $this -> assign('forword',$forword);
            $this -> assign('cate',$cate);
            $this -> display();
        }
    }

    //添加分类
    public function addCategory(){
        $ct = M('class_type');
        if(IS_POST){
            if(($data = $ct -> create(I('post.')))){
                if($ct -> add($data)){
                    $this -> success('添加分类成功！',U('categoryList'));
                }else{
                    $this -> error('添加分类失败！',U('categoryList'));
                }
            }else{
                $this -> error($ct -> getError());
            }
        }else{
            $cate = $ct -> where(['c_pid'=>0]) -> select();
            $this -> assign('cate',$cate);
            $this -> display();
        }
    }
}