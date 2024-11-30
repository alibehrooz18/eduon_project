﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images\favicon.ico">

    <title>CRMi - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="src\css\vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="src\css\style.css">
    <link rel="stylesheet" href="src\css\skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed rtl">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- logo-->
                    <div class="logo-mini w-30">
                        <span class="light-logo"><img src="images\logo-letter.png" alt="logo"></span>
                        <span class="dark-logo"><img src="images\logo-letter-white.png" alt="logo"></span>
                    </div>
                    <div class="logo-lg">
                        <span class="light-logo"><img src="images\logo-dark-text.png" alt="logo"></span>
                        <span class="dark-logo"><img src="images\logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                                <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="جستجو ....">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="اعلانات">
                                <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
                                <div class="pulse-wave"></div>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">اعلانات</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">پاک کردن همه</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> کاربران جدیدی عضو شدند
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> خطا رخ داد
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> ثبت نام کاربران با خطا مواجه شد
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> ثبت سفارش جدید
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> خرید کاربر ناموفق بود
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> ادمین تیکت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> بررسی عضویت کاربران
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">مشاهده همه</a>
                                </li>
                            </ul>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_actions_toggle">
                                <i class="icon-Layout-arrange"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_panel_toggle">
                                <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_shop_toggle">
                                <i class="icon-Cart1"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
                                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                        <li class="btn-group">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded" src="images\svg-icon\ger.svg" alt="">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\ger.svg" alt=""> آلمانی</a>
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\spain.svg" alt=""> اسپانیایی</a>

                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\jap.svg" alt=""> ژاپنی</a>
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\fra.svg" alt=""> فرانسوی</a>
                            </div>
                        </li>

                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="تمام صفحه">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
                                <div class="d-flex pt-1">
                                    <div class="text-end me-10">
                                        <p class="pt-5 fs-14 mb-0 fw-700 text-primary"> مختار مینائی</p>
                                        <small class="fs-10 mb-0 text-uppercase text-mute"> ادمین</small>
                                    </div>
                                    <img src="images\avatar\avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="">
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">
                    <!-- Logo -->
                    <a href="index.php" class="logo">
                        <!-- logo-->
                        <div class="logo-mini">
                            <span class="light-logo"><img src="images\logo-letter.png" alt="logo"></span>
                        </div>
                        <div class="logo-lg">
                            <span class="light-logo fs-36 fw-700">CRM<span class="text-primary">i</span></span>
                        </div>
                    </a>
                </div>
                <div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="image d-flex align-items-center">
                            <img src="images\avatar\avatar-13.png" class="rounded-0 me-10" alt="User Image">
                            <div>
                                <h4 class="mb-0 fw-600">مختار مینائی </h4>
                                <p class="mb-0">ادمین</p>
                            </div>
                        </div>
                        <div class="info">
                            <a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="extra_profile.php"><i class="ti-user"></i> پروفایل</a>
                                <a class="dropdown-item" href="mailbox.php"><i class="ti-email"></i> دریافت پیام</a>
                                <a class="dropdown-item" href="contact_app_chat.php"><i class="ti-link"></i> گفتگو</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth_login.php"><i class="ti-lock"></i> خروج</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 97%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">منوی اصلی</li>
                            <li>
                                <a href="index.php">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                    <span>داشبورد</span>
                                </a>
                            </li>
                            <li>
                                <a href="offers.php">
                                    <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
                                    <span>آفر</span>
                                </a>
                            </li>
                            <li>
                                <a href="people.php">
                                    <i class="icon-Flag"><span class="path1"></span><span class="path2"></span></i>
                                    <span>کاربران</span>
                                </a>
                            </li>
                            <li>
                                <a href="jobs-details.php">
                                    <i class="icon-Alarm-clock"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <span>جزئیات مشاغل</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact_app_chat.php">
                                    <i class="icon-Chat2"></i>
                                    <span>چت </span>
                                </a>
                            </li>
                            <li>
                                <a href="contact_userlist_grid.php">
                                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
                                    <span>مخاطبین</span>
                                </a>
                            </li>
                            <li class="header">اجزای سازنده</li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
                                    <span>امکانات</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="box_cards.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد پروفایل</a></li>
                                            <li><a href="box_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد پیشرفته</a></li>
                                            <li><a href="box_basic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد ساده</a></li>
                                            <li><a href="box_color.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد رنگی</a></li>
                                            <li><a href="box_group.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد گروهی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ظاهر بیسیک
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="ui_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بخش بندی</a></li>
                                            <li><a href="ui_badges.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نشان ها</a></li>
                                            <li><a href="ui_border_utilities.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بردر</a></li>
                                            <li><a href="ui_buttons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دکمه ها</a></li>
                                            <li><a href="ui_color_utilities.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رنگ</a></li>
                                            <li><a href="ui_dropdown.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ دان</a></li>
                                            <li><a href="ui_dropdown_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ دان بخش بندی</a></li>
                                            <li><a href="ui_progress_bars.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پراگرس بار</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون ها
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="icons_fontawesome.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فونت اوسام</a></li>
                                            <li><a href="icons_glyphicons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون</a></li>
                                            <li><a href="icons_material.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های قطعه</a></li>
                                            <li><a href="icons_themify.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تم ایکون ها</a></li>
                                            <li><a href="icons_simpleline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های خطوط ساده</a></li>
                                            <li><a href="icons_cryptocoins.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های ارز دیجیتال</a></li>
                                            <li><a href="icons_flag.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های پرچم</a></li>
                                            <li><a href="icons_weather.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های هواشناسی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ظاهر سفارشی
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="ui_ribbons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نوارها</a></li>
                                            <li><a href="ui_sliders.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اسلایدر ها</a></li>
                                            <li><a href="ui_typography.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تایپو گرافی</a></li>
                                            <li><a href="ui_tab.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تب ها</a></li>
                                            <li><a href="ui_timeline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلوچارت </a></li>
                                            <li><a href="ui_timeline_horizontal.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلوچارت افقی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اجزا
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="component_bootstrap_switch.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سوئیچ بوت استرپ</a></li>
                                            <li><a href="component_date_paginator.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پیج بندی </a></li>
                                            <li><a href="component_media_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رسانه های پیشرفته</a></li>
                                            <li><a href="component_rangeslider.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رنج اسلایدر</a></li>
                                            <li><a href="component_rating.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رتبه بندی</a></li>
                                            <li><a href="component_animations.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>انیمیشن</a></li>
                                            <li><a href="extension_fullscreen.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تمام صفحه</a></li>
                                            <li><a href="extension_pace.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>آهنگ</a></li>
                                            <li><a href="component_nestable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تودرتو</a></li>
                                            <li><a href="component_portlet_draggable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پورتلت های قابل کشیدن</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Box2"><span class="path1"></span><span class="path2"></span></i>
                                    <span>فرم ها-جداول ونمودارها</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم ها
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="forms_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم اجزا</a></li>
                                            <li><a href="forms_general.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم لایه </a></li>
                                            <li><a href="forms_wizard.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم ویزارد</a></li>
                                            <li><a href="forms_validation.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم اعتبار سنجی</a></li>
                                            <li><a href="forms_mask.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرمت کننده</a></li>
                                            <li><a href="forms_xeditable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر Xeditable</a></li>
                                            <li><a href="forms_dropzone.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ زون</a></li>
                                            <li><a href="forms_code_editor.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر کد</a></li>
                                            <li><a href="forms_editors.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر </a></li>
                                            <li><a href="forms_editor_markdown.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مارک داون</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جداول
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="tables_simple.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول ساده</a></li>
                                            <li><a href="tables_data.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دیتا تیبل</a></li>
                                            <li><a href="tables_editable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول قابل ویرایش</a></li>
                                            <li><a href="tables_color.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول رنگی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودارها
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="charts_chartjs.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>چارت جاوااسکریپتی</a></li>
                                            <li><a href="charts_flot.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلت</a></li>
                                            <li><a href="charts_inline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار خطی</a></li>
                                            <li><a href="charts_morris.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>موریس</a></li>
                                            <li><a href="charts_peity.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار دایره ای</a></li>
                                            <li><a href="charts_chartist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار لیستی</a></li>
                                            <li><a href="charts_c3_axis.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار محوری</a></li>
                                            <li><a href="charts_c3_bar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار میله ای</a></li>
                                            <li><a href="charts_c3_data.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار داده ها</a></li>
                                            <li><a href="charts_c3_line.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار خطی</a></li>
                                            <li><a href="charts_echarts_basic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودارهای پایه</a></li>
                                            <li><a href="charts_echarts_bar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار نواری</a></li>
                                            <li><a href="charts_echarts_pie_doughnut.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار پای و دونات</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Globe"><span class="path1"></span><span class="path2"></span></i>
                                    <span>اپ و ویجت</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اپ
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="extra_calendar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تقویم</a></li>
                                            <li><a href="contact_app.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست تماس</a></li>
                                            <li><a href="extra_taskboard.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فعالیت ها</a></li>
                                            <li><a href="mailbox.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صندوق ایمیل</a></li>
                                            <li><a href="contact_userlist_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مخاطبین</a></li>
                                            <li><a href="contact_app_chat.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>چت</a></li>
                                            <li><a href="extra_app_ticket.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پشتیبانی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویجت های
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li class="treeview">
                                                <a href="#">
                                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سفارشی
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="widgets_blog.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پست</a></li>
                                                    <li><a href="widgets_chart.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار</a></li>
                                                    <li><a href="widgets_list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست</a></li>
                                                    <li><a href="widgets_social.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اجتماعی</a></li>
                                                    <li><a href="widgets_statistic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>امار</a></li>
                                                    <li><a href="widgets_weather.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>هواشناسی</a></li>
                                                    <li><a href="widgets.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویجت ها</a></li>
                                                    <li><a href="email_index.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایمیل ها</a></li>
                                                </ul>
                                            </li>
                                            <li class="treeview">
                                                <a href="#">
                                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه ها
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="map_google.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه گوگل</a></li>
                                                    <li><a href="map_vector.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه وکتور</a></li>
                                                </ul>
                                            </li>
                                            <li class="treeview">
                                                <a href="#">
                                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مدال ها
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="component_modals.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مدال ها</a></li>
                                                    <li><a href="component_sweatalert.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سویت الرت</a></li>
                                                    <li><a href="component_notification.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تواستر</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحه نمونه
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="invoice.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صورتحساب</a></li>
                                            <li><a href="invoicelist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست فاکتورها</a></li>
                                            <li><a href="extra_profile.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پروفایل کاربری</a></li>
                                            <li><a href="contact_userlist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست کاربران</a></li>
                                            <li><a href="sample_faq.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سوالات</a></li>
                                            <li><a href="sample_blank.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>خالی</a></li>
                                            <li><a href="sample_coming_soon.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحه به زودی</a></li>
                                            <li><a href="sample_custom_scroll.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اسکرول سفارشی</a></li>
                                            <li><a href="sample_gallery.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>گالری</a></li>
                                            <li><a href="sample_lightbox.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پنجره لایت باکس</a></li>
                                            <li><a href="sample_pricing.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>قیمت</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
                                    <span>احراز هویت</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="auth_login.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ورود</a></li>
                                    <li><a href="auth_register.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ثبت نام</a></li>
                                    <li><a href="auth_lockscreen.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>قفل صفحه</a></li>
                                    <li><a href="auth_user_pass.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بازیابی رمز عبور</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Warning-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <span>صفحات ضروری</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="error_404.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> خطای۴۰۴</a></li>
                                    <li><a href="error_500.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>خطای ۵۰۰</a></li>
                                    <li><a href="error_maintenance.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحات ضروری</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="sidebar-widgets">
                            <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                                <div class="text-center">
                                    <img src="images\svg-icon\color-svg\custom-17.svg" class="sideimg p-5" alt="">
                                    <h4 class="title-bx text-primary mm">مشاهده همه گزارشات</h4>
                                    <a href="#" class="py-10 fs-14 mb-0 text-primary">
                                        بهترین پنل مدیریت <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="copyright text-center m-25">
                                <p><strong class="d-block"> داشبورد</strong> ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> تمامی حقوق محفوظ است
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">گلیف ایکون</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">ایکون ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">گلیف ایکون</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-body">

                        <ul class="bs-glyphicons">
                            <li>
                                <span class="glyphicon glyphicon-asterisk"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-plus"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-plus</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-euro"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-euro</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-eur"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-eur</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-minus"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-minus</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-cloud"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-envelope"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-pencil"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-glass"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-glass</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-music"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-music</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-search"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-search</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-heart"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-heart</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-star</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-user"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-user</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-film"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-film</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-th-large"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-th"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-th</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-th-list"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-ok</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-remove"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-remove</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-zoom-in"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-zoom-out"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-off"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-off</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-signal"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-signal</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-cog"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-cog</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-trash"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-trash</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-home"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-home</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-file"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-file</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-time"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-time</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-road"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-road</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-download-alt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-download"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-download</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-upload"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-upload</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-inbox"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-play-circle"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-repeat"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-refresh"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-lock"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-lock</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-flag"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-flag</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-headphones"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-headphones</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-volume-off"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-volume-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-volume-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-qrcode"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-barcode"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tag"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tag</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tags"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tags</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-book</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-bookmark"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-print"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-print</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-camera"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-camera</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-font"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-font</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-bold"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-bold</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-italic"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-italic</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-text-height"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-text-height</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-text-width"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-text-width</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-align-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-align-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-align-center"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-align-center</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-align-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-align-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-align-justify"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-list"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-list</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-indent-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-indent-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-facetime-video"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-picture"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-picture</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-map-marker"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-adjust"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tint"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tint</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-edit</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-share"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-share</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-check"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-check</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-move"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-move</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-step-backward"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-fast-backward"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-backward"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-backward</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-play"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-play</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-pause"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-pause</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-stop"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-stop</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-forward"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-forward</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-fast-forward"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-step-forward"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-eject"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-eject</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-minus-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-remove-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-question-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-info-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-screenshot"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-remove-circle"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok-circle"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ban-circle"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-arrow-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-arrow-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-arrow-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-arrow-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-share-alt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-resize-full"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-resize-small"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-exclamation-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-gift"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-gift</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-leaf"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-fire"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-fire</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-eye-open"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-eye-close"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-warning-sign"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-plane"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-plane</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-calendar"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-random"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-random</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-comment"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-comment</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-magnet"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-chevron-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-retweet"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-folder-close"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-folder-open"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-resize-vertical"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-resize-horizontal"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-hdd"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-bullhorn"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-bell"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-bell</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-certificate"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-certificate</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-thumbs-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-hand-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-hand-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-hand-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-hand-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-circle-arrow-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-globe"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-globe</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-wrench"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tasks"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-filter"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-filter</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-briefcase"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-fullscreen"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-dashboard"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-paperclip"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-heart-empty"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-link"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-link</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-phone"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-phone</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-pushpin"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-usd"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-usd</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-gbp"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sort"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sort</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sort-by-order"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sort-by-attributes"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-unchecked"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-expand"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-expand</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-collapse-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-collapse-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-log-in"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-flash"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-flash</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-log-out"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-new-window"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-new-window</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-record"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-record</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-save"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-save</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-open"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-open</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-saved"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-saved</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-import"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-import</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-export"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-export</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-send"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-send</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-floppy-saved"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-floppy-remove"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-floppy-save"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-floppy-open"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-credit-card"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-transfer"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-cutlery"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-header"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-header</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-compressed"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-compressed</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-earphone"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-phone-alt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tower"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tower</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-stats"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-stats</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sd-video"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-hd-video"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-subtitles"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sound-stereo"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sound-dolby"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sound-5-1"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sound-6-1"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sound-7-1"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-copyright-mark"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-registration-mark"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-cloud-download"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-cloud-upload"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tree-conifer"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tree-deciduous"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-cd"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-cd</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-save-file"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-save-file</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-open-file"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-open-file</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-level-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-level-up</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-copy"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-copy</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-paste"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-paste</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-alert"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-alert</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-equalizer"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-equalizer</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-king"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-king</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-queen"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-queen</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-pawn"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-pawn</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-bishop"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-bishop</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-knight"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-knight</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-baby-formula"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-baby-formula</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-tent"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-tent</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-blackboard"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-blackboard</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-bed"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-bed</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-apple"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-apple</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-erase"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-erase</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-hourglass"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-hourglass</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-lamp"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-lamp</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-duplicate"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-duplicate</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-piggy-bank"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-piggy-bank</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-scissors"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-scissors</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-bitcoin"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-bitcoin</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-btc"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-btc</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-xbt"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-xbt</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-yen"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-yen</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-jpy"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-jpy</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ruble"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-ruble</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-rub"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-rub</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-scale"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-scale</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ice-lolly"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-ice-lolly</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ice-lolly-tasted"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-education"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-education</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-option-vertical"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-option-vertical</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-modal-window"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-modal-window</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-oil"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-oil</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-grain"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-grain</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-sunglasses"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-sunglasses</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-text-size"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-text-size</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-text-color"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-text-color</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-text-background"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-text-background</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-object-align-top"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-object-align-top</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-object-align-bottom"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-object-align-horizontal"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-object-align-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-object-align-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-object-align-vertical"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-object-align-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-object-align-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-triangle-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-triangle-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-triangle-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-triangle-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-triangle-bottom"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-triangle-top"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-triangle-top</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-console"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-console</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-superscript"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-superscript</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-subscript"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-subscript</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-menu-left"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-menu-left</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-menu-right"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-menu-right</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-menu-down"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-menu-down</span>
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-menu-up"></span>
                                <span class="glyphicon-class">glyphicon glyphicon-menu-up</span>
                            </li>
                        </ul>

                    </div>

                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->




        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">خرید</a>
                    </li>
                </ul>
            </div>
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> <a href="https://www.fudatco.com/"> crmi قالب مدیریت</a>. بازطراحی و فارسی سازی توسط هلدینگ فنی مهندسی فوداتکو.
        </footer>
        <!-- Side panel -->
        <!-- quick_actions_toggle -->
        <div class="modal modal-left fade" id="quick_actions_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content slim-scroll">
                    <div class="modal-body bg-white p-30">
                        <div class="d-flex align-items-center justify-content-between pb-30">
                            <h4 class="m-0">فعالیت ها<br>
                                <small class="badge fs-12 badge-primary mt-10">23 اقدام در حال بررسی</small>
                            </h4>
                            <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="accounting.php">
                                    <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">حسابداری</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist_grid.php">
                                    <i class="icon-Mail-attachment fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">اعضا</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="projects.php">
                                    <i class="icon-Box2 fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">پروژه ها</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist.php">
                                    <i class="icon-Group fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">مشتریان</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="mailbox.php">
                                    <i class="icon-Chart-bar fs-36"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    <span class="fs-16">ایمیل</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="setting.php">
                                    <i class="icon-Color-profile fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">تنظیمات</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="ecommerce_orders.php">
                                    <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-18">سفارشات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_actions_toggle -->

        <!-- quick_panel_toggle -->
        <div class="modal modal-left fade" id="quick_panel_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content slim-scroll2">
                    <div class="modal-body bg-white py-20 px-0">
                        <div class="d-flex align-items-center justify-content-between pb-30">
                            <ul class="nav nav-tabs customtab3 px-30" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#quick_panel_logs">لاگ ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#quick_panel_notifications">اعلانات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#quick_panel_settings">تنظیمات</a>
                                </li>
                            </ul>
                            <div class="offcanvas-close">
                                <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                    <span class="fa fa-close"></span>
                                </a>
                            </div>
                        </div>
                        <div class="px-30">
                            <div class="tab-content">
                                <div class="tab-pane active" id="quick_panel_logs" role="tabpanel">
                                    <div class="mb-30">
                                        <h5 class="fw-500 mb-15">پیام های سیستمی</h5>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">هزینه های جانبی</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">هزینه تنظیمات</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">هزینه لابراتور</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\004-dad.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">حقوق کاربران</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">طراحی گارگاه</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                    </div>
                                    <div class="mb-30">
                                        <h5 class="fw-500 mb-15">گزارشات عملکرد</h5>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">سود پروژه ها</a>
                                                <span class="text-fade">مدیر پروژه</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">طراح </a>
                                                <span class="text-fade">کارگردان</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">توابع</a>
                                                <span class="text-fade">فول استک</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">دولوپر</a>
                                                <span class="text-fade">طراحی و توسعه</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Shield-user fs-24"></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">تست</a>
                                                <span class="text-fade">کنترل کیفی</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="quick_panel_notifications" role="tabpanel">
                                    <div>
                                        <div class="media-list">
                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">10:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-primary">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط مختار</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">08:40</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-success">
                                                    <p>پیام ها و هشدار ها.</p>
                                                    <span class="text-fade">توسط یلان</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">07:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-info">
                                                    <p>سایر پیام ها.</p>
                                                    <span class="text-fade">توسط یوسف</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">01:15</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-danger">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط نارین</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">23:12</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-warning">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط حامد</span>
                                                </div>
                                            </a>
                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">10:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-primary">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط مریم</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">08:40</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-success">
                                                    <p>پیام ها و هشدار ها.</p>
                                                    <span class="text-fade">توسط ناهید</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">07:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-info">
                                                    <p>سایر پیام ها.</p>
                                                    <span class="text-fade">توسط رامین</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">01:15</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-danger">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط هانیه</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">23:12</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-warning">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط آیدا</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="quick_panel_settings" role="tabpanel">
                                    <div>
                                        <form class="form">
                                            <!--begin::Section-->
                                            <div>
                                                <h5 class="fw-500 mb-15">مشتریان</h5>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">اعلانان:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">بررسی وضعیت:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-primary" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">پشتیبانی:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                            <div class="dropdown-divider"></div>
                                            <!--begin::Section-->
                                            <div class="pt-2">
                                                <h5 class="fw-500 mb-15">گزارشات</h5>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">دریافت گزارشات:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">غیرفعال کردن:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">مجوز داده:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                            <div class="dropdown-divider"></div>
                                            <!--begin::Section-->
                                            <div class="pt-2">
                                                <h5 class="fw-500 mb-15">اعضا</h5>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">مجوز ثبت نام:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">مجوز نظرات:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">پرتابل مشتریان:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_panel_toggle -->
        <!-- quick_user_toggle -->
        <div class="modal modal-left fade" id="quick_user_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content slim-scroll3">
                    <div class="modal-body p-30 bg-white">
                        <div class="d-flex align-items-center justify-content-between pb-30">
                            <h4 class="m-0">پروفایل کاربر
                                <small class="text-fade fs-12 ms-5">12 پیام</small>
                            </h4>
                            <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </a>
                        </div>
                        <div>
                            <div class="d-flex flex-row">
                                <div class=""><img src="images\avatar\avatar-2.png" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
                                <div class="ps-20">
                                    <h5 class="mb-0">هانیه مهدوی</h5>
                                    <p class="my-5 text-fade">طراح وب</p>
                                    <a href="mailto:dummy@gmail.com"><span class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span class="path2"></span></span> dummy@gmail.com</a>
                                    <button class="btn btn-success-light btn-sm mt-5"><i class="ti-plus"></i> فالو</button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider my-30"></div>
                        <div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">پروفایل من</a>
                                    <span class="text-fade">تنظیمات حساب</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">پیام های من</a>
                                    <span class="text-fade">صندوق دریافت</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">فعالیت ها</a>
                                    <span class="text-fade">اعلانات</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">وظایف</a>
                                    <span class="text-fade">پروژه های جدید</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider my-30"></div>
                        <div>
                            <div class="media-list">
                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">10:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-primary">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط مختار</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">08:40</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-success">
                                        <p>پیام ها و هشدار ها.</p>
                                        <span class="text-fade">توسط حدیث</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">07:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-info">
                                        <p>سایر پیام ها.</p>
                                        <span class="text-fade">توسط یوسف</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">01:15</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-danger">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط رامین</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">23:12</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-warning">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط حامد</span>
                                    </div>
                                </a>
                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">10:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-primary">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط مختار</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">08:40</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-success">
                                        <p>پیام ها و هشدار ها.</p>
                                        <span class="text-fade">توسط حدیث</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">07:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-info">
                                        <p>سایر پیام ها.</p>
                                        <span class="text-fade">توسط یوسف</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">01:15</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-danger">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط رامین</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">23:12</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-warning">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط حامد</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_user_toggle -->
        <!-- quick_shop_toggle -->
        <div class="modal modal-left fade" id="quick_shop_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="px-15 d-flex w-p100 align-items-center justify-content-between">
                            <h4 class="m-0">کارت خرید</h4>
                            <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-body px-30 pb-30 bg-white slim-scroll4">
                        <div class="d-flex align-items-center justify-content-between pb-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="images\product\product-1.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="images\product\product-2.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="images\product\product-3.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="images\product\product-4.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="images\product\product-5.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="images\product\product-6.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <div class="d-flex align-items-center justify-content-between mb-10">
                            <span class="fw-600 text-muted fs-16 me-2">کل</span>
                            <span class="fw-600 text-end">1248.000</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-15">
                            <span class="fw-600 text-muted fs-16 me-2">جمع کل</span>
                            <span class="fw-600 text-primary text-end">4125.000</span>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary">ثبت سفارش</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_shop_toggle -->

    </div>
    <!-- ./wrapper -->

    <!-- Sidebar -->

    <div id="chat-box-body">
        <div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
        </div>

        <div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                        <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>
                    <div class="dropdown-menu min-w-200">
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Color me-15"></span>
                            گروه جدید</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                            مخاطبین</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                            گروه ها</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                            تماس ها</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                            تنظیمات</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                            پشتیبانی</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span>
                            حریم خصوصی</a>
                    </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">نارین همتی</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">فعال</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                        <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="images\avatar\2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">سیما </a>
                                <p class="text-muted fs-12 mb-0">2 ساعت پیش</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            سلام بفرمائید
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">شما</a>
                                <p class="text-muted fs-12 mb-0">3 دقیقه پیش</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="images\avatar\3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                            ی سوال داشتم
                        </div>
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="images\avatar\2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">سیما</a>
                                <p class="text-muted fs-12 mb-0">40 ثانیه پیش</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            اوکی.<br>مطرح کنید
                        </div>
                    </div>
                </div>
                <!--chat-log -->
            </div>
            <div class="chat-input">
                <form>
                    <input type="text" id="chat-input" placeholder="یک پیام ارسال کنید...">
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="src\js\vendors.min.js"></script>
    <script src="src\js\pages\chat-popup.js"></script>
    <script src="assets\icons\feather-icons\feather.min.js"></script>

    <script src="src\js\template.js"></script>
    <script src="src\js\pages\dashboard.js"></script>

</body>

</html>