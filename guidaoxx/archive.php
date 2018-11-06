<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/news_cn0e36.css?1539312749">
<section class="banner_met_11_4-warrper">
    <div class="banner_met_11_4 page-bg" m-id='2' m-type="banner">
        <div class="slick-slide">
            <img class="cover-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1527745998.jpg" sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0' data-fade="false"
            data-autoplayspeed=4000 data-speed="1000">
        </div>
    </div>
</section>
<main class="news_list_page_met_21_1 met-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 met-news-body">
                <div class="row">
                    <div class="met-news-list">
                        <ul class="ulstyle met-pager-ajax imagesize" data-scale='162x162' m-id='32'>
                            <!-- 图文模式 -->


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                            <li class="media media-lg border-bottom1">
                                <div class="media-left">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target=_self>
                                        <img class="media-object" src="<?php echo catch_that_image();?>" alt="<?php the_title(); ?>"
                                        height='100'>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target=_self>
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    <div class="time">
                                        <span class="author">
                                        </span>
                                        <span class="times">
                                            <?php the_time('Y年n月j日') ?> 发表
                                        </span>
                                    </div>
                                    <p class="des font-weight-300">
                                        　<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 190,"..."); ?>
                                    </p>
                                    <p class="info font-weight-300">
                                        <span>
                                            <i class="icon wb-eye m-r-5 font-weight-300" aria-hidden="true">
                                            </i><?php post_views(); ?>
                                        </span>
                                    </p>
                                </div>
                            </li>
							<?php endwhile; ?>   
                            <?php else : ?>   
                                输出找不到文章提示   
                            <?php endif; ?> 



                        </ul>
                        <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                            <div class='met_pager'>
                                    <?php previous_posts_link(__("<span class='PreSpan'>上一页</span>")) ?>
                                
                                    <?php next_posts_link(__("<span class='NextSpan'>下一页</span>")) ?>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>