<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>课程列表</title>
	<link rel="stylesheet" href="/Public/css/style.css">
	<link rel="stylesheet" href="/Public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/idangerous.swiper.css"/>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container-center">
	<!---------------------heder部分开始------------------>
	<div class="header header2">
		<div class="header-left">
			<div class="logo">
				<a href="/"><img src="/Public/images/logo2.png" /></a>
			</div>
			<ul class="mynav">
				<li><a href="/">首页</a></li>
				<li><a href="shizhan.html">实战</a></li>
				<li><a href="lujing.html">路径</a></li>
				<li><a href="">问答</a></li>
				<li><a href="">手记</a></li>
			</ul>
		</div>
		<div class="header-right header-right2">
			<div class="search">
				<input class="search-input" data-suggest-trigger="suggest-trigger"
				       placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
				<a>搜索</a>
			</div>
			<div class="app">
				APP
			</div>
			<div class="erweima">
				二维码
			</div>
			<div class="user">
				<a href="" class="login">登录</a>
				<a href="" class="register">注册</a>
			</div>
		</div>
	</div>
	<!---------------------heder部分结束------------------>

	<!---------------------头部链接----------------------->
	<div class="wrap ">
		<div class="top">
			<div class="course-content">
				<div class="course-nav-box">
					<div class="course-nav-row clearfix">
						<span class="hd l">方向：</span>
						<div class="bd">
							<ul class="">
								<li class="course-nav-item <?php if(empty($_GET["catid"])): ?>on<?php endif; ?>">
									<a href="<?php echo U('index');?>">全部</a>
								</li>
								<?php if(is_array($catname)): $i = 0; $__LIST__ = $catname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="course-nav-item <?php if($vo["id"] == $_GET["catid"] ): ?>on<?php endif; ?>">
										<a href="<?php echo U('index',array('catid'=>$vo['id'])) ;?>" data-ct="fe"><?php echo ($vo["name"]); ?></a>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
					<div class="course-nav-row clearfix">
						<span class="hd l">分类：</span>
						<div class="bd">
							<ul class="course-nav-item">
								<li class="course-nav-item <?php if(empty($_GET["cid"])): ?>on<?php endif; ?>">
									<a href="<?php echo U('index');?>">全部</a>
								</li>
								<?php if(is_array($chile_cat)): $i = 0; $__LIST__ = $chile_cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="course-nav-item <?php if($vo["id"] == $_GET["cid"] ): ?>on<?php endif; ?>">
										<a href="<?php echo U('index',array('catid'=>$vo['pid'],'cid'=>$vo['id'])) ;?>" data-id="7" data-ct="fe"><?php echo ($vo["name"]); ?></a>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                                                              </ul>
						</div>
					</div>
					<!--<div class="course-nav-row clearfix border_bottom_none">-->
						<!--<span class="hd l">类型：</span>-->
						<!--<div class="bd">-->
							<!--<ul class="">-->
								<!--<li class="course-nav-item on">-->
									<!--<a href="">全部</a>-->
								<!--</li>-->
								<!--<li class="course-nav-item ">-->
									<!--<a href="">基础</a>-->
								<!--</li>-->
								<!--<li class="course-nav-item ">-->
									<!--<a href="">案例</a>-->
								<!--</li>-->
								<!--<li class="course-nav-item ">-->
									<!--<a href="">框架</a>-->
								<!--</li>-->
								<!--<li class="course-nav-item ">-->
									<!--<a href="">工具</a>-->
								<!--</li>-->
								<!--<li class="course-nav-item ">-->
									<!--<a href="">设计模式</a>-->
								<!--</li>-->
							<!--</ul>-->
						<!--</div>-->
					<!--</div>-->
				</div>
			</div>
		</div>
	</div>
	<!---------------------头部链接结束------------------->

	<!----------------------课程部分----------------------->
	<div class="course-container">
		<div class="course-main">
			<div class="tool-left">
				<a href="" class="sort-item active">最新</a>
				<a href="" class="sort-item">最热</a>
			</div>
			<div class="clearfix">

				<?php if(!empty($course_list)): if(is_array($course_list)): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content1">
							<a href="<?php echo U('courseChapter',array('cvdid'=>$vo['course_id']));?>">
								<img src="<?php echo ($vo["course_thumb"]); ?>"/>
								<div class="text1">
									<h3><?php echo ($vo["course_name"]); ?></h3>
									<p><?php echo (mb_substr($vo["course_desc"],0,40,'utf-8')); ?></p>
								</div>
								<h3 class="bottom_text">
									<span class="box-left"><?php echo ($vo["course duration"]); ?></span>
									<span class=" box-right"><?php echo ($vo["course duration"]); ?></span>
								</h3>
							</a>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php else: ?>

					暂无！<?php endif; ?>

			</div>
		</div>
	</div>
	<!----------------------课程部分结束------------------->

	<!-----------------------分页-------------------------->
	<div class="page">
		<span class="disabled_page">首页</span>
		<span class="disabled_page">上一页</span>
		<a href="javascript:void(0)" class="active text-page-tag">1</a>
		<a class="text-page-tag" href="">2</a>
		<a class="text-page-tag" href="">3</a>
		<a class="text-page-tag" href="">4</a>
		<a class="text-page-tag" href="">5</a>
		<a class="text-page-tag" href="">6</a>
		<a class="text-page-tag" href="">7</a>
		<a href="">下一页</a>
		<a href="">尾页</a>
	</div>
	<!-----------------------分页结束---------------------->

	<!-----------------------footer2----------------------->
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
	<!-----------------------footer2结束------------------->
</div>
</body>
</html>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/main.js"></script>