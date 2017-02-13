<?php
namespace Common\Controller;
use Think\Controller;

class LoginController extends Controller{

    public function _initialize(){


        if(isset($_COOKIE['uid']) && !isset($_SESSION['uid'])){
            $m=D('User');
            $where=array('user_name'=>$_COOKIE['user_name']);
            if($id=$m->where($where)->getField('user_id')){
                $_SESSION['uid']=$id;
                $_SESSION['user_name']=$_COOKIE['user_name'];
                $this->log();
                $this->success('欢迎回来',U('Course/index'));exit;
            }

        }else{
            return false;
        }
    }

    //判断是否是手机端还是电脑端
    function isMobile(){
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])){
            return true;
        }
        if (isset ($_SERVER['HTTP_VIA'])){
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        }
        if (isset ($_SERVER['HTTP_USER_AGENT'])){
            $clientkeywords = array ('nokia',
                'sony',
                'eriCSSon',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap',
                'mobile'
            );
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))){
                return true;
            }
        }
        if (isset ($_SERVER['HTTP_ACCEPT'])){
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))){
                return true;
            }
        }
        return false;
    }

    public function log(){
        $mobile = $this->isMobile(); //实例化该方法
        if($mobile=="true"){
            $login_machine='mobile';
        }else{
            $login_machine='web';
        }
        if(isset($_SESSION['uid'])){
            $model=M('user_opreate');
            $login_ip='27.18.95.175';
            $login_time=date('Y-m-d H:i:s');
            $taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$login_ip;
            $IPinfo = json_decode(file_get_contents($taobaoIP));
            $province = $IPinfo->data->region;
            $city = $IPinfo->data->city;
            $address = $province.$city;
            $data=array('user_id'=>$_SESSION['uid'],'login_ip'=>$login_ip,'login_time'=>$login_time,'login_address'=>$address,'login_machine'=>$login_machine);
            $model->add($data);
        }
    }
}