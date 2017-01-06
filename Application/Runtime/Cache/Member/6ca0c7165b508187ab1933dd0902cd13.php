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
    <title>Weather Icons</title>

    <meta name="description" content="weather icons" />
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
                    <li class="active open">
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
                            <li class="active open">
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
                                    <li class="active">
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
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> Tables </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
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
                            <a href="#">Elements</a>
                        </li>
                        <li>
                            <a href="#">Icons</a>
                        </li>
                        <li class="active">Weather Icons</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Weather Icons
                            <small>
                                <i class="fa fa-angle-right"></i>
                                Beautiful forcasting icons
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
                    <div class="row searchhelpbar">
                        <div class="col-sm-8 help-box">
                            <div class="alert alert-success alert-radius-bordered alert-shadowed">
                                <p>Place weather icons just about anywhere with the <code>&lt;i&gt;</code> tag.</p>
                                <p>
                                    <code>
                                        <span class="nt">&lt;i</span>
                                        <span class="na">class=</span><span class="s">"wi-day-rain-mix"</span><span class="nt">&gt;&lt;/i&gt;</span>

                                    </code>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 search-box">
                            <div>
                                <span class="input-icon">
                                    <input type="text" class="form-control" id="weathericon-search" placeholder="Search">
                                    <i class="glyphicon glyphicon-search circular success"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-space space-sm"></div>
                    <!--Row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="widget">
                                <div class="widget-header bordered-top bordered-palegreen">
                                    <span class="widget-caption">Weather Icons</span>
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Day / Sunny</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-cloudy-gusts"></i></div>
                                                <div class="class">wi-day-cloudy-gusts</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-cloudy-windy"></i></div>
                                                <div class="class">wi-day-cloudy-windy</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-cloudy"></i></div>
                                                <div class="class">wi-day-cloudy</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-fog"></i></div>
                                                <div class="class">wi-day-fog</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-hail"></i></div>
                                                <div class="class">wi-day-hail</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-lightning"></i></div>
                                                <div class="class">wi-day-lightning</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-rain-mix"></i></div>
                                                <div class="class">wi-day-rain-mix</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-rain-wind"></i></div>
                                                <div class="class">wi-day-rain-wind</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-rain"></i></div>
                                                <div class="class">wi-day-rain</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-showers"></i></div>
                                                <div class="class">wi-day-showers</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-snow"></i></div>
                                                <div class="class">wi-day-snow</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-sprinkle"></i></div>
                                                <div class="class">wi-day-sprinkle</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-sunny-overcast"></i></div>
                                                <div class="class">wi-day-sunny-overcast</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-sunny"></i></div>
                                                <div class="class">wi-day-sunny</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-storm-showers"></i></div>
                                                <div class="class">wi-day-storm-showers</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-day-thunderstorm"></i></div>
                                                <div class="class">wi-day-thunderstorm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="wide" />
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Neutral / Cloudy</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-cloudy-gusts"></i></div>
                                                <div class="class">wi-cloudy-gusts</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-cloudy-windy"></i></div>
                                                <div class="class">wi-cloudy-windy</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-cloudy"></i></div>
                                                <div class="class">wi-cloudy</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-fog"></i></div>
                                                <div class="class">wi-fog</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-hail"></i></div>
                                                <div class="class">wi-hail</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-lightning"></i></div>
                                                <div class="class">wi-lightning</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-rain-mix"></i></div>
                                                <div class="class">wi-rain-mix</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-rain-wind"></i></div>
                                                <div class="class">wi-rain-wind</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-rain"></i></div>
                                                <div class="class">wi-rain</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-showers"></i></div>
                                                <div class="class">wi-showers</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-snow"></i></div>
                                                <div class="class">wi-snow</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-sprinkle"></i></div>
                                                <div class="class">wi-sprinkle</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-storm-showers"></i></div>
                                                <div class="class">wi-storm-showers</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-thunderstorm"></i></div>
                                                <div class="class">wi-thunderstorm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="wide" />
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Night / Moons</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-cloudy-gusts"></i></div>
                                                <div class="class">wi-night-alt-cloudy-gusts</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-cloudy-windy"></i></div>
                                                <div class="class">wi-night-alt-cloudy-windy</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-hail"></i></div>
                                                <div class="class">wi-night-alt-hail</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-lightning"></i></div>
                                                <div class="class">wi-night-alt-lightning</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-rain-mix"></i></div>
                                                <div class="class">wi-night-alt-rain-mix</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-rain-wind"></i></div>
                                                <div class="class">wi-night-alt-rain-wind</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-rain"></i></div>
                                                <div class="class">wi-night-alt-rain</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-showers"></i></div>
                                                <div class="class">wi-night-alt-showers</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-snow"></i></div>
                                                <div class="class">wi-night-alt-snow</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-sprinkle"></i></div>
                                                <div class="class">wi-night-alt-sprinkle</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-storm-showers"></i></div>
                                                <div class="class">wi-night-alt-storm-showers</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-alt-thunderstorm"></i></div>
                                                <div class="class">wi-night-alt-thunderstorm</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-clear"></i></div>
                                                <div class="class">wi-night-clear</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-cloudy-gusts"></i></div>
                                                <div class="class">wi-night-cloudy-gusts</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-cloudy-windy"></i></div>
                                                <div class="class">wi-night-cloudy-windy</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-cloudy"></i></div>
                                                <div class="class">wi-night-cloudy</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-hail"></i></div>
                                                <div class="class">wi-night-hail</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-lightning"></i></div>
                                                <div class="class">wi-night-lightning</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-rain-mix"></i></div>
                                                <div class="class">wi-night-rain-mix</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-rain-wind"></i></div>
                                                <div class="class">wi-night-rain-wind</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-rain"></i></div>
                                                <div class="class">wi-night-rain</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-showers"></i></div>
                                                <div class="class">wi-night-showers</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-snow"></i></div>
                                                <div class="class">wi-night-snow</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-sprinkle"></i></div>
                                                <div class="class">wi-night-sprinkle</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-storm-showers"></i></div>
                                                <div class="class">wi-night-storm-showers</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-thunderstorm"></i></div>
                                                <div class="class">wi-night-thunderstorm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="wide" />
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Miscellaneous Weather </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-celcius"></i></div>
                                                <div class="class">wi-celcius</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-cloud-down"></i></div>
                                                <div class="class">wi-cloud-down</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-cloud-refresh"></i></div>
                                                <div class="class">wi-cloud-refresh</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-cloud-up"></i></div>
                                                <div class="class">wi-cloud-up</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-cloud"></i></div>
                                                <div class="class">wi-cloud</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-degrees"></i></div>
                                                <div class="class">wi-degrees</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-down-left"></i></div>
                                                <div class="class">wi-down-left</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-down"></i></div>
                                                <div class="class">wi-down</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-fahrenheit"></i></div>
                                                <div class="class">wi-fahrenheit</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-horizon-alt"></i></div>
                                                <div class="class">wi-horizon-alt</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-horizon"></i></div>
                                                <div class="class">wi-horizon</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-left"></i></div>
                                                <div class="class">wi-left</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-lightning"></i></div>
                                                <div class="class">wi-lightning</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-night-fog"></i></div>
                                                <div class="class">wi-night-fog</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-refresh-alt"></i></div>
                                                <div class="class">wi-refresh-alt</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-refresh"></i></div>
                                                <div class="class">wi-refresh</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-right"></i></div>
                                                <div class="class">wi-right</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-sprinkles"></i></div>
                                                <div class="class">wi-sprinkles</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-strong-wind"></i></div>
                                                <div class="class">wi-strong-wind</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-sunrise"></i></div>
                                                <div class="class">wi-sunrise</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-sunset"></i></div>
                                                <div class="class">wi-sunset</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-thermometer-exterior"></i></div>
                                                <div class="class">wi-thermometer-exterior</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-thermometer-internal"></i></div>
                                                <div class="class">wi-thermometer-internal</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-thermometer"></i></div>
                                                <div class="class">wi-thermometer</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-tornado"></i></div>
                                                <div class="class">wi-tornado</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-up-right"></i></div>
                                                <div class="class">wi-up-right</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-up"></i></div>
                                                <div class="class">wi-up</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-east"></i></div>
                                                <div class="class">wi-wind-east</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-north-east"></i></div>
                                                <div class="class">wi-wind-north-east</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-north-west"></i></div>
                                                <div class="class">wi-wind-north-west</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-north"></i></div>
                                                <div class="class">wi-wind-north</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-south-east"></i></div>
                                                <div class="class">wi-wind-south-east</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-south-west"></i></div>
                                                <div class="class">wi-wind-south-west</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-south"></i></div>
                                                <div class="class">wi-wind-south</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-wind-west"></i></div>
                                                <div class="class">wi-wind-west</div>
                                            </div>
                                            <div class="weathericons">
                                                <div class="icon"><i class="wi-windy"></i></div>
                                                <div class="class">wi-windy</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row Ends-->
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
    <script>
        /*WeatherIcon Search*/
        $("#weathericon-search")
            .keyup(function () {
                var term = $.trim(this.value);
                if (term === "") {
                    $(".weathericons")
                        .show();
                } else {
                    $('.weathericons')
                        .hide();
                    $('.weathericons i[class*="' + term + '"]')
                        .parent()
                        .parent()
                        .show();
                }
            });
    </script>
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