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
                            <h4 class="page-title">ویجت ها</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">ویجت ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">لیست ویجت هاس.یمگکش.و<div class=""></div>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">مشاهده وظایف <small class="subtitle">رسیده ها</small></h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-primary mb-1 fs-16">پروژه های دریافتی</a>
                                            <span class="text-fade">مدیر پروژه</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-danger mb-1 fs-16">طرح های پذیرفته</a>
                                            <span class="text-fade">گارگردان هنری</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-success mb-1 fs-16">توابع محلی</a>
                                            <span class="text-fade">فول استک</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-info mb-1 fs-16">توسعه</a>
                                            <span class="text-fade">دولوپر</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                            <span class="icon-Shield-user fs-24"></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-warning mb-1 fs-16">تستی</a>
                                            <span class="text-fade">کنترل کیفی</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box bg-primary-light">
                                <div class="box-header with-border">
                                    <h4 class="box-title text-primary">مردم</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt text-primary"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\1.jpg" class="avatar avatar-lg rounded10" alt="">
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-primary mb-1 fs-16">مختار مینائی</a>
                                            <span class="text-mute">مدیر پروژه</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\2.jpg" class="avatar avatar-lg rounded10" alt="">
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-danger mb-1 fs-16">هانیه حمیدی</a>
                                            <span class="text-mute">گارگردان هنری</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\3.jpg" class="avatar avatar-lg rounded10" alt="">
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-success mb-1 fs-16">رامین احمدی</a>
                                            <span class="text-mute">برنامه نویس</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\4.jpg" class="avatar avatar-lg rounded10" alt="">
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-info mb-1 fs-16">رضا حمیدی</a>
                                            <span class="text-mute">دولوپر</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <div class="me-15">
                                            <img src="images\avatar\5.jpg" class="avatar avatar-lg rounded10" alt="">
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-warning mb-1 fs-16">زهرا کاظمی</a>
                                            <span class="text-mute">کنترل کیفی</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title text-primary">نویسنده</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle px-10 " data-bs-toggle="dropdown" href="#">ایجاد</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <a href="#" class="text-dark hover-primary mb-1 fs-16">مختار مینائی</a>
                                            <span class="text-fade">برنامه نویس فول استک</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>دریافتی</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="#">ارسال شده</a>
                                                <a class="dropdown-item" href="#">اسپم</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>ناقص</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\avatar-2.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <a href="#" class="text-dark hover-danger mb-1 fs-16">لیلا همتی</a>
                                            <span class="text-fade">برنامه نویس فول استک</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>دریافتی</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="#">ارسال شده</a>
                                                <a class="dropdown-item" href="#">اسپم</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>ناقص</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <a href="#" class="text-dark hover-success mb-1 fs-16">رامین احمدی</a>
                                            <span class="text-fade">برنامه نویس فول استک</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>دریافتی</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="#">ارسال شده</a>
                                                <a class="dropdown-item" href="#">اسپم</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>ناقص</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15">
                                            <img src="images\avatar\avatar-3.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <a href="#" class="text-dark hover-info mb-1 fs-16">مریم قربانی</a>
                                            <span class="text-fade">برنامه نویس فول استک</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>دریافتی</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="#">ارسال شده</a>
                                                <a class="dropdown-item" href="#">اسپم</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>ناقص</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <div class="me-15">
                                            <img src="images\avatar\avatar-5.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <a href="#" class="text-dark hover-warning mb-1 fs-16">شهین احمدی</a>
                                            <span class="text-fade">برنامه نویس فول استک</span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>دریافتی</span>
                                                    <span class="badge badge-pill badge-info">5</span>
                                                </a>
                                                <a class="dropdown-item" href="#">ارسال شده</a>
                                                <a class="dropdown-item" href="#">اسپم</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>ناقص</span>
                                                    <span class="badge badge-pill badge-default">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">لیست</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle px-10 " data-bs-toggle="dropdown" href="#">ایجاد</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-success">
                                            <label for="md_checkbox_21" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-success fw-500 fs-16">
                                                ایجاد لوگو
                                            </a>
                                            <span class="text-fade fw-500">
                                                چند دقیقه پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-primary">
                                            <label for="md_checkbox_22" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-primary fw-500 fs-16">
                                                توضیحات تست
                                            </a>
                                            <span class="text-fade fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-danger">
                                            <label for="md_checkbox_23" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-danger fw-500 fs-16">
                                                متن تست
                                            </a>
                                            <span class="text-fade fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-info align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-info">
                                            <label for="md_checkbox_24" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-info fw-500 fs-16">
                                                متن تست
                                            </a>
                                            <span class="text-fade fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-warning">
                                            <label for="md_checkbox_25" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-warning fw-500 fs-16">
                                                متن تست
                                            </a>
                                            <span class="text-fade fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box bg-success-light">
                                <div class="box-header with-border">
                                    <h4 class="box-title text-success">لیست</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li class="dropdown">
                                            <button class="btn btn-success dropdown-toggle px-10 " data-bs-toggle="dropdown" href="#">ایجاد</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-25">
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_26" class="filled-in chk-col-success">
                                            <label for="md_checkbox_26" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-success fw-500 fs-16">
                                                ایجاد لوگو
                                            </a>
                                            <span class="text-mute fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-primary">
                                            <label for="md_checkbox_27" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-primary fw-500 fs-16">
                                                توضیحات تست
                                            </a>
                                            <span class="text-mute fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_28" class="filled-in chk-col-danger">
                                            <label for="md_checkbox_28" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-danger fw-500 fs-16">
                                                متن تست
                                            </a>
                                            <span class="text-mute fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-info">
                                            <label for="md_checkbox_29" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-info fw-500 fs-16">
                                                متن تست
                                            </a>
                                            <span class="text-mute fw-500">
                                                چند روز پیش
                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-25">
                                        <div class="h-20 mx-20 flex-shrink-0">
                                            <input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-warning">
                                            <label for="md_checkbox_30" class="h-20 p-10 mb-0"></label>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <a href="#" class="text-dark hover-warning fw-500 fs-16">
                                                متن تست
                                            </a>
                                            <span class="text-mute fw-500">
                                                چند روز پیش

                                            </span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <h6 class="dropdown-header">برچسب :</h6>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span class="badge badge-primary-light">مشتری</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-danger-light">شریک</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-success-light">تامین کننده</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge badge-info-light">عضو</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item flexbox" href="#">
                                                    <span>افزودن</span>
                                                    <span class="badge badge-pill badge-default">+</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">ترندها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-primary mb-1 fs-16">متن تست</a>
                                            <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-danger mb-1 fs-16">عنوان تست</a>
                                            <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-success mb-1 fs-16">متن تست</a>
                                            <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\004-dad.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-info mb-1 fs-16">متن تست</a>
                                            <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-warning mb-1 fs-16">متن تست</a>
                                            <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">ترندها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="mb-30">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">متن تست</a>
                                                <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-0 pt-10">
                                            توضیحات را در این قسمت بصورت خلاصه درج نمائید
                                        </p>
                                    </div>
                                    <div class="mb-30">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">عنوان تست</a>
                                                <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-0 pt-10">
                                            توضیحات را در این قسمت بصورت خلاصه درج نمائید
                                        </p>
                                    </div>
                                    <div class="mb-30">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">متن تست</a>
                                                <span class="text-fade">خدمات تکمیلی در واحد مربوطه</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-0 pt-10">
                                            توضیحات را در این قسمت بصورت خلاصه درج نمائید
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">پشتیبانی تیکت ها</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list bb-1 bb-dashed border-light">
                                        <div class="media align-items-center">
                                            <a class="avatar avatar-lg status-success" href="#">
                                                <img src="images\avatar\avatar-1.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="#"><strong>مختار مینائی</strong></a>
                                                </p>
                                                2 روز پیش
                                            </div>
                                            <div class="media-right">
                                                <span class="badge badge-warning-light">در حال بررسی</span>
                                            </div>
                                        </div>
                                        <div class="media pt-0">
                                            <p>توضیحات تست .دراین قسمت توضیحات لازم را ارائه دهید.</p>
                                        </div>
                                    </div>
                                    <div class="media-list bb-1 bb-dashed border-light">
                                        <div class="media align-items-center">
                                            <a class="avatar avatar-lg status-success" href="#">
                                                <img src="images\avatar\avatar-3.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="#"><strong>نسرین امیدی</strong></a>
                                                </p>
                                                5 روز پیش
                                            </div>
                                            <div class="media-right">
                                                <span class="badge badge-success-light">باز</span>
                                            </div>
                                        </div>
                                        <div class="media pt-0">
                                            <p>توضیحات تست .دراین قسمت توضیحات لازم را ارائه دهید.</p>
                                        </div>
                                    </div>
                                    <div class="media-list">
                                        <div class="media align-items-center">
                                            <a class="avatar avatar-lg status-success" href="#">
                                                <img src="images\avatar\avatar-2.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="#"><strong>لیلا رحیمی</strong></a>
                                                </p>
                                                7 روز پیش
                                            </div>
                                            <div class="media-right">
                                                <span class="badge badge-danger-light">بسته</span>
                                            </div>
                                        </div>
                                        <div class="media pt-0">
                                            <p>توضیحات کامل را دراین قسمت ارائه دهید.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">لیست کشورها</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">
                                        <a class="media media-single" href="#">
                                            <i class="fs-18 me-0 flag-icon flag-icon-us"></i>
                                            <span class="title">ایران </span>
                                            <span class="badge badge-pill badge-secondary-light">125</span>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <i class="fs-18 me-0 flag-icon flag-icon-ba"></i>
                                            <span class="title">بحرین</span>
                                            <span class="badge badge-pill badge-primary-light">124</span>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <i class="fs-18 me-0 flag-icon flag-icon-ch"></i>
                                            <span class="title">چین</span>
                                            <span class="badge badge-pill badge-info-light">425</span>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <i class="fs-18 me-0 flag-icon flag-icon-de"></i>
                                            <span class="title">دانمارک</span>
                                            <span class="badge badge-pill badge-success-light">321</span>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <i class="fs-18 me-0 flag-icon flag-icon-fr"></i>
                                            <span class="title">فرانسه</span>
                                            <span class="badge badge-pill badge-danger-light">159</span>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <i class="fs-18 me-0 flag-icon flag-icon-ga"></i>
                                            <span class="title">یونان</span>
                                            <span class="badge badge-pill badge-warning-light">452</span>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <i class="fs-18 me-0 flag-icon flag-icon-us"></i>
                                            <span class="title">ایران</span>
                                            <span class="badge badge-pill badge-secondary-light">125</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">دانلود فایل ها</h4>
                                    <div class="dropdown pull-right">
                                        <h6 class="dropdown-toggle mb-0" data-bs-toggle="dropdown">امروز</h6>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item active" href="#">امروز</a>
                                            <a class="dropdown-item" href="#">دیروز</a>
                                            <a class="dropdown-item" href="#">هفته گذشته</a>
                                            <a class="dropdown-item" href="#">ماه گذشته</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="media-list media-list-divided">
                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-success-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-success"><i class="fa fa-file-pdf-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16">دانلود دستی</span>
                                            <a class="fs-18 text-gray hover-info" href="#"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-primary-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-primary"><i class="fa fa-file-text"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16">مدارک</span>
                                            <a class="fs-18 text-gray hover-info" href="#"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-warning-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-warning"><i class="fa fa-file-excel-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16">فایل اکسل</span>
                                            <a class="fs-18 text-gray hover-info" href="#"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-danger-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-danger"><i class="fa fa-file-zip-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16">فایل زیپ</span>
                                            <a class="fs-18 text-gray hover-info" href="#"><i class="fa fa-download"></i></a>
                                        </div>

                                        <div class="media media-single px-0">
                                            <div class="ms-0 me-15 bg-info-light h-50 w-50 l-h-50 rounded text-center">
                                                <span class="fs-24 text-info"><i class="fa fa-file-word-o"></i></span>
                                            </div>
                                            <span class="title fw-500 fs-16">فایل ورد</span>
                                            <a class="fs-18 text-gray hover-info" href="#"><i class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">پیام های اخیر</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover">
                                        <div class="media">
                                            <a class="avatar avatar-lg status-success" href="#">
                                                <img src="images\avatar\avatar-1.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="#"><strong>مختار مینائی</strong></a>
                                                </p>
                                                <p>توضیحات تست.</p>
                                                <span>همین الان</span>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="avatar avatar-lg status-danger" href="#">
                                                <img src="images\avatar\avatar-2.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="#"><strong>نسترن امیدی</strong></a>
                                                </p>
                                                <p>توضیحات تست</p>
                                                <span>33 دقیقه پیش</span>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="avatar avatar-lg status-warning" href="#">
                                                <img src="images\avatar\avatar-3.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="#"><strong>الهام صمدی</strong></a>
                                                </p>
                                                <p>توضیحات تست</p>
                                                <span>42 دقیقه پیش</span>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="avatar avatar-lg status-primary" href="#">
                                                <img src="images\avatar\avatar-3.png" class="bg-success-light" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <p class="fs-16">
                                                    <a class="hover-primary" href="#"><strong>الهام صمدی</strong></a>
                                                </p>
                                                <p>توضیحات تست</p>
                                                <span>42 دقیقه پیش</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">اعلانات</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover">
                                        <a class="media media-single" href="#">
                                            <span class="avatar avatar-lg bg-primary-light rounded"><i class="fa fa-user"></i></span>
                                            <div class="media-body fw-500">
                                                <p class="fs-16">توضیحات تست</p>
                                                <span class="text-fade">55 دقیقه پیش</span>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <span class="avatar avatar-lg bg-success-light rounded"><i class="fa fa-usd"></i></span>
                                            <div class="media-body fw-500">
                                                <p class="fs-16">توضیحات تست</p>
                                                <span class="text-fade">23 ساعت پیش</span>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <span class="avatar avatar-lg bg-warning-light rounded"><i class="fa fa-star"></i></span>
                                            <div class="media-body fw-500">
                                                <p class="fs-16">توضیحات تست.</p>
                                                <span class="text-fade">دیروز</span>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <span class="avatar avatar-lg bg-info-light rounded"><i class="fa fa-user"></i></span>
                                            <div class="media-body fw-500">
                                                <p class="fs-16">توضیحات تست.</p>
                                                <span class="text-fade">55 دقیقه پیش</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">اعلانات</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover">
                                        <a class="media media-single" href="#">
                                            <h4 class="w-50 text-gray fw-500">10:10</h4>
                                            <div class="media-body ps-15 bs-5 rounded border-primary">
                                                <p>توضیحات تست.</p>
                                                <span class="text-fade">توسط مختار</span>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <h4 class="w-50 text-gray fw-500">08:40</h4>
                                            <div class="media-body ps-15 bs-5 rounded border-success">
                                                <p>توضیحات تست را بررسی کنید</p>
                                                <span class="text-fade">توسط حمید</span>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <h4 class="w-50 text-gray fw-500">07:10</h4>
                                            <div class="media-body ps-15 bs-5 rounded border-info">
                                                <p>توضیحات خلاصه ای ارائه دهید.</p>
                                                <span class="text-fade">توسط نارمیلا</span>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <h4 class="w-50 text-gray fw-500">01:15</h4>
                                            <div class="media-body ps-15 bs-5 rounded border-danger">
                                                <p>توضیحات تست.</p>
                                                <span class="text-fade">توسط امید</span>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <h4 class="w-50 text-gray fw-500">23:12</h4>
                                            <div class="media-body ps-15 bs-5 rounded border-warning">
                                                <p>توضیحات تست.</p>
                                                <span class="text-fade">توسط آبتین</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">فعالیت کاربران</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover">
                                        <div class="media">
                                            <a class="align-self-center" href="#"><img class="avatar avatar-lg bg-success-light rounded" src="images\avatar\avatar-6.png" alt="..."></a>
                                            <div class="media-body fw-500">
                                                <p>
                                                    <a class="hover-success" href="#"><strong>امید</strong></a>
                                                    <span class="float-end text-fade">23 ساعت پیش</span>
                                                </p>
                                                <p class="text-fade">توضیحات تست </p>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="align-self-center" href="#"><img class="avatar avatar-lg bg-success-light rounded" src="images\avatar\avatar-1.png" alt="..."></a>
                                            <div class="media-body">
                                                <p>
                                                    <a class="hover-success" href="#"><strong>رضا</strong></a>
                                                    <span class="float-end">3 ساعت پیش</span>
                                                </p>
                                                <p class="text-fade">توضیحات تست را بررسی کنید</p>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="align-self-center" href="#"><img class="avatar avatar-lg bg-success-light rounded" src="images\avatar\avatar-13.png" alt="..."></a>
                                            <div class="media-body">
                                                <p>
                                                    <a class="hover-success" href="#"><strong>مختار</strong></a>
                                                    <span class="float-end">دیروز</span>
                                                </p>
                                                <p class="text-fade">توضیحات تست.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">کامنت های اخیر</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">
                                        <div class="media">
                                            <img class="avatar avatar-lg bg-danger-light rounded" src="images\avatar\avatar-1.png" alt="...">

                                            <div class="media-body fw-500">
                                                <p><strong>مختار مینائی</strong> <span class="float-end">33 دقیقه پیش</span></p>
                                                <p class="text-fade">توضیحات تست.</p>
                                                <div class="media-block-actions">
                                                    <nav class="nav nav-dot-separated g-0">
                                                        <div class="nav-item">
                                                            <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                                        </div>
                                                        <div class="nav-item">
                                                            <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                                                        </div>
                                                    </nav>

                                                    <nav class="nav g-0 gap-2 fs-16 media-hover-show">
                                                        <a class="nav-link text-success" href="#" data-bs-toggle="tooltip" title="تائید"><i class="ion-checkmark"></i></a>
                                                        <a class="nav-link text-danger" href="#" data-bs-toggle="tooltip" title="حذف"><i class="ion-close"></i></a>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <img class="avatar avatar-lg bg-danger-light rounded" src="images\avatar\avatar-2.png" alt="...">

                                            <div class="media-body">
                                                <p><strong>سارینا امینی</strong> <span class="float-end">11 ساعت پیش</span></p>
                                                <p class="text-fade">توضیحات تست.</p>
                                                <div class="media-block-actions">
                                                    <nav class="nav nav-dot-separated g-0">
                                                        <div class="nav-item">
                                                            <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                                        </div>
                                                        <div class="nav-item">
                                                            <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                                                        </div>
                                                    </nav>

                                                    <nav class="nav g-0 gap-2 fs-16 media-hover-show">
                                                        <a class="nav-link text-success" href="#" data-bs-toggle="tooltip" title="تائید"><i class="ion-checkmark"></i></a>
                                                        <a class="nav-link text-danger" href="#" data-bs-toggle="tooltip" title="حذف"><i class="ion-close"></i></a>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">جدیدترین پست ها</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">

                                        <a class="media media-single" href="#">
                                            <img class="w-80 rounded" src="images\avatar\avatar-2.png" alt="...">
                                            <div class="media-body fw-500">
                                                <h5>توضیحات خلاصه ای ارائه دهید.</h5>
                                                <small class="text-fade">نارمیلا</small>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <img class="w-80 rounded" src="images\avatar\avatar-1.png" alt="...">
                                            <div class="media-body fw-500">
                                                <h5>توضیحات تست را بررسی کنید</h5>
                                                <small class="text-fade">مختار</small>
                                            </div>
                                        </a>

                                        <a class="media media-single" href="#">
                                            <img class="w-80 rounded" src="images\avatar\avatar-3.png" alt="...">
                                            <div class="media-body fw-500">
                                                <h5>توضیحات تست.</h5>
                                                <small class="text-fade">سمیرا</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center bt-1 border-light p-10">
                                    <a class="text-uppercase d-block fs-12" href="#">مشاهده تمام پست ها</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">لیست کاربران</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided inner-user-div" style="height: 345px">
                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-1.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">مختار</a></h6>
                                                <small class="text-fader">سئو</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-info btn-sm" href="#">فالو شده</a>
                                            </div>
                                        </div>

                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-2.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">آزیتا</a></h6>
                                                <small class="text-fader">سئو</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-info btn-sm" href="#">فالو شده</a>
                                            </div>
                                        </div>

                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-3.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">لیلا رحمتی</a></h6>
                                                <small class="text-fader">منابع انسانی</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-success btn-sm" href="#">فالو</a>
                                            </div>
                                        </div>

                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-5.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">سیما</a></h6>
                                                <small class="text-fader">منابع انسانی</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-success btn-sm" href="#">فالو</a>
                                            </div>
                                        </div>

                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-5.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">نازنین</a></h6>
                                                <small class="text-fader">منابع انسانی</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-info btn-sm" href="#">فالو شده</a>
                                            </div>
                                        </div>

                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-6.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">Jaxon</a></h6>
                                                <small class="text-fader">PMO</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-success btn-sm" href="#">فالو</a>
                                            </div>
                                        </div>

                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-7.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">Carlos</a></h6>
                                                <small class="text-fader">ADO</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-success btn-sm" href="#">فالو</a>
                                            </div>
                                        </div>

                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-1.png" alt="...">
                                            </a>

                                            <div class="media-body">
                                                <h6><a href="#">Grayson</a></h6>
                                                <small class="text-fader">سئو</small>
                                            </div>

                                            <div class="media-right">
                                                <a class="btn btn-success btn-sm" href="#">فالو</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center bt-1 border-light p-10">
                                    <a class="text-uppercase d-block fs-12" href="#">دعوت از دوستان</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">لیست درآمد ها</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="flexbox">
                                                <div class="clearfix">
                                                    <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-1.png" alt="..."> <span class="ms-15 fs-18">مختار</span>
                                                </div>
                                                <div class="align-self-center">
                                                    <span class="badge badge-lg badge-success-light">58,900</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="flexbox">
                                                <div class="clearfix">
                                                    <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-2.png" alt="..."> <span class="ms-15 fs-18">لیلا</span>
                                                </div>
                                                <div class="align-self-center">
                                                    <span class="badge badge-lg badge-primary-light">15,900</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="flexbox">
                                                <div class="clearfix">
                                                    <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-3.png" alt="..."> <span class="ms-15 fs-18">لیلا</span>
                                                </div>
                                                <div class="align-self-center">
                                                    <span class="badge badge-lg badge-info-light">15,850</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="flexbox">
                                                <div class="clearfix">
                                                    <img class="avatar avatar-lg rounded bg-success-light" src="images\avatar\avatar-13.png" alt="..."> <span class="ms-15 fs-18">امید</span>
                                                </div>
                                                <div class="align-self-center">
                                                    <span class="badge badge-lg badge-danger-light">8,125</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

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