<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cookie断点播放</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/Public/css/style.css">
	<link rel="stylesheet" href="/Public/css/reset.css">
	<style>
		#player{margin: 0 auto}
		.jw-dock-image {
			width: 100%;
			height: 100%;
			background-position: 50% 50%;
			background-repeat: no-repeat;
			opacity: .75;
		}
		.jw-icon {
			font-family: jw-icons;
			-webkit-font-smoothing: antialiased;
			font-style: normal;
			font-weight: 400;
			text-transform: none;
			background-color: transparent;
			font-variant: normal;
			-webkit-font-feature-settings: "liga";
			-ms-font-feature-settings: "liga" 1;
			-o-font-feature-settings: "liga";
			font-feature-settings: "liga";
			-moz-osx-font-smoothing: grayscale;
		}
		.jwplayer * {
			box-sizing: inherit;
		}
		.jw-reset {
			color: inherit;
			background-color: transparent;
			padding: 0;
			margin: 0;
			float: none;
			font-family: Arial,Helvetica,sans-serif;
			font-size: 1em;
			line-height: 1em;
			list-style: none;
			text-align: left;
			text-transform: none;
			vertical-align: baseline;
			border: 0;
			direction: ltr;
			font-variant: inherit;
			font-stretch: inherit;
			-webkit-tap-highlight-color: rgba(255,255,255,0);
		}

		.jw-dock-image {
			background-size: 45%;
			opacity: 1;
		}

	</style>
</head>
<body>
<div class="container-center">
	<!---------------------heder部分开始------------------>
	<div class="videoHeader clearfix">
		<ul class="header-l">
			<li class="back"><a href="learnlist.html"> 返回 </a></li>
			<li class="neirong"><a href="">原生JS实现动画库 </a></li>
			<li class="zhangjie"><a href="">1-1认识帧动画</a></li>
			<li class="share"><a href="">分享</a></li>
			<li class="bds_tsina"><a href="" title="分享到微薄">微博</a></li>
			<li class="bds_weixin"><a href="" title="分享到威信">微信</a></li>
			<li class="bds_qzone"><a href="" title="分享到QQ空间">QQ</a></li>
		</ul>
		<div class="header-right header-right2">
			<div class="app">
				APP
			</div>
			<div class="erweima">
				二维码
			</div>
			<div class="user-login" >
				<a href="" class="message" title="我的通知">通知</a>
				<a href="" class="email" title="我得消息">消息</a>
				<a href="" class="userHPic" title="我得消息"><img src="/Public/images/user.jpg"></a>
			</div>
		</div>
	</div>
	<!---------------------heder部分结束------------------>
	<div id="big">
		<div id="player">Loading the player...</div>
		<div id="log" class="well"></div>
	</div>

	<!--评论区域-->
	<div class="video-center clearfix">
		<div class="video-left l">
			<div id="uyan_frame"></div>
		</div>
		<div class="video-right r">
			<div class="courseLink">
				<h4>推荐课程</h4>
				<ul>
					<li><a href="">7天搞定Node.js微信公众号开发</a></li>
					<li><a href="">方式开发 Web App全站</a></li>
					<li><a href="">商城分类导航效果</a></li>
					<li><a href="">7天搞定Node.js微信公众号开发</a></li>
					<li><a href="">方式开发 Web App全站</a></li>
					<li><a href="">商城分类导航效果</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--评论区域-->
	<!--footer2-->
	<div class="footer2">
		<div class="waper">
			<div class="footerwaper clearfix">
				<div class="followus r">
					<a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
						<div class="flw-weixin-box"></div>
					</a>
					<a class="followus-weibo" href="" target="_blank" title="新浪微博"></a>
					<a class="followus-qzone" href="" target="_blank" title="QQ空间"></a>
				</div>
				<div class="footer_intro l">
					<div class="footer_link">
						<ul>
							<li><a href="" target="_blank">网站首页</a></li>
							<li><a href="" target="_blank">人才招聘</a></li>
							<li><a href="" target="_blank">联系我们</a></li>
							<li><a href="" target="_blank">旅烨云</a></li>
							<li><a href=" " target="_blank">关于我们</a></li>
							<li><a href="" target="_blank">讲师招募</a></li>
							<li><a href=" " target="_blank">意见反馈</a></li>
							<li><a href="" target="_blank">友情链接</a></li>
						</ul>
					</div>
					<p>版权所有 © 2011-2016 上海旅烨网络科技有限公司，严禁抄袭复制</p>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-->
</div>
</body>
</html>
<script type="text/javascript">
	var $cookie = {
		getItem: function(sKey) {
			return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
		},
		setItem: function(sKey, sValue, vEnd, sPath, sDomain, bSecure) {
			if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) {
				return false;
			}
			var sExpires = "";
			if (vEnd) {
				switch (vEnd.constructor) {
					case Number:
						sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
						break;
					case String:
						sExpires = "; expires=" + vEnd;
						break;
					case Date:
						sExpires = "; expires=" + vEnd.toUTCString();
						break;
				}
			}
			document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
			return true;
		},
		removeItem: function(sKey, sPath, sDomain) {
			if (!sKey || !this.hasItem(sKey)) {
				return false;
			}
			document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
			return true;
		},
		hasItem: function(sKey) {
			return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
		},
		keys: /* optional method: you can safely remove it! */ function() {
			var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
			for (var nIdx = 0; nIdx < aKeys.length; nIdx++) {
				aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]);
			}
			return aKeys;
		}
	};
//	var logMessage = function(message) {
//		document.getElementById('log').innerHTML += message += '<br />';
//	}

</script>
<!--基本文件-->
<link href="/Public/jwplayer/skins/five.css" rel="stylesheet" type="text/css">
<script src="/Public/jwplayer/jquery.min.js"></script>
<script src="/Public/jwplayer/jwplayer.js"></script>
<script src="/Public/jwplayer/jwpsrv.js"></script>
<script src="/Public/jwplayer/html5media.min.js"></script>
<!--cookie-->
<script src="/Public/jwplayer/DbXZPMBQ.js"></script>
<!--自定义-->
<script src="/Public/jwplayer/main.js"></script>
<!--视频倍速播放-->
<script type="text/javascript" src="/Public/jwplayer/speed.js"></script>
<!--友言-->
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>