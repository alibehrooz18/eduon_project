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
                                <a href="my_courses.php">
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
                                <a href="course-details.php">
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
                            <h4 class="page-title">ایکون های ساده</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">ایکون ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">ایکون های ساده</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="box icons-page">
                        <div class="box-body">
                            <p>روی آیکون کلیک کنید</p>
                            <div class="row">
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-user si"></i><span class="name">user</span> <code class="code-preview">.si-user</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-people si"></i><span class="name">people</span> <code class="code-preview">.si-people</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-user-female si"></i><span class="name">user-female</span> <code class="code-preview">.si-user-female</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-user-follow si"></i><span class="name">user-follow</span> <code class="code-preview">.si-user-follow</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-user-following si"></i><span class="name">user-following</span> <code class="code-preview">.si-user-following</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-user-unfollow si"></i><span class="name">user-unfollow</span> <code class="code-preview">.si-user-unfollow</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-login si"></i><span class="name">login</span> <code class="code-preview">.si-login</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-logout si"></i><span class="name">logout</span> <code class="code-preview">.si-logout</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-emotsmile si"></i><span class="name">emotsmile</span> <code class="code-preview">.si-emotsmile</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-phone si"></i><span class="name">phone</span> <code class="code-preview">.si-phone</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-call-end si"></i><span class="name">call-end</span> <code class="code-preview">.si-call-end</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-call-in si"></i><span class="name">call-in</span> <code class="code-preview">.si-call-in</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-call-out si"></i><span class="name">call-out</span> <code class="code-preview">.si-call-out</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-map si"></i><span class="name">map</span> <code class="code-preview">.si-map</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-location-pin si"></i><span class="name">location-pin</span> <code class="code-preview">.si-location-pin</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-direction si"></i><span class="name">direction</span> <code class="code-preview">.si-direction</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-directions si"></i><span class="name">directions</span> <code class="code-preview">.si-directions</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-compass si"></i><span class="name">compass</span> <code class="code-preview">.si-compass</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-layers si"></i><span class="name">layers</span> <code class="code-preview">.si-layers</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-menu si"></i><span class="name">menu</span> <code class="code-preview">.si-menu</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-list si"></i><span class="name">list</span> <code class="code-preview">.si-list</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-options-vertical si"></i><span class="name">options-vertical</span> <code class="code-preview">.si-options-vertical</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-options si"></i><span class="name">options</span> <code class="code-preview">.si-options</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-down si"></i><span class="name">arrow-down</span> <code class="code-preview">.si-arrow-down</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-left si"></i><span class="name">arrow-left</span> <code class="code-preview">.si-arrow-left</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-right si"></i><span class="name">arrow-right</span> <code class="code-preview">.si-arrow-right</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-up si"></i><span class="name">arrow-up</span> <code class="code-preview">.si-arrow-up</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-up-circle si"></i><span class="name">arrow-up-circle</span> <code class="code-preview">.si-arrow-up-circle</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-left-circle si"></i><span class="name">arrow-left-circle</span> <code class="code-preview">.si-arrow-left-circle</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-right-circle si"></i><span class="name">arrow-right-circle</span> <code class="code-preview">.si-arrow-right-circle</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-arrow-down-circle si"></i><span class="name">arrow-down-circle</span> <code class="code-preview">.si-arrow-down-circle</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-check si"></i><span class="name">check</span> <code class="code-preview">.si-check</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-clock si"></i><span class="name">clock</span> <code class="code-preview">.si-clock</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-plus si"></i><span class="name">plus</span> <code class="code-preview">.si-plus</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-minus si"></i><span class="name">minus</span> <code class="code-preview">.si-minus</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-close si"></i><span class="name">close</span> <code class="code-preview">.si-close</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-event si"></i><span class="name">event</span> <code class="code-preview">.si-event</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-exclamation si"></i><span class="name">exclamation</span> <code class="code-preview">.si-exclamation</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-organization si"></i><span class="name">organization</span> <code class="code-preview">.si-organization</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-trophy si"></i><span class="name">trophy</span> <code class="code-preview">.si-trophy</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-screen-smartphone si"></i><span class="name">screen-smartphone</span> <code class="code-preview">.si-screen-smartphone</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-screen-desktop si"></i><span class="name">screen-desktop</span> <code class="code-preview">.si-screen-desktop</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-plane si"></i><span class="name">plane</span> <code class="code-preview">.si-plane</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-notebook si"></i><span class="name">notebook</span> <code class="code-preview">.si-notebook</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-mustache si"></i><span class="name">mustache</span> <code class="code-preview">.si-mustache</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-mouse si"></i><span class="name">mouse</span> <code class="code-preview">.si-mouse</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-magnet si"></i><span class="name">magnet</span> <code class="code-preview">.si-magnet</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-energy si"></i><span class="name">energy</span> <code class="code-preview">.si-energy</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-disc si"></i><span class="name">disc</span> <code class="code-preview">.si-disc</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-cursor si"></i><span class="name">cursor</span> <code class="code-preview">.si-cursor</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-cursor-move si"></i><span class="name">cursor-move</span> <code class="code-preview">.si-cursor-move</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-crop si"></i><span class="name">crop</span> <code class="code-preview">.si-crop</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-chemistry si"></i><span class="name">chemistry</span> <code class="code-preview">.si-chemistry</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-speedometer si"></i><span class="name">speedometer</span> <code class="code-preview">.si-speedometer</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-shield si"></i><span class="name">shield</span> <code class="code-preview">.si-shield</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-screen-tablet si"></i><span class="name">screen-tablet</span> <code class="code-preview">.si-screen-tablet</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-magic-wand si"></i><span class="name">magic-wand</span> <code class="code-preview">.si-magic-wand</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-hourglass si"></i><span class="name">hourglass</span> <code class="code-preview">.si-hourglass</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-graduation si"></i><span class="name">graduation</span> <code class="code-preview">.si-graduation</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-ghost si"></i><span class="name">ghost</span> <code class="code-preview">.si-ghost</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-game-controller si"></i><span class="name">game-controller</span> <code class="code-preview">.si-game-controller</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-fire si"></i><span class="name">fire</span> <code class="code-preview">.si-fire</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-eyeglass si"></i><span class="name">eyeglass</span> <code class="code-preview">.si-eyeglass</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-envelope-open si"></i><span class="name">envelope-open</span> <code class="code-preview">.si-envelope-open</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-envelope-letter si"></i><span class="name">envelope-letter</span> <code class="code-preview">.si-envelope-letter</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-bell si"></i><span class="name">bell</span> <code class="code-preview">.si-bell</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-badge si"></i><span class="name">badge</span> <code class="code-preview">.si-badge</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-anchor si"></i><span class="name">anchor</span> <code class="code-preview">.si-anchor</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-wallet si"></i><span class="name">wallet</span> <code class="code-preview">.si-wallet</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-vector si"></i><span class="name">vector</span> <code class="code-preview">.si-vector</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-speech si"></i><span class="name">speech</span> <code class="code-preview">.si-speech</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-puzzle si"></i><span class="name">puzzle</span> <code class="code-preview">.si-puzzle</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-printer si"></i><span class="name">printer</span> <code class="code-preview">.si-printer</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-present si"></i><span class="name">present</span> <code class="code-preview">.si-present</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-playlist si"></i><span class="name">playlist</span> <code class="code-preview">.si-playlist</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-pin si"></i><span class="name">pin</span> <code class="code-preview">.si-pin</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-picture si"></i><span class="name">picture</span> <code class="code-preview">.si-picture</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-handbag si"></i><span class="name">handbag</span> <code class="code-preview">.si-handbag</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-globe-alt si"></i><span class="name">globe-alt</span> <code class="code-preview">.si-globe-alt</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-globe si"></i><span class="name">globe</span> <code class="code-preview">.si-globe</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-folder-alt si"></i><span class="name">folder-alt</span> <code class="code-preview">.si-folder-alt</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-folder si"></i><span class="name">folder</span> <code class="code-preview">.si-folder</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-film si"></i><span class="name">film</span> <code class="code-preview">.si-film</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-feed si"></i><span class="name">feed</span> <code class="code-preview">.si-feed</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-drop si"></i><span class="name">drop</span> <code class="code-preview">.si-drop</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-drawer si"></i><span class="name">drawer</span> <code class="code-preview">.si-drawer</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-docs si"></i><span class="name">docs</span> <code class="code-preview">.si-docs</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-doc si"></i><span class="name">doc</span> <code class="code-preview">.si-doc</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-diamond si"></i><span class="name">diamond</span> <code class="code-preview">.si-diamond</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-cup si"></i><span class="name">cup</span> <code class="code-preview">.si-cup</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-calculator si"></i><span class="name">calculator</span> <code class="code-preview">.si-calculator</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-bubbles si"></i><span class="name">bubbles</span> <code class="code-preview">.si-bubbles</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-briefcase si"></i><span class="name">briefcase</span> <code class="code-preview">.si-briefcase</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-book-open si"></i><span class="name">book-open</span> <code class="code-preview">.si-book-open</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-basket-loaded si"></i><span class="name">basket-loaded</span> <code class="code-preview">.si-basket-loaded</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-basket si"></i><span class="name">basket</span> <code class="code-preview">.si-basket</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-bag si"></i><span class="name">bag</span> <code class="code-preview">.si-bag</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-action-undo si"></i><span class="name">action-undo</span> <code class="code-preview">.si-action-undo</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-action-redo si"></i><span class="name">action-redo</span> <code class="code-preview">.si-action-redo</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-wrench si"></i><span class="name">wrench</span> <code class="code-preview">.si-wrench</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-umbrella si"></i><span class="name">umbrella</span> <code class="code-preview">.si-umbrella</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-trash si"></i><span class="name">trash</span> <code class="code-preview">.si-trash</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-tag si"></i><span class="name">tag</span> <code class="code-preview">.si-tag</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-support si"></i><span class="name">support</span> <code class="code-preview">.si-support</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-frame si"></i><span class="name">frame</span> <code class="code-preview">.si-frame</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-size-fullscreen si"></i><span class="name">size-fullscreen</span> <code class="code-preview">.si-size-fullscreen</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-size-actual si"></i><span class="name">size-actual</span> <code class="code-preview">.si-size-actual</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-shuffle si"></i><span class="name">shuffle</span> <code class="code-preview">.si-shuffle</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-share-alt si"></i><span class="name">share-alt</span> <code class="code-preview">.si-share-alt</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-share si"></i><span class="name">share</span> <code class="code-preview">.si-share</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-rocket si"></i><span class="name">rocket</span> <code class="code-preview">.si-rocket</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-question si"></i><span class="name">question</span> <code class="code-preview">.si-question</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-pie-chart si"></i><span class="name">pie-chart</span> <code class="code-preview">.si-pie-chart</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-pencil si"></i><span class="name">pencil</span> <code class="code-preview">.si-pencil</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-note si"></i><span class="name">note</span> <code class="code-preview">.si-note</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-loop si"></i><span class="name">loop</span> <code class="code-preview">.si-loop</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-home si"></i><span class="name">home</span> <code class="code-preview">.si-home</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-grid si"></i><span class="name">grid</span> <code class="code-preview">.si-grid</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-graph si"></i><span class="name">graph</span> <code class="code-preview">.si-graph</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-microphone si"></i><span class="name">microphone</span> <code class="code-preview">.si-microphone</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-music-tone-alt si"></i><span class="name">music-tone-alt</span> <code class="code-preview">.si-music-tone-alt</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-music-tone si"></i><span class="name">music-tone</span> <code class="code-preview">.si-music-tone</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-earphones-alt si"></i><span class="name">earphones-alt</span> <code class="code-preview">.si-earphones-alt</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-earphones si"></i><span class="name">earphones</span> <code class="code-preview">.si-earphones</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-equalizer si"></i><span class="name">equalizer</span> <code class="code-preview">.si-equalizer</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-like si"></i><span class="name">like</span> <code class="code-preview">.si-like</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-dislike si"></i><span class="name">dislike</span> <code class="code-preview">.si-dislike</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-control-start si"></i><span class="name">control-start</span> <code class="code-preview">.si-control-start</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-control-rewind si"></i><span class="name">control-rewind</span> <code class="code-preview">.si-control-rewind</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-control-play si"></i><span class="name">control-play</span> <code class="code-preview">.si-control-play</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-control-pause si"></i><span class="name">control-pause</span> <code class="code-preview">.si-control-pause</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-control-forward si"></i><span class="name">control-forward</span> <code class="code-preview">.si-control-forward</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-control-end si"></i><span class="name">control-end</span> <code class="code-preview">.si-control-end</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-volume-1 si"></i><span class="name">volume-1</span> <code class="code-preview">.si-volume-1</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-volume-2 si"></i><span class="name">volume-2</span> <code class="code-preview">.si-volume-2</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-volume-off si"></i><span class="name">volume-off</span> <code class="code-preview">.si-volume-off</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-calendar si"></i><span class="name">calendar</span> <code class="code-preview">.si-calendar</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-bulb si"></i><span class="name">bulb</span> <code class="code-preview">.si-bulb</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-chart si"></i><span class="name">chart</span> <code class="code-preview">.si-chart</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-ban si"></i><span class="name">ban</span> <code class="code-preview">.si-ban</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-bubble si"></i><span class="name">bubble</span> <code class="code-preview">.si-bubble</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-camrecorder si"></i><span class="name">camrecorder</span> <code class="code-preview">.si-camrecorder</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-camera si"></i><span class="name">camera</span> <code class="code-preview">.si-camera</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-cloud-download si"></i><span class="name">cloud-download</span> <code class="code-preview">.si-cloud-download</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-cloud-upload si"></i><span class="name">cloud-upload</span> <code class="code-preview">.si-cloud-upload</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-envelope si"></i><span class="name">envelope</span> <code class="code-preview">.si-envelope</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-eye si"></i><span class="name">eye</span> <code class="code-preview">.si-eye</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-flag si"></i><span class="name">flag</span> <code class="code-preview">.si-flag</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-heart si"></i><span class="name">heart</span> <code class="code-preview">.si-heart</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-info si"></i><span class="name">info</span> <code class="code-preview">.si-info</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-key si"></i><span class="name">key</span> <code class="code-preview">.si-key</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-link si"></i><span class="name">link</span> <code class="code-preview">.si-link</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-lock si"></i><span class="name">lock</span> <code class="code-preview">.si-lock</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-lock-open si"></i><span class="name">lock-open</span> <code class="code-preview">.si-lock-open</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-magnifier si"></i><span class="name">magnifier</span> <code class="code-preview">.si-magnifier</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-magnifier-add si"></i><span class="name">magnifier-add</span> <code class="code-preview">.si-magnifier-add</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-magnifier-remove si"></i><span class="name">magnifier-remove</span> <code class="code-preview">.si-magnifier-remove</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-paper-clip si"></i><span class="name">paper-clip</span> <code class="code-preview">.si-paper-clip</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-paper-plane si"></i><span class="name">paper-plane</span> <code class="code-preview">.si-paper-plane</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-power si"></i><span class="name">power</span> <code class="code-preview">.si-power</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-refresh si"></i><span class="name">refresh</span> <code class="code-preview">.si-refresh</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-reload si"></i><span class="name">reload</span> <code class="code-preview">.si-reload</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-settings si"></i><span class="name">settings</span> <code class="code-preview">.si-settings</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-star si"></i><span class="name">star</span> <code class="code-preview">.si-star</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-symbol-female si"></i><span class="name">symbol-female</span> <code class="code-preview">.si-symbol-female</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-symbol-male si"></i><span class="name">symbol-male</span> <code class="code-preview">.si-symbol-male</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-target si"></i><span class="name">target</span> <code class="code-preview">.si-target</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-credit-card si"></i><span class="name">credit-card</span> <code class="code-preview">.si-credit-card</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-paypal si"></i><span class="name">paypal</span> <code class="code-preview">.si-paypal</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-tumblr si"></i><span class="name">social-tumblr</span> <code class="code-preview">.si-social-tumblr</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-twitter si"></i><span class="name">social-twitter</span> <code class="code-preview">.si-social-twitter</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-facebook si"></i><span class="name">social-facebook</span> <code class="code-preview">.si-social-facebook</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-instagram si"></i><span class="name">social-instagram</span> <code class="code-preview">.si-social-instagram</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-linkedin si"></i><span class="name">social-linkedin</span> <code class="code-preview">.si-social-linkedin</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-pinterest si"></i><span class="name">social-pinterest</span> <code class="code-preview">.si-social-pinterest</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-github si"></i><span class="name">social-github</span> <code class="code-preview">.si-social-github</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-google si"></i><span class="name">social-google</span> <code class="code-preview">.si-social-google</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-reddit si"></i><span class="name">social-reddit</span> <code class="code-preview">.si-social-reddit</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-skype si"></i><span class="name">social-skype</span> <code class="code-preview">.si-social-skype</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-dribbble si"></i><span class="name">social-dribbble</span> <code class="code-preview">.si-social-dribbble</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-behance si"></i><span class="name">social-behance</span> <code class="code-preview">.si-social-behance</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-foursqare si"></i><span class="name">social-foursqare</span> <code class="code-preview">.si-social-foursqare</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-soundcloud si"></i><span class="name">social-soundcloud</span> <code class="code-preview">.si-social-soundcloud</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-spotify si"></i><span class="name">social-spotify</span> <code class="code-preview">.si-social-spotify</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-stumbleupon si"></i><span class="name">social-stumbleupon</span> <code class="code-preview">.si-social-stumbleupon</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-youtube si"></i><span class="name">social-youtube</span> <code class="code-preview">.si-social-youtube</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-dropbox si"></i><span class="name">social-dropbox</span> <code class="code-preview">.si-social-dropbox</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-vkontakte si"></i><span class="name">social-vkontakte</span> <code class="code-preview">.si-social-vkontakte</code></a>
                                    </div>
                                </div>
                                <div class="icons-preview-box col-6 col-md-3">
                                    <div class="preview">
                                        <a href="#" class="show-code" title="click to show css class name"><i class="si-social-steam si"></i><span class="name">social-steam</span> <code class="code-preview">.si-social-steam</code></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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