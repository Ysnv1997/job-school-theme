<?php get_header();?>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/index_cn3ece.css?1538795022">
    <div class="banner_met_16_3box     bottom20">
        <div class="banner_met_16_3 page-bg" data-height='' style='' m-id='158' m-type='banner'>
            <div class="slick-slide">
                <img class="cover-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/png/1538704847.png" sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0'>
            </div>
            <div class="slick-slide">
                <img class="cover-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/png/1538704192.png" sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0'>
            </div>
        </div>
    </div>
    <div class="video_met_16_1 met-index-body" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/png/1532500293.png)center no-repeat;background-size:cover;" m-id='141'>
        <div class="container">
            <h2 class="invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">学校简介</h2>
            <p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">学院位于重庆市，校园环境优美，是一所现代化的学校。我们的使命是通过现阶段的教育，以及结合我们独特的专业课程，使我们的学生具备深厚的人文素养，发展他们的批判性思维和沟通能力.以及独立的判断和行事能力。</p>
            <div class="about-video">
                <div class="about-text">
                    <div class="svg-title">
                        幼师专业 </div>
                    <div class="svg-subtitle">
                        养读书之风，做治学之士，成做人之气。 </div>
                    <div class="video_url" hidden>
                        <p><video class="metvideobox" data-metvideo="||||<?php echo esc_url( get_template_directory_uri() ); ?>/png/1532234147901054.mp4" style="width:px; height:px; background:#000 url() no-repeat 50% 50%; background-size:contain;" /></video>
                        </p>
                    </div>
                    <div class="video-play"></div>
                    <a href="index-2.html" target="_blank" class="btn btn-primary btn-lg video-btn">查看详情</a>
                </div>
                <div class="video-mask">
                    <video id="index-video" poster="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1532238177.jpg" loop muted="true">
					</video>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1532238177.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="about-full-video is-end">
            <div class="video-close">
                <i class="icon pe-close"></i>
            </div>
            <div class="res-16v9">
                <video class="full-video" id="fullvideo" controls>
				</video>
            </div>
        </div>
    </div>
    <div class="countup_met_16_1 met-index-countup met-index-body     bgpic" m-id='144'>
        <div class="container text-xs-center">
            <ul class="blocks-xs-2 blocks-md-2 blocks-lg-4 blocks-xxl-4">
                <li>
                    <h5><span class="counter" id="countUp_num_0" data-numto="5000">0</span>人</h5>
                    <span>在校学生人数</span>
                    <p>2018年学院在校人数高达5000人</p>
                </li>
                <li>
                    <h5><span class="counter" id="countUp_num_1" data-numto="500">0</span>人</h5>
                    <span>任职高级教师</span>
                    <p>2018年学院在校任职教师500人</p>
                </li>
                <li>
                    <h5><span class="counter" id="countUp_num_2" data-numto="150">0</span>科</h5>
                    <span>学院开设科目</span>
                    <p>2018年学院开设150项各专业科目</p>
                </li>
                <li>
                    <h5><span class="counter" id="countUp_num_3" data-numto="20">0</span>项</h5>
                    <span>学院获得荣誉奖项</span>
                    <p>至今学院获得20项全国荣誉奖项</p>
                </li>
            </ul>
        </div>
    </div>
    <section class="news_list_met_11_6  text-xs-center swiper-slide-active" m-id="240" data-hash="" data-title="">
        <div class="container" m-id="240">
            <div class="head">
                <h3 class="title">学院热门资讯</h3>
                <span class="line">COLLEGE POPULAR INFORMATION</span>
            </div>
            <div class="news-content">
                <div class="news-swiper">
                    <ul class="news-ul ulstyle">
                            <?php query_posts('showposts=8'); ?>  
                            <?php while (have_posts()) : the_post(); ?> 
                            <li class="news-li">
                                <a href="<?php the_permalink(); ?>" class="body" title="<?php the_title(); ?>" target=_self>
                                    <div class="text">
                                        <div class="content">
                                            <p class="date">
                                                <?php the_time('Y年n月j日') ?> </p>
                                            <h3 class="title"><?php the_title(); ?></h3>
                                            <p class="description"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?></p>
                                        </div>
                                    </div>
                                    <div class="img swiper-lazy" data-background="<?php echo catch_that_image();?>">
                                    </div>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="news-more" title="<?php the_title(); ?>" target=_self>
                                    <i class="icon pe-angle-right"></i></a>
                            </li>
                            <?php endwhile;?>  
                    </ul>
                    <div class="news-ctrl">
                        <div class="left">
                            <i class="icon pe-angle-left"></i>
                        </div>
                        <div class="right">
                            <i class="icon pe-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="news_list_met_35_1 met-index-body" m-id='228'>
        <div class="news">
            <div class="container">
                <a href="index-4.html" title="专业介绍" class="more">
                    <h2 class="hdng">学院热门专业</h2>
                </a>
                <h2 class="hdng-two">SCHOOL OF POPULAR PROFESSIONAL</h2>
                <div class="news-info">
                    <ul class="blocks-lg-2 blocks-xxl-2 no-space imagesize index-product-list tab-pane active animation-scale-up 	" role="tabpanel" data-scale='186x186'>
                        <li>
                            <div class="news-grids">
                                <div class="news-grids-left">
                                    <a href="product5.html" title="工商管理专业">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1532416575.jpg" class="img-responsive" alt="工商管理专业">
                                    </a>
                                </div>
                                <div class="news-grids-right">
                                    <a href="product5.html" title="工商管理专业">
                                        <h5 class="time">工商管理专业</h5>
                                    </a>
                                    <span class="updatetime">2018-10-04</span>
                                    <a href="product5.html" title="工商管理专业">
                                        <p class="desc">市场经济中最常见的一种管理专业，一般指工商企业管理。（英文名称直译为Industry & Busin...</p>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="news-grids">
                                <div class="news-grids-left">
                                    <a href="product3.html" title="会计专业">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1532416081.jpg" class="    img-responsive" alt="会计专业">
                                    </a>
                                </div>
                                <div class="news-grids-right">
                                    <a href="product3.html" title="会计专业">
                                        <h5 class="time">会计专业</h5>
                                    </a>
                                    <span class="updatetime">2018-10-04</span>
                                    <a href="product3.html" title="会计专业">
                                        <p class="desc">新闻学专业培养的是具备系统的新闻理论知识与技能、宽广的文化与科学知识，熟悉我国新闻、宣传政策法规，能...</p>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="news-grids">
                                <div class="news-grids-left">
                                    <a href="product7.html" title="幼师专业">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/gif/metinfo.gif" class="    img-responsive" alt="幼师专业">
                                    </a>
                                </div>
                                <div class="news-grids-right">
                                    <a href="product7.html" title="幼师专业">
                                        <h5 class="time">幼师专业</h5>
                                    </a>
                                    <span class="updatetime">2018-07-25</span>
                                    <a href="product7.html" title="幼师专业">
                                        <p class="desc">能源动力学科是近年来新兴起的一门学科，它包括技术基础课程和专业课程涉及到多学科领域的知识，以热能动力...</p>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="news-grids">
                                <div class="news-grids-left">
                                    <a href="product2.html" title="电子商务专业">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1515650457.jpg" class="    img-responsive" alt="电子商务专业">
                                    </a>
                                </div>
                                <div class="news-grids-right">
                                    <a href="product2.html" title="电子商务专业">
                                        <h5 class="time">电子商务专业</h5>
                                    </a>
                                    <span class="updatetime">2018-07-25</span>
                                    <a href="product2.html" title="电子商务专业">
                                        <p class="desc">电子商务专业是融计算机科学、市场营销学、管理学、经济学、法学和现代物流于一体的新型交叉学科。该专业培...</p>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>
