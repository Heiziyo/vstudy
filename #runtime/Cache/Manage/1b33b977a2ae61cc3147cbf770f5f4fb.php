<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>公开课管理平台</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="/Public/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css" />
	<!-- page specific plugin styles -->
	<!-- text fonts -->
	<link rel="stylesheet" href="/Public/assets/css/ace-fonts.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="/Public/assets/css/ace.min.css" id="main-ace-style" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/Public/assets/css/ace-part2.min.css" />
	<![endif]-->
	<link rel="stylesheet" href="/Public/assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="/Public/assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/Public/assets/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="/Public/js/jquery-1.12.0.min.js"></script>
	<script src="/Public/assets/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="/Public/assets/js/html5shiv.min.js"></script>
	<script src="/Public/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="no-skin">
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
	<script type="text/javascript">
		try{ace.settings.check('navbar' , 'fixed')}catch(e){}
	</script>

	<div class="navbar-container" id="navbar-container">
		<!-- #section:basics/sidebar.mobile.toggle -->
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<!-- /section:basics/sidebar.mobile.toggle -->
		<div class="navbar-header pull-left">
			<!-- #section:basics/navbar.layout.brand -->
			<a href="<?php echo U('Manage/Index/index');?>" class="navbar-brand">
				<small>
					<i class="fa fa-leaf"></i>
					旅烨公开课
				</small>
			</a>
			<!-- /section:basics/navbar.layout.brand -->

			<!-- #section:basics/navbar.toggle -->

			<!-- /section:basics/navbar.toggle -->
		</div>

		<!-- #section:basics/navbar.dropdown -->
		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="grey">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-tasks"></i>
						<span class="badge badge-grey">4</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-check"></i>
							4 Tasks to complete
						</li>

						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Software Update</span>
									<span class="pull-right">65%</span>
								</div>

								<div class="progress progress-mini">
									<div style="width:65%" class="progress-bar"></div>
								</div>
							</a>
						</li>

						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Hardware Upgrade</span>
									<span class="pull-right">35%</span>
								</div>

								<div class="progress progress-mini">
									<div style="width:35%" class="progress-bar progress-bar-danger"></div>
								</div>
							</a>
						</li>

						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Unit Testing</span>
									<span class="pull-right">15%</span>
								</div>

								<div class="progress progress-mini">
									<div style="width:15%" class="progress-bar progress-bar-warning"></div>
								</div>
							</a>
						</li>

						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Bug Fixes</span>
									<span class="pull-right">90%</span>
								</div>

								<div class="progress progress-mini progress-striped active">
									<div style="width:90%" class="progress-bar progress-bar-success"></div>
								</div>
							</a>
						</li>

						<li class="dropdown-footer">
							<a href="#">
								See tasks with details
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<li class="purple">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-bell icon-animated-bell"></i>
						<span class="badge badge-important">8</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-exclamation-triangle"></i>
							8 Notifications
						</li>

						<li>
							<a href="#">
								<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												New Comments
											</span>
									<span class="pull-right badge badge-info">+12</span>
								</div>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="btn btn-xs btn-primary fa fa-user"></i>
								Bob just signed up as an editor ...
							</a>
						</li>

						<li>
							<a href="#">
								<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
												New Orders
											</span>
									<span class="pull-right badge badge-success">+8</span>
								</div>
							</a>
						</li>

						<li>
							<a href="#">
								<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
												Followers
											</span>
									<span class="pull-right badge badge-info">+11</span>
								</div>
							</a>
						</li>

						<li class="dropdown-footer">
							<a href="#">
								See all notifications
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<li class="green">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
						<span class="badge badge-success">5</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-envelope-o"></i>
							5 Messages
						</li>

						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar">
								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
										<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
										<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
									</a>
								</li>
							</ul>
						</li>

						<li class="dropdown-footer">
							<a href="inbox.html">
								See all messages
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>
				<!-- #section:basics/navbar.user_menu -->
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
						<span class="user-info">
									<small>欢迎,</small>
									<?php echo (session('manager_name')); ?>
								</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="#">
								<i class="ace-icon fa fa-cog"></i>
								设置
							</a>
						</li>

						<li>
							<a href="profile.html">
								<i class="ace-icon fa fa-user"></i>
								简况
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo U('Index/logout');?>">
								<i class="ace-icon fa fa-power-off"></i>
								退出
							</a>
						</li>
					</ul>
				</li>

				<!-- /section:basics/navbar.user_menu -->
			</ul>
		</div>

		<!-- /section:basics/navbar.dropdown -->
	</div><!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
	<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>

	<!-- #section:basics/sidebar -->
	<div id="sidebar" class="sidebar                  responsive">
		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
		</script>

		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>

				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>

				<!-- #section:basics/sidebar.layout.shortcuts -->
				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>

				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>

				<!-- /section:basics/sidebar.layout.shortcuts -->
			</div>

			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>

				<span class="btn btn-info"></span>

				<span class="btn btn-warning"></span>

				<span class="btn btn-danger"></span>
			</div>
		</div><!-- /.sidebar-shortcuts -->

		<ul class="nav nav-list">
			<li class="active">
				<a href="<?php echo U('Manage/Index/index');?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li <?php if(in_array(ACTION_NAME,$act)): ?>class="active open hsub"<?php endif; ?>>
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">视频管理</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li <?php if(ACTION_NAME == ''): ?>class="active"<?php endif; ?>>
				<a href="<?php echo U('Video/videoList');?>">
					<i class="menu-icon fa fa-caret-right"></i>
					视频列表
				</a>

				<b class="arrow"></b>
				</li>
				<?php
 ?>
				<li <?php if(ACTION_NAME == 'addVideo'): ?>class="active"<?php endif; ?>>
				<a href="<?php echo U('Video/addVideo');?>">
					<i class="menu-icon fa fa-caret-right"></i>
					添加视频
				</a>

				<b class="arrow"></b>
				</li>
			</ul>
			</li>

			<li <?php if(in_array(ACTION_NAME,$act)): ?>class="active open hsub"<?php endif; ?>>
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">课程管理</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li <?php if(ACTION_NAME == ''): ?>class="active"<?php endif; ?>>
				<a href="<?php echo U('');?>">
					<i class="menu-icon fa fa-caret-right"></i>
					课程列表
				</a>

				<b class="arrow"></b>
				</li>
				<?php
 ?>
				<li <?php if(ACTION_NAME == 'addVideo'): ?>class="active"<?php endif; ?>>
				<a href="<?php echo U('Video/addChapter');?>">
					<i class="menu-icon fa fa-caret-right"></i>
					添加课程
				</a>

				<b class="arrow"></b>
				</li>
			</ul>
			</li>

			<li <?php if(in_array(ACTION_NAME,$act)): ?>class="active open hsub"<?php endif; ?>>
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text">会员管理</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>
			<ul class="submenu">
				<li <?php if(ACTION_NAME == 'userList'): ?>class="active"<?php endif; ?>>
				<a href="<?php echo U('User/userList');?>">
					<i class="menu-icon fa fa-caret-right"></i>
					会员列表
				</a>

				<b class="arrow"></b>
				</li>
			</ul>
			</li>
		</ul><!-- /.nav-list -->

		<!-- #section:basics/sidebar.layout.minimize -->
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>

		<!-- /section:basics/sidebar.layout.minimize -->
		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
		</script>
	</div>

	<!-- /section:basics/sidebar -->
	<div class="main-content">
		<!-- #section:basics/content.breadcrumbs -->
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>

			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo U('Manage/Index/index');?>">Home</a>
				</li>
				<li class="active">Dashboard</li>
			</ul><!-- /.breadcrumb -->

			<!-- #section:basics/content.searchbox -->
			<div class="nav-search" id="nav-search">
				<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
				</form>
			</div><!-- /.nav-search -->

			<!-- /section:basics/content.searchbox -->
		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">
			<!-- #section:settings.box -->
			<div class="ace-settings-container" id="ace-settings-container">
				<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
					<i class="ace-icon fa fa-cog bigger-150"></i>
				</div>

				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<!-- #section:settings.skins -->
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="no-skin" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<!-- /section:settings.skins -->

						<!-- #section:settings.navbar -->
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<!-- /section:settings.navbar -->

						<!-- #section:settings.sidebar -->
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<!-- /section:settings.sidebar -->

						<!-- #section:settings.breadcrumbs -->
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<!-- /section:settings.breadcrumbs -->

						<!-- #section:settings.rtl -->
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<!-- /section:settings.rtl -->

						<!-- #section:settings.container -->
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>

						<!-- /section:settings.container -->
					</div><!-- /.pull-left -->

					<div class="pull-left width-50">
						<!-- #section:basics/sidebar.options -->
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>

						<!-- /section:basics/sidebar.options -->
					</div><!-- /.pull-left -->
				</div><!-- /.ace-settings-box -->
			</div><!-- /.ace-settings-container -->
		<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/plupload/js/plupload.full.min.js"></script>
<script type="text/javascript" src="/Public/layer/layer.js"></script>
<style>
	li{list-style-type: none;}
	.red{color: red;}
	.add-course-container{

	}
	.add-course-list{
		border-top: 1px solid #ccc;
		margin-top: 20px;
		padding-top: 10px;
		padding-left: 0;
	}
	.course-li{
		margin-bottom: 10px;
		float: left;
		margin-right: 20px;
		margin-left: 10px;
	}
	#course-add{
		margin-left: 20px;
	}
	.course-del:hover{
		color: red;
	}
	@media screen and (max-width: 768px) {
		#course-add{margin-left: 0;}
		#input-course{margin-left: 0!important;}
	}

	.uploader-poster-box{
		position: relative;
		margin-bottom: 30px;
	}
	.uploader-poster{
		z-index: 999;
		cursor: pointer;
		text-indent: 14px;
		font-size: 14px;
		position: absolute;
		bottom: 0;
		left: 0;
		border: none;
		width: 140px;
		margin-left: 14px;
		background-color: rgba(0,0,0,.6);
		color: #fff;
	}

	.uploader-input-box{
		position: absolute;
		width: 170px;
		height: 40px;
		left: 50%;
		margin-left: -85px;
		background: none;
	}
	.uploader-input{
		border: 0;
		overflow: hidden;
		display: block;
		outline:none;
		width: 100%;
		height: 100%;
		opacity: 0;
		cursor: pointer;
	}
	#poster-title {
		display: block;
		margin: 0 auto;
		width: 260px;
		padding-top: 60px;
		font-size: 14px;
		text-align: center;
	}
	#progressbar2{
		width: 620px;
		margin: 0 auto;
	}
	.form-actions{
		border-top: none;
		background: none;
	}
	.poster-fadeback{
		text-align: center;
	}
</style>
<div class="page-content-area">
	<div class="page-header">
		<h1>
			添加课程
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				包含课程章节
			</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<form class="form-horizontal" role="form" method="post" action="">
				<!-- #section:elements.form -->
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 课程名称 </label>
					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="课程名称" class="col-xs-10 col-sm-5" name="course_name"  />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">课程分类</label>
					<div class="col-sm-9">
						<select class="col-sm-3 col-xs-12" id="select-type" name="course_type">
							<option value="0">请选择课程分类</option>
							<?php if(is_array($coursetype)): $i = 0; $__LIST__ = $coursetype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["c_id"]); ?>" ><?php echo ($vo["c_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">课程方向</label>
					<div class="col-sm-9">
						<select class="col-sm-3 col-xs-12" id="select-fx" name="course_forword">
							<option value="0">请选择方向</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 难度级别 </label>
					<div class="col-sm-3">
						<select class="form-control" id="form-field-select-1" name="course_difficulty">
							<option value="0">请选择难度级别</option>
							<option value="1">入门</option>
							<option value="2">中等难度</option>
							<option value="3">高级进阶</option>
						</select>
					</div>
				</div>
				<!-- /section:elements.form -->
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 课程时长 </label>
					<div class="col-sm-9">
						<input type="text" id="form-field-2" placeholder="课程时长" class="col-xs-10 col-sm-5" name="course_time" value="" />
						<span class="help-inline col-xs-12 col-sm-7">
							<span class="middle">按照分钟计算</span>
						</span>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 综合评分 </label>
					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="综合评分" class="col-xs-10 col-sm-5" name="course_score" />
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group add-course-container">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">章节名称</label>
					<div >
						<div class="pos-rel" >
							<input class="typeahead scrollable col-sm-3 col-xs-12 col-xs-offset-0" style="margin-left:12px;" id="input-course" type="text" placeholder="请输入章节名称" name="course_chapter[]" />
						</div>
					</div>
					<button type="button" class="btn btn-default col-sm-2 col-xs-offset-0 col-xs-12" id="course-add">添加</button>
					<span class="course-tips col-sm-2 col-xs-12"  style=" height:37px; line-height: 37px; margin-left: 20px; display: block;"></span>
					<div class="add-course-list  col-sm-8 col-sm-offset-3 col-xs-12 ">
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 课程简介 </label>
					<div class="col-sm-9">
						<textarea name="course_desc" cols="100" rows="10"></textarea>
					</div>
				</div>


				<div id="test">
					<div class="video-uploader-upload-background"></div>
					<div class="uploader-poster-box">
						<div class="form-group">
							<label for="name"  class="col-sm-2 col-sm-offset-1" style="text-align: right;padding-right: 0;" >章节封面</label>
							<div class="edit-input col-sm-8  col-xs-12" style="position: relative">
								<img id="poster-img" class="video-poster" src="http://p1.pstatp.com/large/9777/4010962160" width="140" height="92">
								<button type="button" id="uploader-poster" class="new-btn modify-poster uploader-poster" ga="2章节封面-纯视频">上传章节封面</button>
							</div>
						</div>
						<div class="uploader-input-box"><input type="file" class="uploader-input" id="uploader-input" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"></div>
						<h3 class="header blue lighter smaller center-block " >
							<span id="poster-title" ></span>
						</h3>
						<div id="progressbar2" class="ui-progressbar ui-widget ui-widget-content ui-corner-all progress progress-striped active " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
							<div class="ui-progressbar-value ui-widget-header ui-corner-left progress-bar progress-bar-success" id="progress-width2" style="width: 0%;"></div>
						</div>
						<div class="poster-fadeback"> </div>
					</div>
				</div>

				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							保存
						</button>
						<input type="hidden" name="course_thumbnail" id="course_thumbnail" value="">
						&nbsp; &nbsp; &nbsp;
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							重置
						</button>
					</div>
				</div>
			</form>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content-area -->
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>


<script>
	$(function () {
		$("#course-add").on("click",function(){
			var addCourse=$("#input-course").val();
			if(addCourse==""){
				$(".course-tips").text("请先输入！").addClass("red")
			}
			else{
				var vv=$("<input class='ss' type='text' name='course_chapter[] '><i class='glyphicon glyphicon-remove course-del'></i>");
				vv.val(addCourse);
				var hh=$("<li class='course-li'></li>");
				$(hh).append(vv);
				$(".add-course-list").append(hh);
				$(".course-tips").text("");
			};
		});

		$(".add-course-list").on("click",".course-del", function() {
			$(this).parents(".course-li").remove().stop().remove();
		});
		})
</script>


<!----------------获取下拉列表值------------------------>
<script>
	$(function () {
		$("#select-type").change(function () {
			var pid = $(this).val();
			$("#select-fx").children().remove()
			$.get('getCourseForword',{pid:pid},function (data) {
				$.each(data,function (index,info) {
					$("#select-fx").append("<option value='"+ info.c_id +"'>"+ info.c_name + "</option>");
				})
			},"json");
		});
	})
</script>
<script>
	//	上传封面
	var uploader_poster= new plupload.Uploader({
		runtimes : 'html5,flash,silverlight',
		browse_button : ['uploader-poster'], //触发文件选择对话框的按钮，为那个元素id
		url : '<?php echo U("upChapter");?>', //服务器端的上传页面地址
		filters : {
			max_file_size : '100m',
			mime_types: [
				{title : "Images files", extensions : "jpg,gif,png"}
			]
		},
		multi_selection:false,
		init: {
			FilesAdded: function(up, files) { //文件上传前
				uploader_poster.start();//启动
				console.log("图片上传启动");
				plupload.each(files, function(file) {
					$("#uploader-poster").hide();
					$("#poster-title").append(file.name);
				});
				return false;
			},

			//上传过程中进度条显示
			UploadProgress: function(up, file) {
				$("#progress-width2").css("width",file.percent +"%")
			},
			//上传成功回调
			FileUploaded: function (up, file, info) {
				var data = JSON.parse(info.response)
				if(info.status == 200)
				{
					$(".poster-fadeback").text("文件上传成功!").addClass("green");
					$('#poster-img').attr('src',data.result)
					$('#course_thumbnail').val(data.result)
				}
			},
			//上传失败回调
			Error: function(event, queueID, fileObj) {
				$(".poster-fadeback").text("文件上传失败!").addClass("red");
			},
		}
	});
	uploader_poster.init();
</script>

		</div>
	</div>
	</div><!-- /.main-content -->

	<div class="footer">
		<div class="footer-inner">
			<!-- #section:basics/footer -->
			<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">旅烨</span>
							 公开课 &copy; 2013-2017
						</span>

				&nbsp; &nbsp;
				<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
			</div>

			<!-- /section:basics/footer -->
		</div>
	</div>

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
	window.jQuery || document.write("<script src='/Public/assets/js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
	window.jQuery || document.write("<script src='/Public/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/Public/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="/Public/assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="/Public/assets/js/jquery-ui.custom.min.js"></script>
<script src="/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/assets/js/jquery.easypiechart.min.js"></script>
<script src="/Public/assets/js/jquery.sparkline.min.js"></script>
<script src="/Public/assets/js/flot/jquery.flot.min.js"></script>
<script src="/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->
<script src="/Public/assets/js/ace-elements.min.js"></script>
<script src="/Public/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		$('.easy-pie-chart.percentage').each(function(){
			var $box = $(this).closest('.infobox');
			var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
			var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
			var size = parseInt($(this).data('size')) || 50;
			$(this).easyPieChart({
				barColor: barColor,
				trackColor: trackColor,
				scaleColor: false,
				lineCap: 'butt',
				lineWidth: parseInt(size/10),
				animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
				size: size
			});
		});

		$('.sparkline').each(function(){
			var $box = $(this).closest('.infobox');
			var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
			$(this).sparkline('html',
					{
						tagValuesAttribute:'data-values',
						type: 'bar',
						barColor: barColor ,
						chartRangeMin:$(this).data('min') || 0
					});
		});


		//flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
		//but sometimes it brings up errors with normal resize event handlers
		$.resize.throttleWindow = false;

		var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
		var data = [
			{ label: "social networks",  data: 38.7, color: "#68BC31"},
			{ label: "search engines",  data: 24.5, color: "#2091CF"},
			{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
			{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
			{ label: "other",  data: 10, color: "#FEE074"}
		];
		function drawPieChart(placeholder, data, position) {
			$.plot(placeholder, data, {
				series: {
					pie: {
						show: true,
						tilt:0.8,
						highlight: {
							opacity: 0.25
						},
						stroke: {
							color: '#fff',
							width: 2
						},
						startAngle: 2
					}
				},
				legend: {
					show: true,
					position: position || "ne",
					labelBoxBorderColor: null,
					margin:[-30,15]
				}
				,
				grid: {
					hoverable: true,
					clickable: true
				}
			})
		}
		drawPieChart(placeholder, data);

		/**
		 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
		 so that's not needed actually.
		 */
		placeholder.data('chart', data);
		placeholder.data('draw', drawPieChart);


		//pie chart tooltip example
		var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
		var previousPoint = null;

		placeholder.on('plothover', function (event, pos, item) {
			if(item) {
				if (previousPoint != item.seriesIndex) {
					previousPoint = item.seriesIndex;
					var tip = item.series['label'] + " : " + item.series['percent']+'%';
					$tooltip.show().children(0).text(tip);
				}
				$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
			} else {
				$tooltip.hide();
				previousPoint = null;
			}

		});






		var d1 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.5) {
			d1.push([i, Math.sin(i)]);
		}

		var d2 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.5) {
			d2.push([i, Math.cos(i)]);
		}

		var d3 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.2) {
			d3.push([i, Math.tan(i)]);
		}


		var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
		$.plot("#sales-charts", [
			{ label: "Domains", data: d1 },
			{ label: "Hosting", data: d2 },
			{ label: "Services", data: d3 }
		], {
			hoverable: true,
			shadowSize: 0,
			series: {
				lines: { show: true },
				points: { show: true }
			},
			xaxis: {
				tickLength: 0
			},
			yaxis: {
				ticks: 10,
				min: -2,
				max: 2,
				tickDecimals: 3
			},
			grid: {
				backgroundColor: { colors: [ "#fff", "#fff" ] },
				borderWidth: 1,
				borderColor:'#555'
			}
		});


		$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('.tab-content');
			var off1 = $parent.offset();
			var w1 = $parent.width();

			var off2 = $source.offset();
			//var w2 = $source.width();

			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}


		$('.dialogs,.comments').ace_scroll({
			size: 300
		});


		//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
		//so disable dragging when clicking on label
		var agent = navigator.userAgent.toLowerCase();
		if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
			$('#tasks').on('touchstart', function(e){
				var li = $(e.target).closest('#tasks li');
				if(li.length == 0)return;
				var label = li.find('label.inline').get(0);
				if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
			});

		$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
				}
		);
		$('#tasks').disableSelection();
		$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
			if(this.checked) $(this).closest('li').addClass('selected');
			else $(this).closest('li').removeClass('selected');
		});


		//show the dropdowns on top or bottom depending on window height and menu position
		$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
			var offset = $(this).offset();

			var $w = $(window)
			if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
				$(this).addClass('dropup');
			else $(this).removeClass('dropup');
		});

	})
</script>

<!-- the following scripts are used in demo only for onpage help and you don't need them -->
<link rel="stylesheet" href="/Public/assets/css/ace.onpage-help.css" />
<link rel="stylesheet" href="/Public/docs/assets/js/themes/sunburst.css" />

<script type="text/javascript"> ace.vars['base'] = '..'; </script>
<script src="/Public/assets/js/ace/elements.onpage-help.js"></script>
<script src="/Public/assets/js/ace/ace.onpage-help.js"></script>
<script src="/Public/docs/assets/js/rainbow.js"></script>
<script src="/Public/docs/assets/js/language/generic.js"></script>
<script src="/Public/docs/assets/js/language/html.js"></script>
<script src="/Public/docs/assets/js/language/css.js"></script>
<script src="/Public/docs/assets/js/language/javascript.js"></script>
</body>
</html>