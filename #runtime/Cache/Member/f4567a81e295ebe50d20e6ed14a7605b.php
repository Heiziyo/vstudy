<?php if (!defined('THINK_PATH')) exit();?>﻿<?php
 ?>
<!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>注册</title>

    <meta name="description" content="register page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/Public/member/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/Public/member/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="/Public/member/assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="/Public/member/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/animate.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/style.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/Public/member/assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="register-container animated fadeInDown">
        <div class="registerbox bg-white">
            <div class="registerbox-title">注册账号</div>

            <div class="registerbox-caption">请输入您的帐号信息<a href="<?php echo U('Public/login')?>">已有账号？直接登录</a></div>
            <form action="" method="post" onsubmit="return checkForm(this);">
            <div class="registerbox-textbox">
                <input type="text" class="form-control" id="name" name="user_name" placeholder="用户名至少为3位" maxlength="20" />
            </div>
            <div class="registerbox-textbox">
                <input type="text" class="form-control" id="nc" name="user_nc" placeholder="昵称最多为6位" maxlength="6" />
            </div>
            <div class="registerbox-textbox">
                <input type="text" class="form-control" id="email" name="user_email" placeholder="用户邮箱用于找回密码" maxlength="20" />
            </div>
            <div class="registerbox-textbox">
                <input type="password" class="form-control" id="pwd" name="user_pwd" placeholder="密码6到12位数字或字母组成" maxlength="12" />
            </div>
            <div class="registerbox-textbox">
                <input type="password" class="form-control" id="rpwd" name="rpassword" placeholder="请再次输入密码" maxlength="12" />
            </div>
            <!--<hr class="wide" />-->
            <div  class="registerbox-textbox">
                <input type="text" class="form-control" name="code"  placeholder="验证码" id="code"  maxlength="4" />
                <!-- 点击切换 -->
                <img src="/Member/Public/code" onclick="this.src='/Member/Public/code/' + Math.random();" />
                <a href="javascript:void(0);">点击图片切换验证码</a>
            </div>
<!--            <div class="registerbox-textbox">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-6 padding-right-10">
                        <input type="text" class="form-control" placeholder="Month" />
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-3 no-padding padding-right-10">
                        <input type="text" class="form-control" placeholder="Day" />
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-3 no-padding-left">
                        <input type="text" class="form-control" placeholder="Year" />
                    </div>
                </div>
            </div>-->
            <div class="rcheckbox" >
                <div>
                    <label>
                        <input type="checkbox"  checked="checked">
                        <span class="text blueberry">我同意《旅烨公开课用户协议》</span>
                    </label>
                </div>
                <div><input type="submit" class="btn btn-primary pull-left" value="完成"></div>

            </div>

            </form>
            <div class="rfoot">
                <span class="bigger-120">
                 旅烨公开课 &copy; 2013-2017
                </span>
            </div>
        </div>
<!--        <div class="logobox">
        </div>-->

    </div>


    <!--Basic Scripts-->
    <script src="/Public/member/assets/js/jquery-2.0.3.min.js"></script>
    <script src="/Public/member/assets/js/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/Public/member/assets/js/beyond.min.js"></script>
    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-52103994-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script>
        function checkForm(form){
            if(form.name.value==""){
                alert("用户名不能为空！");
                return false;
            }
            if(form.name.value<6 || form.name.value>12){
                alert("用户名为6到12位")
            }
            if(form.pwd.value==""){
                alert("密码不能为空！");
                return false;
            }
            if(form.code.value==""){
                alert("验证码不能为空！");
                return false;
            }
            if(form.nc.value==""){
                alert("昵称不能为空！");
                return false;
            }
            if(form.pwd.value!==form.rpwd.value){
                alert("两次输入的密码不一致！");
                return false;
            }
            return true;
        }
    </script>
</body>
<!--Body Ends-->
</html>