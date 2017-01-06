<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Simple Tables</title>

    <meta name="description" content="simple and responsive tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/Public/member/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/Public/member/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="/Public/member/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="/Public/member/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/typicons.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/Public/member/assets/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loading-progress">
            <div class="rotator">
                <div class="rotator">
                    <div class="rotator colored">
                        <div class="rotator">
                            <div class="rotator colored">
                                <div class="rotator colored"></div>
                                <div class="rotator"></div>
                            </div>
                            <div class="rotator colored"></div>
                        </div>
                        <div class="rotator"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="/Public/member/assets/img/logo.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon fa fa-warning"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-phone bg-themeprimary white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Skype meeting with Patty</span>
                                                    <span class="description">01:00 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o themeprimary"></i>
                                                    <span class="description">office</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-check bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Uncharted break</span>
                                                    <span class="description">03:30 pm - 05:15 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o darkorange"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-gift bg-warning white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Kate birthday party</span>
                                                    <span class="description">08:30 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-calendar warning"></i>
                                                    <i class="fa fa-clock-o warning"></i>
                                                    <span class="description">at home</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-glass bg-success white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Dinner with friends</span>
                                                    <span class="description">10:30 pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer ">
                                        <span>
                                            Today, March 28
                                        </span>
                                        <span class="pull-right">
                                            10°c
                                            <i class="wi wi-cloudy"></i>
                                        </span>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                            <li>
                                <a class="wave in dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon fa fa-envelope"></i>
                                    <span class="badge">3</span>
                                </a>
                                <!--Messages Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                    <li>
                                        <a href="#">
                                            <img src="/Public/member/assets/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Divyia Austin
                                                </span>
                                                <span class="message-time">
                                                    2 minutes ago
                                                </span>
                                                <span class="message-subject">
                                                    Here's the recipe for apple pie
                                                </span>
                                                <span class="message-body">
                                                    to identify the sending application when the senders image is shown for the main icon
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/Public/member/assets/img/avatars/bing.png" class="message-avatar" alt="Microsoft Bing">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Bing.com
                                                </span>
                                                <span class="message-time">
                                                    Yesterday
                                                </span>
                                                <span class="message-subject">
                                                    Bing Newsletter: The January Issue‏
                                                </span>
                                                <span class="message-body">
                                                    Discover new music just in time for the Grammy® Awards.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/Public/member/assets/img/avatars/adam-jansen.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Nicolas
                                                </span>
                                                <span class="message-time">
                                                    Friday, September 22
                                                </span>
                                                <span class="message-subject">
                                                    New 4K Cameras
                                                </span>
                                                <span class="message-body">
                                                    The 4K revolution has come over the horizon and is reaching the general populous
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!--/Messages Dropdown-->
                            </li>

                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                    <i class="icon fa fa-tasks"></i>
                                    <span class="badge">4</span>
                                </a>
                                <!--Tasks Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                    <li class="dropdown-header bordered-darkorange">
                                        <i class="fa fa-tasks"></i>
                                        4 Tasks In Progress
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Account Creation</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Profile Data</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Updating Resume</span>
                                                <span class="pull-right">75%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Adding Contacts</span>
                                                <span class="pull-right">10%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="#">
                                            See All Tasks
                                        </a>
                                        <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i class="fa fa-check"></i></button>
                                    </li>
                                </ul>
                                <!--/Tasks Dropdown-->
                            </li>
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="/Public/member/assets/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="email"><a>David.Stevenson@live.com</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <img src="/Public/member/assets/img/avatars/adam-jansen.jpg" class="avatar">
                                            <span class="caption">Change Photo</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.html" class="pull-left">Profile</a>
                                        <a href="#" class="pull-right">Setting</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="/Public/member/assets/css/skins/blue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="/Public/member/assets/css/skins/azure.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="/Public/member/assets/css/skins/teal.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="/Public/member/assets/css/skins/green.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="/Public/member/assets/css/skins/orange.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="/Public/member/assets/css/skins/pink.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="/Public/member/assets/css/skins/darkred.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="/Public/member/assets/css/skins/purple.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="/Public/member/assets/css/skins/darkblue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="/Public/member/assets/css/skins/gray.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="/Public/member/assets/css/skins/black.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="/Public/member/assets/css/skins/deepblue.min.css"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="login.html">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul><div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div><div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">Fixed Navbar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">Fixed SideBar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                <span class="text">Fixed BreadCrumbs</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedheader">
                                <span class="text">Fixed Header</span>
                            </label>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="index.html">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <!--Databoxes-->
                    <li>
                        <a href="databoxes.html">
                            <i class="menu-icon glyphicon glyphicon-tasks"></i>
                            <span class="menu-text"> Data Boxes </span>
                        </a>
                    </li>
                    <!--Widgets-->
                    <li>
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-th"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>
                    </li>
                    <!--UI Elements-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> Elements </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">Basic Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Icons
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="glyph-icons.html">
                                            <i class="menu-icon glyphicon glyphicon-stats"></i>
                                            <span class="menu-text">Glyph Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="typicon.html">
                                            <i class="menu-icon typcn typcn-location-outline"></i>
                                            <span class="menu-text"> Typicons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="weather-icons.html">
                                            <i class="menu-icon wi-day-snow"></i>
                                            <span class="menu-text">Weather Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabs.html">
                                    <span class="menu-text">Tabs & Accordions</span>
                                </a>
                            </li>
                            <li>
                                <a href="alerts.html">
                                    <span class="menu-text">Alerts & Tooltips</span>
                                </a>
                            </li>
                            <li>
                                <a href="modals.html">
                                    <span class="menu-text">Modals & Wells</span>
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="nestable-list.html">
                                    <span class="menu-text"> Nestable List</span>
                                </a>
                            </li>
                            <li>
                                <a href="treeview.html">
                                    <span class="menu-text">Treeview</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li class="active open">
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> Tables </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li class="active">
                                <a href="tables-simple.html">
                                    <span class="menu-text">Simple & Responsive</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables-data.html">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Forms </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="form-layouts.html">
                                    <span class="menu-text">Form Layouts</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-inputs.html">
                                    <span class="menu-text">Form Inputs</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-pickers.html">
                                    <span class="menu-text">Data Pickers</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-wizard.html">
                                    <span class="menu-text">Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-validation.html">
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-editors.html">
                                    <span class="menu-text">Editors</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Charts-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> Charts </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="flot.html">
                                    <span class="menu-text">Flot Charts</span>
                                </a>
                            </li>

                            <li>
                                <a href="morris.html">
                                    <span class="menu-text"> Morris Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparkline.html">
                                    <span class="menu-text">Sparkline Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="easypiecharts.html">
                                    <span class="menu-text">Easy Pie Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="chartjs.html">
                                    <span class="menu-text"> ChartJS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Profile-->
                    <li>
                        <a href="profile.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                    <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> Mail </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="inbox.html">
                                    <span class="menu-text">Inbox</span>
                                </a>
                            </li>

                            <li>
                                <a href="message-view.html">
                                    <span class="menu-text">View Message</span>
                                </a>
                            </li>
                            <li>
                                <a href="message-compose.html">
                                    <span class="menu-text">Compose Message</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Calendar-->
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">
                                Calendar
                            </span>
                        </a>
                    </li>
                    <!--Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                            <span class="menu-text"> Pages </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="timeline.html">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html">
                                    <span class="menu-text">Pricing Tables</span>
                                </a>
                            </li>

                            <li>
                                <a href="invoice.html">
                                    <span class="menu-text">Invoice</span>
                                </a>
                            </li>

                            <li>
                                <a href="login.html">
                                    <span class="menu-text">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="lock.html">
                                    <span class="menu-text">Lock Screen</span>
                                </a>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <span class="menu-text"> Typography </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--More Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-link"></i>

                            <span class="menu-text">
                                More Pages
                            </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="error-404.html">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>

                            <li>
                                <a href="error-500.html">
                                    <span class="menu-text"> Error 500</span>
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <span class="menu-text">Blank Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <span class="menu-text"> Grid</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Multi Level Menu
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-camera"></i>
                                            <span class="menu-text">Level 3</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="menu-dropdown">
                                            <i class="menu-icon fa fa-asterisk"></i>

                                            <span class="menu-text">
                                                Level 4
                                            </span>
                                            <i class="menu-expand"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text">Some Item</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bug"></i>
                                                    <span class="menu-text">Another Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Right to Left-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-align-right"></i>
                            <span class="menu-text"> Right to Left </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a>
                                    <span class="menu-text">RTL</span>
                                    <label class="pull-right margin-top-10">
                                        <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                        <span class="text"></span>
                                    </label>
                                </a>
                            </li>
                            <li>
                                <a href="index-rtl-ar.html">
                                    <span class="menu-text">Arabic Layout</span>
                                </a>
                            </li>

                            <li>
                                <a href="index-rtl-fa.html">
                                    <span class="menu-text">Persian Layout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Tables</a>
                        </li>
                        <li class="active">Simple and Responsive</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Tables
                            <small>
                                <i class="fa fa-angle-right"></i>
                                simple and responsive tables
                            </small>
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <h5 class="row-title"><i class="typcn typcn-th-small"></i>Simple Tables</h5>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Simple Table With Hover
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Family
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Steve
                                            </td>
                                            <td>
                                                Jobs
                                            </td>
                                            <td>
                                                steve
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Bill
                                            </td>
                                            <td>
                                                Gates
                                            </td>
                                            <td>
                                                billy
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Mark
                                            </td>
                                            <td>
                                                Zuckerberg
                                            </td>
                                            <td>
                                                markz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Marissa
                                            </td>
                                            <td>
                                                Mayer
                                            </td>
                                            <td>
                                                marim
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <code>class="table table-hover"</code>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header  with-footer">
                                <div class="header bg-darkorange">
                                    Condensed Table
                                </div>
                                <table class="table table-hover table-striped table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Family
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Steve
                                            </td>
                                            <td>
                                                Jobs
                                            </td>
                                            <td>
                                                steve
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Bill
                                            </td>
                                            <td>
                                                Gates
                                            </td>
                                            <td>
                                                billy
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Mark
                                            </td>
                                            <td>
                                                Zuckerberg
                                            </td>
                                            <td>
                                                markz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Marissa
                                            </td>
                                            <td>
                                                Mayer
                                            </td>
                                            <td>
                                                marim
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <code>class="table table-condensed"</code>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-space"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header with-footer">
                                <div class="header bg-warning">
                                    Bordered Table
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Family
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Steve
                                            </td>
                                            <td>
                                                Jobs
                                            </td>
                                            <td>
                                                steve
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Bill
                                            </td>
                                            <td>
                                                Gates
                                            </td>
                                            <td>
                                                billy
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Mark
                                            </td>
                                            <td>
                                                Zuckerberg
                                            </td>
                                            <td>
                                                markz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Marissa
                                            </td>
                                            <td>
                                                Mayer
                                            </td>
                                            <td>
                                                marim
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="footer">
                                    <code>class="table table-bordered"</code>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header with-footer">
                                <div class="header bg-palegreen">
                                    Stripped Table
                                </div>
                                <table class="table table-hover table-striped table-bordered">
                                    <thead class="bordered-blueberry">
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Family
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Steve
                                            </td>
                                            <td>
                                                Jobs
                                            </td>
                                            <td>
                                                steve
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Bill
                                            </td>
                                            <td>
                                                Gates
                                            </td>
                                            <td>
                                                billy
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Mark
                                            </td>
                                            <td>
                                                Zuckerberg
                                            </td>
                                            <td>
                                                markz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Marissa
                                            </td>
                                            <td>
                                                Mayer
                                            </td>
                                            <td>
                                                marim
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <code>class="table table-striped"</code>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="row-title"><i class="typcn typcn-tag"></i>Contextual Tables</h5>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header with-footer">
                                <div class="header bordered-yellow">
                                    Contextual Rows
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Class Name
                                            </th>
                                            <th>
                                                Column
                                            </th>
                                            <th>
                                                Column
                                            </th>
                                            <th>
                                                Column
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="active">
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                active
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                        </tr>

                                        <tr class="success">
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                success
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                        </tr>

                                        <tr class="warning">
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                warning
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                        </tr>

                                        <tr class="danger">
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                danger
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                            <td>
                                                Column heading
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class="footer">
                                    <code>< tr class="active/success/danger/warning" ></code>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header with-footer">
                                <div class="header bordered-sky">
                                    Contextual Columns
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Column
                                            </th>
                                            <th>
                                                Column
                                            </th>
                                            <th>
                                                Column
                                            </th>
                                            <th>
                                                Column
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                active
                                            </td>
                                            <td>
                                                success
                                            </td>
                                            <td>
                                                warning
                                            </td>
                                            <td class="danger">
                                                danger
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td class="active">
                                                active
                                            </td>
                                            <td>
                                                success
                                            </td>
                                            <td>
                                                warning
                                            </td>
                                            <td>
                                                danger
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                active
                                            </td>
                                            <td>
                                                success
                                            </td>
                                            <td class="warning">
                                                warning
                                            </td>
                                            <td>
                                                danger
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                active
                                            </td>
                                            <td class="success">
                                                success
                                            </td>
                                            <td>
                                                warning
                                            </td>
                                            <td>
                                                danger
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="footer">
                                    <code>< td class="active/success/danger/warning" ></code>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="row-title"><i class="typcn typcn-arrow-minimise"></i>Responsive Tables</h5>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header with-footer">
                                <div class="header bordered-pink">
                                    Responsive Table
                                </div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                <i class="fa fa-briefcase"></i> Company
                                            </th>
                                            <th class="hidden-xs">
                                                <i class="fa fa-user"></i> Contact
                                            </th>
                                            <th>
                                                <i class="fa fa-shopping-cart"></i> Total
                                            </th>
                                            <th>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">RedBull</a>
                                            </td>
                                            <td class="hidden-xs">
                                                Mike Nilson
                                            </td>
                                            <td>
                                                2560.60$
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs purple"><i class="fa fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Google</a>
                                            </td>
                                            <td class="hidden-xs">
                                                Adam Larson
                                            </td>
                                            <td>
                                                560.60$
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs black"><i class="fa fa-trash-o"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Apple</a>
                                            </td>
                                            <td class="hidden-xs">
                                                Daniel Kim
                                            </td>
                                            <td>
                                                3460.60$
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs purple"><i class="fa fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Microsoft</a>
                                            </td>
                                            <td class="hidden-xs">
                                                Nick
                                            </td>
                                            <td>
                                                2560.60$
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs blue"><i class="fa fa-share"></i> Share</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <code>< th class="hidden-xs" ></code>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="well with-header with-footer">
                                <div class="header bordered-success">
                                    Scrollable Table
                                </div>
                                <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width:450px !important">
                                                    Column header 1
                                                </th>
                                                <th scope="col">
                                                    Column header 2
                                                </th>
                                                <th scope="col">
                                                    Column header 3
                                                </th>
                                                <th scope="col">
                                                    Column header 4
                                                </th>
                                                <th scope="col">
                                                    Column header 5
                                                </th>
                                                <th scope="col">
                                                    Column header 6
                                                </th>
                                                <th scope="col">
                                                    Column header 7
                                                </th>
                                                <th scope="col">
                                                    Column header 8
                                                </th>
                                                <th scope="col">
                                                    Column header 9
                                                </th>
                                                <th scope="col">
                                                    Column header 10
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                                <td>
                                                    Table data
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="footer">
                                    <code>< div class="table-scrollable" ></code>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header  with-footer">
                                    <span class="widget-caption">Responsive Flip Scroll Tables</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="alert alert-info fade in alert-radius-bordered alert-shadowed">
                                        <button class="close" data-dismiss="alert">
                                            ×
                                        </button>
                                        <i class="fa-fw fa fa-info"></i>

                                        <strong>Flip Scroll Table:</strong> Flips between horizontal and vertical scrolls according to page width
                                    </div>
                                    <div class="flip-scroll">
                                        <table class="table table-bordered table-striped table-condensed flip-content">
                                            <thead class="flip-content bordered-palegreen">
                                                <tr>
                                                    <th>
                                                        Code
                                                    </th>
                                                    <th>
                                                        Company
                                                    </th>
                                                    <th class="numeric">
                                                        Price
                                                    </th>
                                                    <th class="numeric">
                                                        Change
                                                    </th>
                                                    <th class="numeric">
                                                        Change %
                                                    </th>
                                                    <th class="numeric">
                                                        Open
                                                    </th>
                                                    <th class="numeric">
                                                        High
                                                    </th>
                                                    <th class="numeric">
                                                        Low
                                                    </th>
                                                    <th class="numeric">
                                                        Volume
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        AAC
                                                    </td>
                                                    <td>
                                                        AUSTRALIAN AGRICULTURAL COMPANY LIMITED.
                                                    </td>
                                                    <td class="numeric">
                                                        $1.38
                                                    </td>
                                                    <td class="numeric">
                                                        -0.01
                                                    </td>
                                                    <td class="numeric">
                                                        -0.36%
                                                    </td>
                                                    <td class="numeric">
                                                        $1.39
                                                    </td>
                                                    <td class="numeric">
                                                        $1.39
                                                    </td>
                                                    <td class="numeric">
                                                        $1.38
                                                    </td>
                                                    <td class="numeric">
                                                        9,395
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        AAD
                                                    </td>
                                                    <td>
                                                        ARDENT LEISURE GROUP
                                                    </td>
                                                    <td class="numeric">
                                                        $1.15
                                                    </td>
                                                    <td class="numeric">
                                                        +0.02
                                                    </td>
                                                    <td class="numeric">
                                                        1.32%
                                                    </td>
                                                    <td class="numeric">
                                                        $1.14
                                                    </td>
                                                    <td class="numeric">
                                                        $1.15
                                                    </td>
                                                    <td class="numeric">
                                                        $1.13
                                                    </td>
                                                    <td class="numeric">
                                                        56,431
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        AAX
                                                    </td>
                                                    <td>
                                                        AUSENCO LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $4.00
                                                    </td>
                                                    <td class="numeric">
                                                        -0.04
                                                    </td>
                                                    <td class="numeric">
                                                        -0.99%
                                                    </td>
                                                    <td class="numeric">
                                                        $4.01
                                                    </td>
                                                    <td class="numeric">
                                                        $4.05
                                                    </td>
                                                    <td class="numeric">
                                                        $4.00
                                                    </td>
                                                    <td class="numeric">
                                                        90,641
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ABC
                                                    </td>
                                                    <td>
                                                        ADELAIDE BRIGHTON LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $3.00
                                                    </td>
                                                    <td class="numeric">
                                                        +0.06
                                                    </td>
                                                    <td class="numeric">
                                                        2.04%
                                                    </td>
                                                    <td class="numeric">
                                                        $2.98
                                                    </td>
                                                    <td class="numeric">
                                                        $3.00
                                                    </td>
                                                    <td class="numeric">
                                                        $2.96
                                                    </td>
                                                    <td class="numeric">
                                                        862,518
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ABP
                                                    </td>
                                                    <td>
                                                        ABACUS PROPERTY GROUP
                                                    </td>
                                                    <td class="numeric">
                                                        $1.91
                                                    </td>
                                                    <td class="numeric">
                                                        0.00
                                                    </td>
                                                    <td class="numeric">
                                                        0.00%
                                                    </td>
                                                    <td class="numeric">
                                                        $1.92
                                                    </td>
                                                    <td class="numeric">
                                                        $1.93
                                                    </td>
                                                    <td class="numeric">
                                                        $1.90
                                                    </td>
                                                    <td class="numeric">
                                                        595,701
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ABY
                                                    </td>
                                                    <td>
                                                        ADITYA BIRLA MINERALS LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $0.77
                                                    </td>
                                                    <td class="numeric">
                                                        +0.02
                                                    </td>
                                                    <td class="numeric">
                                                        2.00%
                                                    </td>
                                                    <td class="numeric">
                                                        $0.76
                                                    </td>
                                                    <td class="numeric">
                                                        $0.77
                                                    </td>
                                                    <td class="numeric">
                                                        $0.76
                                                    </td>
                                                    <td class="numeric">
                                                        54,567
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ACR
                                                    </td>
                                                    <td>
                                                        ACRUX LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $3.71
                                                    </td>
                                                    <td class="numeric">
                                                        +0.01
                                                    </td>
                                                    <td class="numeric">
                                                        0.14%
                                                    </td>
                                                    <td class="numeric">
                                                        $3.70
                                                    </td>
                                                    <td class="numeric">
                                                        $3.72
                                                    </td>
                                                    <td class="numeric">
                                                        $3.68
                                                    </td>
                                                    <td class="numeric">
                                                        191,373
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ADU
                                                    </td>
                                                    <td>
                                                        ADAMUS RESOURCES LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $0.72
                                                    </td>
                                                    <td class="numeric">
                                                        0.00
                                                    </td>
                                                    <td class="numeric">
                                                        0.00%
                                                    </td>
                                                    <td class="numeric">
                                                        $0.73
                                                    </td>
                                                    <td class="numeric">
                                                        $0.74
                                                    </td>
                                                    <td class="numeric">
                                                        $0.72
                                                    </td>
                                                    <td class="numeric">
                                                        8,602,291
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        AGG
                                                    </td>
                                                    <td>
                                                        ANGLOGOLD ASHANTI LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $7.81
                                                    </td>
                                                    <td class="numeric">
                                                        -0.22
                                                    </td>
                                                    <td class="numeric">
                                                        -2.74%
                                                    </td>
                                                    <td class="numeric">
                                                        $7.82
                                                    </td>
                                                    <td class="numeric">
                                                        $7.82
                                                    </td>
                                                    <td class="numeric">
                                                        $7.81
                                                    </td>
                                                    <td class="numeric">
                                                        148
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        AGK
                                                    </td>
                                                    <td>
                                                        AGL ENERGY LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $13.82
                                                    </td>
                                                    <td class="numeric">
                                                        +0.02
                                                    </td>
                                                    <td class="numeric">
                                                        0.14%
                                                    </td>
                                                    <td class="numeric">
                                                        $13.83
                                                    </td>
                                                    <td class="numeric">
                                                        $13.83
                                                    </td>
                                                    <td class="numeric">
                                                        $13.67
                                                    </td>
                                                    <td class="numeric">
                                                        846,403
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        AGO
                                                    </td>
                                                    <td>
                                                        ATLAS IRON LIMITED
                                                    </td>
                                                    <td class="numeric">
                                                        $3.17
                                                    </td>
                                                    <td class="numeric">
                                                        -0.02
                                                    </td>
                                                    <td class="numeric">
                                                        -0.47%
                                                    </td>
                                                    <td class="numeric">
                                                        $3.11
                                                    </td>
                                                    <td class="numeric">
                                                        $3.22
                                                    </td>
                                                    <td class="numeric">
                                                        $3.10
                                                    </td>
                                                    <td class="numeric">
                                                        5,416,303
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <script src="/Public/member/assets/js/jquery-2.0.3.min.js"></script>
    <script src="/Public/member/assets/js/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/Public/member/assets/js/beyond.min.js"></script>

    <!--Page Related Scripts-->
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
</body>
<!--  /Body -->
</html>