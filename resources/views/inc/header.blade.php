<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title> AIP ADMIN PANEL </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.html">
<!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="{{ asset('public/frontend/css/vendor.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/all.css') }}">
<!-- Theme initialization -->

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/app.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/bootstrap/css/bootstrap.min.css') }}">
<style type="text/css">html {
  scroll-behavior: smooth;
}</style>
</head>
<body>
<div class="main-wrapper">
<div class="app" id="app">
<header class="header">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="header-block header-block-search">
        <marquee style='width: 803px; color: #000; font-size: 20px;'>Today (<?php echo date('F-d-Y'); ?>) Attendance taken classes is:- 4,3,2,9</marquee>
    </div>


    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            <li class="notifications new">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <sup>
                        <span class="counter">4</span>
                    </sup>
                </a>
                <div class="dropdown-menu notifications-dropdown-menu">
                    <ul class="notifications-container">
                        <li>
                            <a href="#" class="notification-item">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Zack Alien</span> pushed new commit:
                                        <span class="accent">Fix page load performance issue</span>. </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-item">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Amaya Hatsumi</span> started new task:
                                        <span class="accent">Dashboard UI design.</span>. </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-item">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Andy Nouman</span> deployed new version of
                                        <span class="accent">NodeJS REST Api V3</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <footer>
                        <ul>
                            <li>
                                <a href="#"> View All </a>
                            </li>
                        </ul>
                    </footer>
                </div>
            </li>
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="img" style="background-image: url('public/frontend/assets/faces/3.jpg')"> </div>
                    <span class="name"> John Doe </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user icon"></i> Profile </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-bell icon"></i> Notifications </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-cog icon"></i> Settings </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">
                        <i class="fa fa-power-off icon"></i> Logout </a>
                </div>
            </li>
        </ul>
    </div>
</header>



<!-- 01701485759 Bkash Number of Vua Son's. -->