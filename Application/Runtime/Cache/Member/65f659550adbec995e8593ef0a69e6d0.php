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
    <title>Databoxes</title>

    <meta name="description" content="databoxes" />
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
                    <li class="active">
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
                        <li class="active">Databoxes</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            DataBoxes
                            <small>
                                <i class="fa fa-angle-right"></i>
                                beyond containers
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
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="well bordered-left bordered-themeprimary">
                                        <p>BeyondAdmin's Databoxes are meant to provide you a completely flexible  and very easy to customize tool to visualize data. You can create databoxes in multiple sizes and different styles. </p>
                                        <p>Basically there are two types of Databoxes: <strong>Horizontal</strong> and <strong>Vertical</strong>.</p>
                                        <p>You can user pre-defined styles to create infinite types of Databoxes to visualize data in your own fashion. These are just examples that i've made to show you how databoxes work. There is no limitation in your imagination and creativity.</p>
                                        <p><i class="fa fa-star yellow margin-right-5"></i><strong>Note:</strong> You can use these samples or you can build your own but you must know that every week there will be new databoxes added to this collection.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-graded">
                                        <div class="databox-left no-padding">
                                            <img src="/Public/member/assets/img/avatars/divyia.jpg" style="width:65px; height:65px;">
                                        </div>
                                        <div class="databox-right padding-top-20">
                                            <div class="databox-stat yellow radius-bordered">
                                                <i class="stat-icon fa fa-envelope-o"></i>
                                            </div>
                                            <div class="databox-text darkgray">DIVYIA JONES</div>
                                            <div class="databox-text darkgray">Manager</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox">
                                        <div class="databox-left bg-white">
                                            <div class="databox-sparkline">
                                                <span data-sparkline="bar" data-height="40px" data-width="100%" data-barcolor="#57b5e3" data-negbarcolor="#a0d468" data-zerocolor="#d73d32"
                                                      data-barwidth="5px" data-barspacing="1px">
                                                    5,6,7,2,0,-4,-2,4
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-right bg-white bordered bordered-platinum">
                                            <span class="databox-number sky">2485</span>
                                            <div class="databox-text darkgray">PAGE VIEWS</div>
                                            <div class="databox-stat bg-palegreen radius-bordered">
                                                <div class="stat-text">8%</div>
                                                <i class="stat-icon fa fa-arrow-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-lightred">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="42" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="#f39e93"><span class="white font-90">42%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number lightred">322</span>
                                            <div class="databox-text darkgray">UNIQUE USERS</div>
                                            <div class="databox-stat bg-lightred radius-bordered">
                                                <div class="stat-text">4%</div>
                                                <i class="stat-icon fa fa-arrow-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-halved radius-bordered databox-shadowed">
                                        <div class="databox-left bg-whitesmoke">
                                            <div class="databox-sparkline">
                                                <span data-sparkline="compositeline" data-height="45px" data-width="100%"
                                                      data-linecolor="#57b5e3" data-secondlinecolor="#f4b400"
                                                      data-fillcolor="false" data-secondfillcolor="false"
                                                      data-highlightspotcolor="#a0d468" data-highlightlinecolor="#a0d468"
                                                      data-composite="4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7">
                                                    8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-right bg-sky padding-10">
                                            <span class="databox-title white">Users</span>
                                            <div class="databox-text white">Visit Statistics</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-orange">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="#fa8872"><span class="white font-90">50%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number orange">14</span>
                                            <div class="databox-text darkgray">NEW TASKS</div>
                                            <div class="databox-stat orange radius-bordered">
                                                <i class="stat-icon icon-lg fa fa-tasks"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-yellow">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="#fee29f"><span class="white font-90">15%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number yellow">1</span>
                                            <div class="databox-text darkgray">NEW MESSAGE</div>
                                            <div class="databox-stat yellow radius-bordered">
                                                <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-azure">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="#7fe2fa"><span class="white font-90">76%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number azure">98</span>
                                            <div class="databox-text darkgray">NEW USERS</div>
                                            <div class="databox-state bg-azure">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-transparent">
                                        <div class="databox-left no-padding">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart block-center"
                                                     data-barcolor="#fb6e52" data-linecap="butt" data-percent="80" data-animate="500"
                                                     data-linewidth="2" data-size="65" data-trackcolor="#eee">
                                                    <span class="databox-text darkgray">VISITS</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <div class="databox-sparkline padding-5">
                                                <span data-sparkline="compositebar" data-height="50px" data-width="100%"
                                                      data-barcolor="#fff" data-negbarcolor="#f5f5f5" data-zerocolor="#d73d32"
                                                      data-barwidth="6px" data-barspacing="5px"
                                                      data-fillcolor="false" data-linecolor="#fb6e52" data-spotradius="3" data-linewidth="1.5"
                                                      data-spotcolor="#fff " data-minspotcolor="#fff " data-maxspotcolor="#fff"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-composite="4, 1, 5, 7, 6, 4, 8, 7, 2,4,2,1">
                                                    6,4,0,1,4,6,2,4,4,8,2,4,1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <h6 class="row-title before-blue">Large Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="databox databox-lg radius-bordered databox-shadowed">
                                        <div class="databox-left bg-white">
                                            <div class="databox-sparkline">
                                                <span data-sparkline="bar" data-height="40px" data-width="100%" data-barwidth="7px" data-barspacing="3px" data-stackedbarcolor='["#11a9cc", "#ffce55"]'>
                                                    2:2,2:3,3:2,1:3,3:3
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-right bordered-thick bordered-sky bg-white">
                                            <span class="databox-number sky"><i class="fa fa-user"></i>2485</span>
                                            <div class="databox-text darkgray">NEW & RETURNING USERS</div>
                                            <div class="databox-stat bg-sky radius-bordered">
                                                <div class="stat-text">10 %</div>
                                                <i class="stat-icon fa fa-long-arrow-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="databox databox-lg radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-palegreen">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="60" data-trackcolor="#aadc95"><span class="white font-90">50%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number green">206</span>
                                            <div class="databox-text darkgray">TRAFFIC USED (GB)</div>
                                            <div class="databox-stat bg-palegreen radius-bordered">
                                                <div class="stat-text">10%</div>
                                                <i class="stat-icon fa fa-arrow-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="databox databox-halved databox-lg radius-bordered databox-shadowed">
                                        <div class="databox-left bg-white">
                                            <div class="databox-sparkline">
                                                <span data-sparkline="compositebar" data-height="40px" data-width="100%"
                                                      data-barcolor="#5db2ff" data-negbarcolor="#f4b400" data-zerocolor="#d73d32"
                                                      data-barwidth="5px" data-barspacing="4px"
                                                      data-fillcolor="false" data-linecolor="#e75b8d" data-spotradius="3" data-linewidth="2"
                                                      data-composite="4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7">
                                                    8,4,0,1,4,6,2,4,4,8,10,7,10
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-right bg-pink">
                                            <span class="databox-title white">Users</span>
                                            <div class="databox-text white">Visit Statistics</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="row-title before-darkorange">Larger Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="databox databox-xlg radius-bordered databox-shadowed">
                                        <div class="databox-left bg-snow">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#11a9cc " data-linecap="butt" data-percent="60" data-animate="500" data-linewidth="7" data-size="150" data-trackcolor="#ffce55">
                                                    <span class="sky font-150"><i class="fa fa-envelope"></i> Mail</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-right no-padding bordered-thick bordered-whitesmoke">
                                            <div class="databox-row row-6 bg-orange padding-10">
                                                <div class="databox-sparkline">
                                                    <span data-sparkline="line" data-height="65px" data-width="100%" data-fillcolor="false" data-linecolor="#fff"
                                                          data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                          data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                          data-linewidth="3" data-spotradius="5">
                                                        2,6,7,9,8,5,3,4,4,3,6,7
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-3 bg-yellow padding-10">
                                                <span class="databox-title pull-left no-margin"><i class="fa fa-envelope"></i> Inbox</span>
                                                <span class="databox-number pull-right no-margin">129</span>
                                            </div>
                                            <div class="databox-row row-3 bg-sky padding-10">
                                                <span class="databox-title pull-left"><i class="fa fa-mail-forward"></i> Sent</span>
                                                <span class="databox-number pull-right no-margin">32</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-pink">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="60" data-animate="500" data-linewidth="7" data-size="150" data-trackcolor="#f89cbd">
                                                    <span class="white font-150"><i class="fa fa-bell"></i> Users</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-right bordered-thick bordered-warning">
                                            <div class="databox-row row-6 bordered-bottom bordered-platinum padding-10">
                                                <div class="databox-cell cell-6 no-padding">
                                                    <span class="databox-title darkgray">Overview</span>
                                                    <span class="databox-text darkgray">Your website statistics</span>
                                                </div>
                                                <div class="databox-cell cell-6 no-padding">

                                                </div>

                                            </div>
                                            <div class="databox-row row-3 bordered-bottom bordered-platinum">
                                                <span class="databox-text darkgray padding-10">RETURNING USERS</span>
                                                <div class="databox-stat bg-yellow radius-bordered">
                                                    <div class="stat-text">12 %</div>
                                                    <i class="stat-icon fa fa-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="databox-row row-3">
                                                <span class="databox-text darkgray padding-10">NEW USERS</span>
                                                <div class="databox-stat bg-pink radius-bordered">
                                                    <div class="stat-text">8 %</div>
                                                    <i class="stat-icon fa fa-arrow-up"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded databox-inverted">
                                        <div class="databox-left bg-orange no-padding">
                                            <div class="horizontal-space"></div>
                                            <div class="databox-stat bg-white radius-bordered">
                                                <div class="stat-text orange">8%</div>
                                                <i class="stat-icon fa fa-arrow-up orange"></i>
                                            </div>
                                            <div class="databox-stat stat-left radius-bordered">
                                                <div class="stat-text">Burndown</div>
                                            </div>
                                            <div class="databox-sparkline">
                                                <span data-sparkline="line" data-height="158px" data-width="100%" data-fillcolor="#fc8973" data-linecolor="#fff"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-linewidth="3" data-spotradius="0">
                                                    2,6,7,9,8,5,3,4,4,3,6,7
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-right bordered-thick bordered-white bg-whitesmoke">
                                            <div class="databox-row row-3 bordered-bottom bordered-platinum padding-10">
                                                <span class="databox-text darkgray pull-left no-margin">Messages</span>
                                                <span class="badge badge-default graded pull-right">1</span>
                                            </div>
                                            <div class="databox-row row-3 bordered-bottom bordered-platinum padding-10">
                                                <span class="databox-text darkgray pull-left no-margin">Tasks In Progress</span>
                                                <span class="badge badge-default graded pull-right">8</span>
                                            </div>
                                            <div class="databox-row row-3 bordered-bottom bordered-platinum padding-10">
                                                <span class="databox-text darkgray pull-left no-margin">Tasks Done</span>
                                                <span class="badge badge-default graded pull-right">7</span>
                                            </div>
                                            <div class="databox-row row-3 padding-10">
                                                <span class="databox-text darkgray pull-left no-margin">Backlogs</span>
                                                <span class="badge badge-default graded pull-right">2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">

                                        <div class="databox-left bg-ivory">
                                            <div class="databox-piechart padding-10">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#2dc3e8 " data-linecap="butt"
                                                     data-percent="25" data-animate="500" data-linewidth="10" data-size="130" data-trackcolor="#fafafa">
                                                    <span class="sky font-150"><i class="fa fa-cloud-download"></i> 25% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-right bg-azure bordered-thick bordered-white no-padding">
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-stat radius-bordered">
                                                <div class="stat-text">Download/Upload</div>
                                            </div>
                                            <div class="databox-sparkline">
                                                <span data-sparkline="compositeline" data-height="153px" data-width="100%" data-linecolor="#fff" data-secondlinecolor="#f5f5f5"
                                                      data-fillcolor="rgb(92,211,240)" data-secondfillcolor="rgba(92,211,240,.10)"
                                                      data-spotradius="0"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-linewidth="2" data-secondlinewidth="2"
                                                      data-composite="5, 4, 1, 5, 3, 2, 1, 2">
                                                    3,3,4,3,2,3,3,2
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h6 class="row-title before-yellow">Largest Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="databox databox-xxlg radius-bordered databox-shadowed databox-halved">
                                        <div class="databox-left bg-whitesmoke padding-top-10">
                                            <div class="databox-stat bg-orange radius-bordered">
                                                <div class="stat-text">24 %</div>
                                                <i class="stat-icon fa fa-long-arrow-down"></i>
                                            </div>
                                            <div class="databox-stat stat-left radius-bordered">
                                                <div class="stat-text darkgray">CPU USAGE</div>
                                            </div>
                                            <canvas id="pie" height="230" width="230"></canvas>
                                        </div>
                                        <div class="databox-right bordered-thick bordered-whitesmoke bg-blue no-padding">
                                            <div class="databox-stat bg-yellow radius-bordered">
                                                <div class="stat-text">10 %</div>
                                                <i class="stat-icon fa fa-long-arrow-up"></i>
                                            </div>
                                            <div class="databox-stat stat-left radius-bordered">
                                                <div class="stat-text white">CPU USAGE</div>
                                            </div>
                                            <div id="realtime-chart" class="chart chart-lg">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Vertical Databoxes -->
                            <h6 class="row-title before-azure">Vertical Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-blue">
                                            <div class="databox-icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                        <div class="databox-bottom text-align-center">
                                            <span class="databox-text">FRIDAY - 2014 16 MAY</span>
                                            <span class="databox-text">11:24 - AM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-vertical">
                                        <div class="databox-top bg-orange no-padding">
                                            <div class="databox-row row-2"></div>
                                            <div class="databox-row row-10">
                                                <div class="databox-sparkline">
                                                    <span data-sparkline="bar" data-height="42px" data-width="100%" data-barcolor="#e7573a" data-negbarcolor="#e7573a" data-zerocolor="#e7573a"
                                                          data-barwidth="7px" data-barspacing="3px">
                                                        2,4,5,6,3,2,0,4,2,4,3,2,6,4,5,1,4,5,6,9,1
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding bg-white">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-align-center bordered-right bordered-platinum">
                                                    <span class="databox-number lightcarbon">206</span>
                                                    <span class="databox-text sonic-silver no-margin">FOLLOWERS</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-align-center">
                                                    <span class="databox-number lightcarbon">405</span>
                                                    <span class="databox-text sonic-silver no-margin">FOLLOWING</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top no-padding ">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-align-center bg-sky">
                                                    <span class="databox-number">13</span>
                                                    <span class="databox-text">TASKS</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-align-center bg-azure">
                                                    <span class="databox-number">9</span>
                                                    <span class="databox-text">BACKLOGS</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom">
                                            <span class="databox-text">TASKS</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-azure" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                    <span class="sr-only">
                                                        20% Complete
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top no-padding ">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-align-center bg-orange">
                                                    <span class="databox-number">9</span>
                                                    <span class="databox-text">ORDERS</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-align-center bg-darkorange">
                                                    <span class="databox-number">3</span>
                                                    <span class="databox-text">DELIVERED</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom">
                                            <span class="databox-text">DELIVERY PERCENT</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <h6 class="row-title before-orange">Large Vertical Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-palegreen no-padding">
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-sparkline no-margin">
                                                <span data-sparkline="compositebar" data-height="82px" data-width="100%"
                                                      data-barcolor="#b0dc81"
                                                      data-barwidth="10px" data-barspacing="5px"
                                                      data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-composite="7, 6, 5, 7, 9, 10, 8, 7, 6, 6, 4, 7, 8">
                                                    8,4,1,2,4,6,2,4,4,8,10,7,10
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-align-left">
                                                    <span class="databox-text">Sales Total</span>
                                                    <span class="databox-number">$23,657</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-align-right">
                                                    <span class="databox-text">September</span>
                                                    <span class="databox-number font-70">$1,257</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top no-padding">
                                            <img src="/Public/member/assets/img/temp1.png" alt="" style="height:100px; width:100%;" />
                                        </div>
                                        <div class="databox-bottom no-padding bordered-thick bordered-orange">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                    <span class="databox-number lightcarbon no-margin">510</span>
                                                    <span class="databox-text sonic-silver  no-margin">Posts</span>
                                                </div>
                                                <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                    <span class="databox-number lightcarbon no-margin">908</span>
                                                    <span class="databox-text sonic-silver no-margin">Followers</span>
                                                </div>
                                                <div class="databox-cell cell-4 no-padding text-align-center">
                                                    <span class="databox-number lightcarbon no-margin">286</span>
                                                    <span class="databox-text sonic-silver no-margin">Following</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-xs-12">
                                    <div class="databox databox-lg databox-halved radius-bordered databox-shadowed databox-vertical">
                                        <div class="databox-top bg-darkorange no-padding">
                                            <div class="databox-icon">
                                                <i class="wi wi-cloudy-windy"></i>
                                            </div>
                                        </div>
                                        <div class="databox-bottom bg-white no-padding">
                                            <div class="databox-row text-align-center">
                                                <div class="databox-cell cell-6 bordered-right bordered-platinum padding-5">
                                                    <span class="databox-number lightcarbon">14°</span>
                                                    <span class="databox-header lightcarbon"><i class="wi wi-strong-wind"></i></span>


                                                </div>
                                                <div class="databox-cell cell-6 padding-5">
                                                    <span class="databox-number lightcarbon">13°</span>
                                                    <span class="databox-header lightcarbon"><i class="wi wi-rain"></i></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-4 col-xs-6">
                                    <div class="databox databox-lg databox-vertical databox-inverted bg-white databox-shadowed">
                                        <div class="databox-top">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart block-center"
                                                     data-barcolor="#e75b8d" data-linecap="butt" data-percent="40" data-animate="500"
                                                     data-linewidth="8" data-size="100" data-trackcolor="#eee">
                                                    <span class="white font-200"><i class="fa fa-tags pink"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding text-align-center">
                                            <span class="databox-number lightcarbon no-margin">11</span>
                                            <span class="databox-text lightcarbon no-margin">NEW TICKETS</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-4 col-xs-6">
                                    <div class="databox databox-lg databox-vertical databox-inverted databox-graded">
                                        <div class="databox-top">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart block-center"
                                                     data-barcolor="#11a9cc" data-linecap="butt" data-percent="80" data-animate="500"
                                                     data-linewidth="8" data-size="100" data-trackcolor="#eee">
                                                    <span class="white font-200"><i class="fa fa-gift sky"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding text-align-center">
                                            <span class="databox-number lightcarbon no-margin">9</span>
                                            <span class="databox-text lightcarbon no-margin">NEW PRODUCTS</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="row-title before-blueberry">Larger Vertical Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-xlg radius-bordered databox-shadowed databox-vertical">
                                        <div class="databox-top bg-blue">
                                            <span class="databox-header">JANUARY 2014</span>
                                        </div>
                                        <div class="databox-bottom bg-white no-padding">
                                            <div id="donut-chart" style="height:150px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="databox databox-xlg databox-halved radius-bordered databox-shadowed databox-vertical">
                                        <div class="databox-top bg-white padding-10">
                                            <div class="col-lg-4 col-sm-4 col-xs-4">
                                                <img src="/Public/member/assets/img/avatars/Sergey-Azovskiy.jpg" style="width:75px; height:75px;" class="image-circular bordered-3 bordered-palegreen" />
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-xs-8 text-align-left padding-10">
                                                <span class="databox-header carbon no-margin">Martin James</span>
                                                <span class="databox-text lightcarbon no-margin"> Software Manager at Microsoft </span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom bg-white no-padding">
                                            <div class="databox-row row-12">
                                                <div class="databox-row row-6 no-padding">
                                                    <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                        <span class="databox-text sonic-silver  no-margin">Posts</span>
                                                        <span class="databox-number lightcarbon no-margin">510</span>
                                                    </div>
                                                    <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                        <span class="databox-text sonic-silver no-margin">Followers</span>
                                                        <span class="databox-number lightcarbon no-margin">908</span>
                                                    </div>
                                                    <div class="databox-cell cell-4 no-padding text-align-center">
                                                        <span class="databox-text sonic-silver no-margin">Following</span>
                                                        <span class="databox-number lightcarbon no-margin">286</span>
                                                    </div>
                                                </div>
                                                <div class="databox-row row-6 padding-10">
                                                    <button class="btn btn-palegreen btn-sm pull-right">FOLLOW</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-6 col-xs-12">
                                    <div class="databox databox-xlg radius-bordered databox-shadowed databox-vertical">
                                        <div class="databox-top bg-white">
                                            <span class="databox-header orange">WEEKLY SALE STAT</span>
                                        </div>
                                        <div class="databox-bottom bg-white no-padding">
                                            <div class="databox-sparkline">
                                                <span data-sparkline="line" data-height="158px" data-width="100%" data-fillcolor="#ffce55" data-linecolor="#fb6e52"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                      data-highlightspotcolor="#fb6e52" data-highlightlinecolor="#fb6e52"
                                                      data-linewidth="3" data-spotradius="0">
                                                    2,6,7,9,8,5,3,4,4,3,6,7
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="row-title before-pink">Larger-er Vertical Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-xxlg databox-inverted databox-vertical databox-shadowed databox-graded">
                                        <div class="databox-top padding-10">
                                            <div id="pie-chart-bandwidth" class="chart chart"></div>
                                            <div class="flot-donut-caption">
                                                <span class="databox-number lightcarbon no-margin">160GB</span>
                                                <span class="databox-text sonic-silver  no-margin">Total Usage</span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding bg-white bordered bordered-platinum">
                                            <div class="databox-row row-12 no-padding">
                                                <div class="databox-cell cell-4 no-padding text-align-center bordered-bottom-5 bordered-sky">
                                                    <span class="databox-title lightcarbon no-margin"><i class="fa fa-picture-o"></i></span>
                                                    <span class="databox-text sonic-silver  no-margin">50GB</span>
                                                </div>
                                                <div class="databox-cell cell-4 no-padding text-align-center bordered-bottom-5 bordered-yellow">
                                                    <span class="databox-title lightcarbon no-margin"><i class="fa fa-video-camera"></i></span>
                                                    <span class="databox-text sonic-silver  no-margin">80GB</span>
                                                </div>
                                                <div class="databox-cell cell-4 no-padding text-align-center bordered-bottom-5 bordered-pink">
                                                    <span class="databox-title lightcarbon no-margin"><i class="fa fa-music"></i></span>
                                                    <span class="databox-text sonic-silver no-margin">30GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="databox databox-xxlg databox-vertical databox-inverted">
                                        <div class="databox-top bg-whitesmoke no-padding">
                                            <div class="databox-row row-2 bg-orange no-padding">
                                                <div class="databox-cell cell-1 text-align-center no-padding padding-top-5">
                                                    <span class="databox-number white"><i class="fa fa-bar-chart-o no-margin"></i></span>
                                                </div>
                                                <div class="databox-cell cell-8 no-padding padding-top-5 text-align-left">
                                                    <span class="databox-number white">PAGE VIEWS</span>
                                                </div>
                                                <div class="databox-cell cell-3 text-align-right padding-10">
                                                    <span class="databox-text white">13 DECEMBER</span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-4">
                                                <div class="databox-cell cell-6 no-padding padding-10 padding-left-20 text-align-left">
                                                    <span class="databox-number orange no-margin">534,908</span>
                                                    <span class="databox-text sky no-margin">OVERAL VIEWS</span>
                                                </div>
                                                <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                                    <span class="databox-number orange no-margin">4,129</span>
                                                    <span class="databox-text darkgray no-margin">THIS WEEK</span>
                                                </div>
                                                <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                                    <span class="databox-number orange no-margin">329</span>
                                                    <span class="databox-text darkgray no-margin">YESTERDAY</span>
                                                </div>
                                                <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                                    <span class="databox-number orange no-margin">104</span>
                                                    <span class="databox-text darkgray no-margin">TODAY</span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-6 no-padding">
                                                <div class="databox-sparkline">
                                                    <span data-sparkline="line" data-height="126px" data-width="100%" data-fillcolor="#37c2e2" data-linecolor="#37c2e2"
                                                          data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                          data-highlightspotcolor="#f5f5f5 " data-highlightlinecolor="#f5f5f5"
                                                          data-linewidth="2" data-spotradius="0">
                                                        5,7,6,5,9,4,3,7,2
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom bg-sky no-padding">
                                            <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                                <span class="databox-header white">Mon</span>
                                            </div>
                                            <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                                <span class="databox-header white">Tues</span>
                                            </div>
                                            <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                                <span class="databox-header white">Wed</span>
                                            </div>
                                            <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                                <span class="databox-header white">Thu</span>
                                            </div>
                                            <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                                <span class="databox-header white">Fri</span>
                                            </div>
                                            <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                                <span class="databox-header white">Sat</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-xxlg databox-inverted databox-vertical databox-shadowed databox-graded radius-bordered">
                                        <div class="databox-top bg-white ">
                                            <div class="databox-row row-1">
                                                <div class="databox-stat orange radius-bordered font-120">
                                                    <i class="stat-icon wi wi-rain icon-xlg"></i>
                                                </div>
                                            </div>
                                            <div class="databox-row row-8">
                                                <div id="pie-chart-weather" class="chart" style="height:160px;">
                                                </div>
                                                <div class="flot-donut-caption">
                                                    <span class="databox-number sonic-silver no-margin">2014</span>
                                                    <span class="databox-text sonic-silver  no-margin">December</span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-3 padding-10">
                                                <span class="databox-number darkorange no-margin">Weather</span>
                                                <span class="databox-text carbon no-margin">ALL SEASON</span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding bg-white bordered bordered-platinum">
                                            <div class="databox-row row-12 no-padding">
                                                <div class="databox-cell cell-3 no-padding text-align-center bg-yellow">
                                                    <span class="databox-number no-margin">30%</span>
                                                    <span class="databox-text no-margin">Rain</span>
                                                </div>
                                                <div class="databox-cell cell-3 no-padding text-align-center bg-orange">
                                                    <span class="databox-number no-margin">11%</span>
                                                    <span class="databox-text no-margin">Wind</span>
                                                </div>
                                                <div class="databox-cell cell-3 no-padding text-align-center bg-darkorange">
                                                    <span class="databox-number no-margin">37%</span>
                                                    <span class="databox-text no-margin">Sunny</span>
                                                </div>
                                                <div class="databox-cell cell-3 no-padding text-align-center bg-danger">
                                                    <span class="databox-number no-margin">22%</span>
                                                    <span class="databox-text no-margin">Snow</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-vertical databox-xxlg databox-halved radius-bordered databox-shadowed">
                                        <div class="databox-top no-padding bg-palegreen">
                                            <div class="databox-row row-5 text-align-left padding-10">
                                                <div class="databox-stat white bg-palegreen font-120">
                                                    <i class="stat-icon fa fa-caret-up icon-xlg"></i>
                                                </div>
                                                <span class="databox-number no-margin">639.73</span>
                                                <span class="databox-text no-margin">-29 (4.2%)</span>
                                            </div>
                                            <div class="databox-row row-7">
                                                <div class="databox-sparkline no-margin">
                                                    <span data-sparkline="compositebar" data-height="88px" data-width="100%"
                                                          data-barcolor="#bfe19a"
                                                          data-barwidth="5px" data-barspacing="5px"
                                                          data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="3"
                                                          data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                                          data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                          data-composite="7, 6, 5, 7, 9, 10, 8, 7, 6, 4, 7, 8, 8,4,1,2,4,6,2,4,8,10">
                                                        8,4,1,2,4,6,2,4,4,8,10,7, 7, 6, 5, 7, 9, 10, 8, 7, 6, 6
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom bg-white no-padding">
                                            <div class="databox-row row-2 padding-10">
                                                <span class="databox-text sonic-silver no-margin"><i class="glyphicon glyphicon-time gray"></i>Today, 4:15 PM</span>
                                            </div>
                                            <div class="databox-row row-4 padding-10">
                                                <div class="col-lg-6 bg-whitesmoke text-align-center">
                                                    <span class="databox-number gray">16.8 M</span>
                                                </div>
                                                <div class="col-lg-6 bg-whitesmoke text-align-center bordered-left-3 bordered-white">
                                                    <span class="databox-number gray">12 M</span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-2">
                                                <div class="col-lg-6">
                                                    <span class="databox-text sonic-silver no-margin"><i class="fa fa-caret-down orange"></i>Monthly</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span class="databox-text sonic-silver no-margin"><i class="fa fa-caret-up palegreen"></i>Yearly</span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-4">
                                                <div class="col-lg-6 text-align-center">
                                                    <div class="databox-sparkline">
                                                        <span data-sparkline="bar" data-height="35px" data-width="100%"
                                                              data-barwidth="5px" data-barspacing="3px" data-stackedbarcolor='["#a0d468", "#ffce55"]'>
                                                            2:2,2:3,3:2,1:3,4:2,2:2,3:2,1:3,3:2
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 padding-5 text-align-center">
                                                    <div class="databox-sparkline">
                                                        <span data-sparkline="line" data-height="35px" data-width="100%" data-fillcolor="false" data-linecolor="#bfe19a"
                                                              data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                              data-highlightspotcolor="#fb6e52 " data-highlightlinecolor="#fb6e52 "
                                                              data-linewidth="2" data-spotradius="3">
                                                            2,6,7,9,8,5,3,4,4,3,6,7
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="databox databox-xxlg radius-bordered databox-shadowed databox-vertical databox-graded">
                                        <div class="databox-top bordered-bottom-2 bordered-orange bg-ivory">
                                            <div class="col-lg-8 col-sm-8 col-xs-8 text-align-left">
                                                <span class="databox-text carbon">DATA TRANSFER STATS</span>
                                                <span class="databox-text carbon no-margin">Last Week</span>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-xs-4 text-align-right">
                                                <div class="databox-stat bg-palegreen radius-bordered">
                                                    <div class="stat-text">58%</div>
                                                    <i class="stat-icon fa fa-arrow-up"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="databox-bottom">
                                            <div id="bar-chart" class="chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="databox databox-xxlg databox-halved radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-pink padding-30">
                                            <div class="databox-stat stat-left radius-bordered">
                                                <div class="stat-text white">PAGE VIEWS</div>
                                            </div>
                                            <div class="databox-stat white font-120">
                                                <i class="stat-icon fa fa-caret-down icon-xlg"></i>
                                            </div>
                                            <div class="databox-sparkline">
                                                <span data-sparkline="line" data-height="90px" data-width="100%" data-fillcolor="false" data-linecolor="#fff"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                      data-highlightspotcolor="#f5f5f5 " data-highlightlinecolor="#f5f5f5"
                                                      data-linewidth="3" data-spotradius="0">
                                                    1,3,2,5,4,0,5,7,6,5
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom padding-20">
                                            <div class="databox-row row-6">
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number pink no-margin">4,129</span>
                                                    <span class="databox-text darkgray no-margin">Profile</span>
                                                </div>
                                                <div class="databox-cell cell-8 padding-10">
                                                    <div class="databox-sparkline">
                                                        <span data-sparkline="bar" data-height="20px" data-width="100%" data-barcolor="#ccc" data-negbarcolor="#ccc" data-zerocolor="#ccc"
                                                              data-barwidth="5px" data-barspacing="2px">
                                                            2,4,5,6,3,2,0,4,2,4,3,2,6,3,2
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="databox-row row-6">
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number pink no-margin">2,703</span>
                                                    <span class="databox-text darkgray no-margin">About</span>
                                                </div>
                                                <div class="databox-cell cell-8 padding-10">
                                                    <div class="databox-sparkline">
                                                        <span data-sparkline="bar" data-height="20px" data-width="100%" data-barcolor="#ccc" data-negbarcolor="#ccc" data-zerocolor="#ccc"
                                                              data-barwidth="5px" data-barspacing="2px">
                                                            4,2,4,3,2,6,3,2,2,4,5,6,3,2,0
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="row-title before-sky">Largest Vertical Databoxes</h6>
                            <div class="row">
                                <div class="col-lg-8 col-sm-12 col-xs-12">
                                    <div class="databox databox-vertical databox-xxxlg radius-bordered databox-shadowed">
                                        <div class="databox-top bg-white bordered-bottom-1 bordered-platinum text-align-left padding-10">
                                            <div class="databox-text darkgray">CONSUMPTION</div>
                                        </div>
                                        <div class="databox-bottom bg-white no-padding ">
                                            <div class="databox-row row-3 block-center bg-ivory">
                                                <div class="databox-cell cell-4 padding-10">
                                                    <div class="databox-piechart">
                                                        <div data-toggle="easypiechart" class="easyPieChart pull-right" style="margin:0 auto;"
                                                             data-barcolor="#5db2ff" data-linecap="butt" data-percent="60" data-animate="500"
                                                             data-linewidth="5" data-size="100" data-trackcolor="#eeeeee">
                                                            <span class="white font-180"><i class="glyphicon glyphicon-map-marker blue"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="databox-cell cell-4 padding-10">
                                                    <div class="databox-piechart">
                                                        <div data-toggle="easypiechart" class="easyPieChart block-center" style="margin:0 auto;"
                                                             data-barcolor="#e75b8d" data-linecap="butt" data-percent="70" data-animate="500"
                                                             data-linewidth="5" data-size="100" data-trackcolor="#eeeeee">
                                                            <span class="white font-150"><i class="fa fa-camera pink"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="databox-cell cell-4 padding-10">
                                                    <div class="databox-piechart">
                                                        <div data-toggle="easypiechart" class="easyPieChart pull-left" style="margin:0 auto;"
                                                             data-barcolor="#8cc474" data-linecap="butt" data-percent="60" data-animate="500"
                                                             data-linewidth="5" data-size="100" data-trackcolor="#eeeeee">
                                                            <span class="white font-200"><i class="fa fa-bolt green"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 bg-ivory bordered-bottom-1 bordered-lightgray" style="border-bottom-style:dashed;">
                                                <div class="databox-cell cell-4 padding-right-20">
                                                    <span class="databox-text darkcarbon pull-right no-margin"><i class="fa fa-arrow-up green"></i></span>
                                                    <span class="databox-number carbon pull-right">909</span>
                                                    <span class="databox-number gray pull-right"> $</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <div class="block-center" style="width:75px;">
                                                        <span class="databox-text darkcarbon pull-right no-margin"><i class="fa fa-check blue"></i></span>
                                                        <span class="databox-number carbon pull-right">643</span>
                                                        <span class="databox-number gray pull-right"> $</span>
                                                    </div>
                                                </div>
                                                <div class="databox-cell cell-4 padding-left-30">
                                                    <span class="databox-number gray pull-left"> $</span>
                                                    <span class="databox-number carbon pull-left">257</span>
                                                    <span class="databox-text darkcarbon pull-left no-margin"><i class="fa fa-arrow-down orange"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-2 no-padding bg-ivory">
                                                <div class="databox-cell cell-12 no-padding bordered-left-3 bordered-pink">
                                                    <div class="horizontal-space"></div>
                                                    <div class="databox-sparkline">
                                                        <span data-sparkline="bar" data-height="62px" data-width="100%" data-barcolor="#cfd3de" data-negbarcolor="#cfd3de" data-zerocolor="#cfd3de"
                                                              data-barwidth="16px" data-barspacing="5px">
                                                            2,4,5,6,3,2,0,4,2,4,3,2,6,4,5,1,4,5,6,9,1
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-10">
                                                <div class="databox-text darkgray no-margin">DISTRIBUTION</div>
                                            </div>
                                            <div class="databox-row row-3 no-padding bg-ivory bordered-bottom-1 bordered-platinum silver" style="font-size:12px;">
                                                <table class="table table-condensed table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td class="padding-left-10">
                                                                iPad
                                                            </td>
                                                            <td>
                                                                1208
                                                            </td>
                                                            <td>
                                                                874,993
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="padding-left-10">
                                                                iPhone
                                                            </td>
                                                            <td>
                                                                7864
                                                            </td>
                                                            <td>
                                                                761,083
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="padding-left-10">
                                                                iPod
                                                            </td>
                                                            <td>
                                                                903
                                                            </td>
                                                            <td>
                                                                874,032
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="padding-left-10">
                                                                iMac
                                                            </td>
                                                            <td>
                                                                987
                                                            </td>
                                                            <td>
                                                                165,973
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="databox-row row-2 padding-20 bg-whitesmoke">
                                                <a href="javascript:void(0);" class="btn btn-default pull-right">Save Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="databox databox-vertical databox-xxxlg radius-bordered databox-shadowed">
                                        <div class="databox-top bg-orange text-align-left padding-left-30">
                                            <span class="databox-header"><i class="glyphicon glyphicon-map-marker"></i> NEW YORK CITY</span>
                                        </div>
                                        <div class="databox-bottom no-padding bg-sky">
                                            <div class="databox-row row-4 bg-yellow padding-30 text-align-left">
                                                <span class="databox-text padding-bottom-5" style="font-size:20px;">FRI 29/09</span>
                                                <span class="databox-number" style="font-size:44px;">14° <i class="wi wi-day-cloudy"></i></span>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left bordered-bottom bordered-whitesmoke">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">SAT</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">18°  <i class="wi wi-day-cloudy"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left bordered-bottom bordered-whitesmoke">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">SUN</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">25°  <i class="wi wi-cloudy-gusts"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left bordered-bottom bordered-whitesmoke">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">MON</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">22°  <i class="wi wi-windy"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left bordered-bottom bordered-whitesmoke">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">TUE</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">19°  <i class="wi wi-day-showers"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left bordered-bottom bordered-whitesmoke">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">WED</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">16°  <i class="wi wi-day-fog"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left bordered-bottom bordered-whitesmoke">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">THU</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">14°  <i class="wi wi-day-lightning"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left bordered-bottom bordered-whitesmoke">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">FRI</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">11°  <i class="wi wi-day-rain-mix"></i></span>
                                                </div>
                                            </div>
                                            <div class="databox-row row-1 padding-5 padding-left-30 text-align-left">
                                                <div class="databox-cell cell-8">
                                                    <span class="databox-title no-margin">SAT</span>
                                                </div>
                                                <div class="databox-cell cell-4">
                                                    <span class="databox-number">29°  <i class="wi wi-day-hail"></i></span>
                                                </div>
                                            </div>

                                        </div>
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
    <script src="/Public/member/assets/js/charts/sparkline/jquery.sparkline.js"></script>
    <script src="/Public/member/assets/js/charts/sparkline/sparkline-init.js"></script>

    <script src="/Public/member/assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="/Public/member/assets/js/charts/easypiechart/easypiechart-init.js"></script>

    <script src="/Public/member/assets/js/charts/morris/raphael-2.0.2.min.js"></script>
    <script src="/Public/member/assets/js/charts/morris/morris.js"></script>
    <script src="/Public/member/assets/js/charts/morris/morris-init.js"></script>

    <script src="/Public/member/assets/js/charts/flot/jquery.flot.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.orderBars.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.tooltip.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.resize.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.selection.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.crosshair.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.stack.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.time.js"></script>
    <script src="/Public/member/assets/js/charts/flot/jquery.flot.pie.js"></script>

    <script src="/Public/member/assets/js/charts/chartjs/Chart.js"></script>
    <script>
        var chartfirstcolor = "#57b5e3";
        var chartsecondcolor = "#f4b400";
        var chartthirdcolor = "#d73d32";
        var chartfourthcolor = "#8cc474";
        var chartfifthcolor = "#bc5679";
        var gridbordercolor = "#eee";

        var pieData = [
                    {
                        value: 30,
                        color: chartfirstcolor
                    },
                    {
                        value: 50,
                        color: chartsecondcolor
                    },
                    {
                        value: 100,
                        color: chartfourthcolor
                    }

        ];
        new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);


        InitiateEasyPieChart.init();
        InitiateSparklineCharts.init();
        InitiateDonutChart.init();
        //Pie Chart BandWidth
        var data = [
                { data: [[1, 50]], color: '#11a9cc' },
                { data: [[1, 80]], color: '#ffce55' },
                { data: [[1, 30]], color: '#e75b8d' }
        ];
        var placeholder = $("#pie-chart-bandwidth");
        placeholder.unbind();

        $.plot(placeholder, data, {
            series: {
                pie: {
                    innerRadius: 0.7,
                    show: true,
                    gradient: {
                        radial: true,
                        colors: [
                          { opacity: 1.0 },
                          { opacity: 1.0 },
                          { opacity: 1.0 }
                        ]
                    }
                }
            }
        });

        //Pie Chart Weather
        var data = [
                { data: [[1, 30]], color: '#ffce55' },
                { data: [[1, 11]], color: '#e46f61' },
                { data: [[1, 37]], color: '#ed4e2a' },
                { data: [[1, 22]], color: '#fb6e52' }
        ];
        var placeholder = $("#pie-chart-weather");
        placeholder.unbind();

        $.plot(placeholder, data, {
            series: {
                pie: {
                    innerRadius: 0.80,
                    show: true,
                    gradient: {
                        radial: true,
                        colors: [
                          { opacity: 1.0 },
                          { opacity: 1.0 },
                          { opacity: 1.0 },
                          { opacity: 1.0 }
                        ]
                    }
                }
            }
        });
        //Bar Chart
        var d1_1 = [];
        for (var i = 1; i <= 7; i += 1)
            d1_1.push([i, parseInt(Math.random() * 50)]);

        var d1_2 = [];
        for (var i = 1; i <= 7; i += 1)
            d1_2.push([i, parseInt(Math.random() * 50)]);

        var d1_3 = [];
        for (var i = 1; i <= 7; i += 1)
            d1_3.push([i, parseInt(Math.random() * 50)]);

        var data1 = [
            {
                label: "Windows Phone",
                data: d1_1,
                bars: {
                    show: true,
                    order: 1,
                    fillColor: { colors: [{ color: chartthirdcolor }, { color: chartthirdcolor }] }
                },
                color: chartthirdcolor
            },
            {
                label: "Android",
                data: d1_2,
                bars: {
                    show: true,
                    order: 2,
                    fillColor: { colors: [{ color: chartsecondcolor }, { color: chartsecondcolor }] }
                },
                color: chartsecondcolor
            },
            {
                label: "IOS",
                data: d1_3,
                bars: {
                    show: true,
                    order: 3,
                    fillColor: { colors: [{ color: chartfirstcolor }, { color: chartfirstcolor }] }
                },
                color: chartfirstcolor
            }
        ];

        $.plot($("#bar-chart"), data1, {
            bars: {
                barWidth: 0.2,
                lineWidth: 1,
                borderWidth: 0,
                fillColor: { colors: [{ opacity: 0.6 }, { opacity: 1 }] }
            },
            xaxis: {
                ticks: [[1, 'Sun'], [2, 'Mon'], [3, 'Tues'], [4, 'Wed'], [5, 'Thu'], [6, 'Fri'], [7, 'Sat']],
                color: gridbordercolor
            },
            yaxis: {
                color: gridbordercolor
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false
            },
            legend: true,
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false,
                content: "<b>%s</b> : <span>%x</span> : <span>%y</span>",
            }
        });

        //Real-Time Chart
        var data = [],
            totalPoints = 300;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        // Set up the control widget

        var updateInterval = 100;

        var plot = $.plot("#realtime-chart", [getRandomData()], {
            yaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            xaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            colors: ['#fff'],
            series: {
                lines: {
                    lineWidth: 2,
                    fill: false,
                    fillColor: {
                        colors: [{
                            opacity: 0.5
                        }, {
                            opacity: 0
                        }]
                    },
                    steps: false
                },
                shadowSize: 0
            },
            grid: {
                show: false,
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false
            }
        });

        function update() {

            plot.setData([getRandomData()]);
            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();
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