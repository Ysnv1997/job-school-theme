<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/amazeui.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/common.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/index.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/font_Icon/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/chat.css" />


</head>

<body>
    <div class="layout">
        <!--===========layout-header================-->
        <div class="layout-header am-hide-sm-only">


            <div class="header-box" data-am-sticky>
                <!--header start-->
                <div class="container">
                    <div class="header">
                        <div class="am-g">
                            <div class="am-u-lg-2 am-u-sm-12">
                                <div class="logo">
                                    <a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="am-u-md-10">
                                <div class="header-right am-fr">
                                    <div class="header-contact">
                                        <div class="header_contacts--item">
                                            <div class="contact_mini">
                                                <i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
                                                <strong>18883136788</strong>
                                                <span>周一~周五, 8:00 - 20:00</span>
                                            </div>
                                        </div>
                                        <div class="header_contacts--item">
                                            <div class="contact_mini">
                                                <i style="color:#7c6aa6" class="contact-icon am-icon-envelope-o"></i>
                                                <strong>888888@123.com</strong>
                                                <span>随时欢迎您的来信！</span>
                                            </div>
                                        </div>
                                        <div class="header_contacts--item">
                                            <div class="contact_mini">
                                                <i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
                                                <strong>重庆市北部新区</strong>
                                                <span>湖彩路88号2幢24-5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="contact.html" class="contact-btn">
                                        <button type="button" class="am-btn am-btn-secondary am-radius">联系我们</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header end-->


                <!--nav start-->
                <div class="nav-contain">
                    <div class="nav-inner">
                        <ul class="am-nav am-nav-pills am-nav-justify">
                            <li>
                                <a class="active" href="<?php bloginfo('url'); ?>">首页</a>
                            </li>
                            <?php
                                if ( has_nav_menu( 'top' ) ) :
                                    wp_nav_menu( array(
                                    'theme_location' => 'top',
                                     'container' => false, 
                                    'items_wrap' => '%3$s' ) );
                            endif;?>
           </ul>
                    </div>
                </div>
                <!--nav end-->
            </div>
        </div>

        <!--mobile header start-->
        <div class="m-header">
            <div class="am-g am-show-sm-only">
                <div class="am-u-sm-2">
                    <div class="menu-bars">
                        <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
                        <!-- 侧边栏内容 -->
                        <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas>
                            <a href="javascript: void(0)" class="am-menu-toggle"></a>

                            <div class="am-offcanvas">
                                <div class="am-offcanvas-bar">
                                    <ul class="am-menu-nav am-avg-sm-1">
                                        <li>
                                            <a class="active" href="<?php bloginfo('url'); ?>">首页</a>
                                        </li>
                                        <?php
                                if ( has_nav_menu( 'top' ) ) :
                                    wp_nav_menu( array(
                                    'theme_location' => 'top',
                                     'container' => false, 
                                    'items_wrap' => '%3$s' ) );
                            endif;?>
                                    </ul>

                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
                <div class="am-u-sm-5 am-u-end">
                    <div class="m-logo">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!--mobile header end-->
        </div>