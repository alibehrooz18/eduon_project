﻿<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./includes/header.php"; ?>

    <title>داشبورد</title>

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
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-12">
                            <button class="btn btn-danger w-p100 mb-30" type="button" alt="default" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">ارسال</button>

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">یک پیام جدید ارسال کنید</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="To:">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Subject:">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="compose-textarea" class="form-control" style="height: 300px">
										  <p>پیام تان را بنویسید</p>
										</textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="btn btn-info btn-file">
                                                    <i class="fa fa-paperclip"></i> ضمیمه
                                                    <input type="file" name="attachment">
                                                </div>
                                                <p class="help-block">Max. 32MB</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i>ناقص</button>
                                                <button type="submit" class="btn btn-success"><i class="fa fa-envelope-o"></i>ارسال</button>
                                            </div>
                                            <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> لغو</button>
                                            <button type="button" class="btn btn-danger text-start" data-bs-dismiss="modal">بستن</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">پوشه ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-slide" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body no-padding mailbox-nav">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i class="ion ion-ios-email-outline"></i>صندوق دریافت
                                                <span class="label label-success pull-right">12</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-paper-airplane"></i>ارسال</a></li>
                                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-email-unread"></i>رزرو</a></li>
                                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-star"></i> شروع <span class="label label-warning pull-right">14</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-trash-a"></i>حذف</a></li>
                                    </ul>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /. box -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">برچسب ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-slide" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body no-padding mailbox-nav">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-danger"></i>مهم</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-warning"></i>تبلیغاتی</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-info"></i>اجتماعی</a></li>
                                    </ul>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <div class="contact-bx">
                                <div class="media-list media-list-hover">
                                    <div class="media py-10 px-0 align-items-center">
                                        <a class="avatar avatar-lg status-success" href="#">
                                            <img src="images\avatar\1.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p class="fs-16">
                                                <a href="#">مختار مینائی</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="media py-10 px-0 align-items-center">
                                        <a class="avatar avatar-lg status-danger" href="#">
                                            <img src="images\avatar\2.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p class="fs-16">
                                                <a href="#">رضا احمدی</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="media py-10 px-0 align-items-center">
                                        <a class="avatar avatar-lg status-warning" href="#">
                                            <img src="images\avatar\3.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p class="fs-16">
                                                <a href="#">سارا یزدانی</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="media py-10 px-0 align-items-center">
                                        <a class="avatar avatar-lg status-primary" href="#">
                                            <img src="images\avatar\4.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p class="fs-16">
                                                <a href="#">حامد رحمانی</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="media py-10 px-0 align-items-center">
                                        <a class="avatar avatar-lg status-success" href="#">
                                            <img src="images\avatar\1.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p class="fs-16">
                                                <a href="#">مختار مینائی</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="media py-10 px-0 align-items-center">
                                        <a class="avatar avatar-lg status-danger" href="#">
                                            <img src="images\avatar\2.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p class="fs-16">
                                                <a href="#">امین راستی</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-6 col-lg-8 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">صندوق دریافت</h4>
                                    <div class="box-controls pull-right">
                                        <div class="box-header-actions">
                                            <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                                                <input type="text" name="s" placeholder="جستجو...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="mailbox-controls">
                                        <!-- Check all button -->
                                        <button type="button" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-trash-a"></i></button>
                                            <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-reply"></i></button>
                                            <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-share"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion ion-flag margin-r-5"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                    <a class="dropdown-item" href="#">تکمیلی</a>
                                                    <a class="dropdown-item" href="#">سایر</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion ion-folder margin-r-5"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                    <a class="dropdown-item" href="#">تکمیلی</a>
                                                    <a class="dropdown-item" href="#">سایر</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.btn-group -->
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i></button>
                                                <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-left"></i></button>
                                            </div>
                                            <!-- /.btn-group -->
                                        </div>
                                        <!-- /.pull-right -->
                                    </div>
                                    <div class="mailbox-messages inbox-bx">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">2:45 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">2:45 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">2:45 PM</td>

                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">2:45 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">2:45 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">2:45 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>

                                                        <td class="mailbox-date">2:45 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">مختار مینائی</p>
                                                            <a class="mailbox-subject" href="#"><b>متن تست</b> - توضیحات تست...</a>
                                                        </td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">2:45 PM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table -->
                                    </div>
                                    <!-- /.mail-box-messages -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="mailbox-controls">
                                        <!-- Check all button -->
                                        <button type="button" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-trash-a"></i></button>
                                            <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-reply"></i></button>
                                            <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-share"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion ion-flag margin-r-5"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                    <a class="dropdown-item" href="#">تکمیلی</a>
                                                    <a class="dropdown-item" href="#">سایر</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion ion-folder margin-r-5"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                    <a class="dropdown-item" href="#">تکمیلی</a>
                                                    <a class="dropdown-item" href="#">سایر</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.btn-group -->
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i></button>
                                                <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-left"></i></button>
                                            </div>
                                            <!-- /.btn-group -->
                                        </div>
                                        <!-- /.pull-right -->
                                    </div>
                                </div>
                            </div>
                            <!-- /. box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-body pt-10">
                                    <div class="mailbox-read-info">
                                        <h4>عنوان پیام شما</h4>
                                    </div>
                                    <div class="mailbox-read-info clearfix mb-20">
                                        <div class="float-start me-10"><a href="#"><img src="images\1.jpg" alt="user" width="40" class="rounded-circle"></a></div>
                                        <h5 class="no-margin"> مختار مینائی<br>
                                            <small>از: jonathan@domain.com</small>
                                            <span class="mailbox-read-time pull-right">22 JUL. 2019 08:03 PM</span>
                                        </h5>
                                    </div>
                                    <!-- /.mailbox-read-info -->
                                    <div class="mailbox-controls with-border clearfix">
                                        <div class="float-start">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Print">
                                                <i class="fa fa-print"></i></button>
                                        </div>
                                        <div class="float-end">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-container="body" title="Delete">
                                                    <i class="fa fa-trash-o"></i></button>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-container="body" title="Reply">
                                                    <i class="fa fa-reply"></i></button>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-container="body" title="Forward">
                                                    <i class="fa fa-share"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.btn-group -->

                                    </div>
                                    <!-- /.mailbox-controls -->
                                    <div class="mailbox-read-message read-mail-bx">
                                        <p>کاربر عزیز</p>

                                        <p>
                                            این متن تست میباشد توضیحات کلی در این قسمت میباشد
                                        </p>

                                        <p>Thanks,<br>Jane</p>
                                    </div>
                                    <!-- /.mailbox-read-message -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <h5><i class="fa fa-paperclip m-r-10 m-b-10"></i> ضمیمه <span>(3)</span></h5>
                                    <ul class="mailbox-attachments clearfix">
                                        <li>
                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> j.pdf</a>
                                                <span class="mailbox-attachment-size">
                                                    5,215 KB
                                                    <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> g.docx</a>
                                                <span class="mailbox-attachment-size">
                                                    2,145 KB
                                                    <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.box-footer -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success"><i class="fa fa-reply"></i> پاسخ</button>
                                        <button type="button" class="btn btn-info"><i class="fa fa-share"></i> ارسال</button>
                                    </div>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-print"></i></button>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!-- /. box -->
                        </div>
                        <!-- /.col -->
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


    <?php include "./includes/footer.php"; ?>

</body>

</html>