<!DOCTYPE HTML>
<html class="">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="format-detection" content="telephone=no">

    <title><?php if (is_home()) {
          bloginfo('name');
          echo " - ";
          bloginfo('description');
        } elseif (is_category()) {
          single_cat_title();
          echo " - ";
          bloginfo('name').'';
        } elseif (is_single() || is_page()) {
          single_post_title();
          echo " - ";
          bloginfo('name');
        } elseif (is_404()) {
          echo '页面未找到!';
          echo " - ";
          bloginfo('name');
        } else {
          wp_title('', true);
          echo " - ";
          bloginfo('name');
        }?></title>
    <meta name="description" content="MetInfo 企业建站系统专注于为中小企业提供高质量的建站服务，海量模板请登录 www.metinfo.cn，本站为物联网企业响应式网站模板演示站">
    <meta name="keywords" content="物联网企业网站模板,物联网企业网页模板,响应式模板,网站制作,网站建站">
    <meta name="generator" content="" data-variable=" | | | | | | " data-user_name="">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/basic.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/index_cn.css">
    <!--[if lte IE 9]>
<script src="static/js/lteie9.js"></script>
<![endif]-->
</head>
<!--[if lte IE 8]>
<div class="text-xs-center m-b-0 bg-blue-grey-100 alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
    </button>
    你正在使用一个 <strong>过时</strong> 的浏览器。请 <a href=https://browsehappy.com/ target=_blank>升级您的浏览器</a>，以提高您的体验。</div>
<![endif]-->

<body>
    <body class="met-navfixed ny-banner ">
        <header class='met-head navbar-fixed-top' m-id='1' m-type='head_nav' met-imgmask>
            <nav class="navbar navbar-default box-shadow-none head_nav_met_16_4">
                <div class="container">
                    <div class="row">
                        <h1 hidden>重庆机器人专业招生办</h1>
                        <!-- logo -->
                        <div class="navbar-header pull-xs-left">
                            <a href="<?php bloginfo('url')?>" class="met-logo vertical-align block pull-xs-left p-y-5" title="">
                                <div class="vertical-align-middle">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540278074.png" alt="" class="logo">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540278074.png" alt="" class="logo1  hidden">
                                </div>
                            </a>
                        </div>
                        <!-- logo -->
                        <button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 head_nav_met_16_4-toggler" data-target="#head_nav_met_16_4-collapse" data-toggle="collapse">
                            <span class="sr-only"></span>
                            <span class="hamburger-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="head_nav_met_16_4-collapse">
                            <ul class="nav navbar-nav navlist">
                            <?php
                                if ( has_nav_menu( 'top' ) ) :
                                    wp_nav_menu( array(
                                    'theme_location' => 'top',
                                     'container' => false,
                                     'items_wrap' => '%3$s',
                                     'walker' => new description_walker(),
                                     'depth' => 0, ) );
                            endif;?>
                            </ul>
                        </div>
                        <!-- 导航 -->
                    </div>
                </div>
            </nav>
        </header>
        <div class="main-slider met-banner banner_met_28_1" m-id='41' m-type='banner' style=" ">
            <div class="rev_slider_wrapper">
                <div class="tp-banner rev_slider tp-overflow-hidden" eco_arrows_open="true" eco_arrows="zeus" eco_arrows_margin="20" eco_bullets_open="true" eco_bullets="hebe" eco_bullets_direction="horizontal" eco_bullets_align_hor="center" eco_bullets_align_vert="bottom"
                    eco_bullets_offset_hor="0" eco_bullets_offset_vert="20" data-alias="showcase-carousel" data-version="5.2.5.4">
                    <ul class="banner-ul">

                        <?php if(is_home()): ?>
                        <li data-transition="cube" data-slotamount="random" data-masterspeed="1000" data-thumb="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540277977.png" data-saveperformance="on" data-title="" data-speed="9000">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540277977.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-height='0|0|0' class="cover-image">
                        </li>
                        <li data-transition="cube" data-slotamount="random" data-masterspeed="1000" data-thumb="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540278927.png" data-saveperformance="on" data-title="" data-speed="9000">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540278927.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-height='0|0|0' class="cover-image">
                        </li>

                        <?php else: ?>

                        <li data-transition="cube" data-slotamount="random" data-masterspeed="300" data-thumb="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540279840.png" data-saveperformance="on" data-title="" data-speed="9000">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/picture/1540279840.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-height='0|0|0' class="cover-image">
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="tp-bannertimer" style="height: 6px; background-color: rgba(0, 0, 0, 0.14902);top:0px;"></div>
                </div>
            </div>
        </div>