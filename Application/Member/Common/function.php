<?php
/**
 * @param $filename 上传文件名称
 * @param $dir  目录
 * @return array    上传状态,成功返回状态码‘1’和图片,失败返回状态码‘0’和错误提示
 */
function uploadOneImage($filename,$dir){
    $root_path  = C('UPLOAD_ROOT_PATH');// 取出根目录
    $upload_max_filesize = (int)C('UPLOAD_MAX_FILESIZE');//取出允许上传的单个文件大小。
    $max_filesize = (int)ini_get('upload_max_filesize');
    $upload_allow_ext = C('UPLOAD_ALLOW_EXT');
    $upload = new \Think\Upload();
    $upload->maxSize    =    min($upload_max_filesize,$max_filesize)*1024*1024;// 设置附件上传大小
    $upload->exts       =    $upload_allow_ext;
    $upload->rootPath   =    $root_path;
    $upload->savePath   =    $dir.'/';
    $info   =   $upload->upload(array("$filename"=>$_FILES[$filename]));
    if($info){
        //上传成功,保存原图
        $user_photo = $info[$filename]['savepath'].$info[$filename]['savename'];
        $img[]=$user_photo;
        //生成缩略图
        $image = new \Think\Image();
        $image->open($root_path.$user_photo);
        //制作一个缩略图的文件名
        $user_thumb = $info[$filename]['savepath'].'thum_'.$info[$filename]['savename'];
        $image->thumb(29,29,Think\Image::IMAGE_THUMB_FILLED)->save($root_path.$user_thumb);
        $img[]=$user_thumb;
        return array(
            'status'=>1,
            'img'=>$img
        );
    }else{
        //上传失败，返回错误提示
        return array(
            'status'=>0,
            'error'=>$upload->getError()
        );
    }
}

function getUserPhoto(){

    $uid=$_SESSION['uid'];
    $model=M('user_info');
    $data=$model->where("user_id=$uid")->find();
    $url='';
    if(!isset($data['user_thumb'])){
        $url='/Public/member/assets/img/avatars/adam-jansen.jpg';
        return $url;
    }else{
        $url='/Public/photoUploads/'.$data['user_thumb'];
        return $url;
    }
}