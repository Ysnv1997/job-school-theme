<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/news_cn.css">

<main class="news_list_page_met_11_4 met-news">
    <div class="container met-news-body">
        <div class="row">
            <div class="met-news-list">
                <ul class="ulstyle met-pager-ajax imagesize" data-scale='200x386' m-id='10'>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                    <!-- 图文模式 -->
                    <li class="media media-lg border-bottom1">
                        <div class="left col-lg-3  animation-delay-100" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target=_self>
                                <!-- <img class="img-fluid" src="<?php echo catch_that_image();?>" alt="<?php the_title(); ?>" height='100'> -->
                                <div style="background-image: url(<?php echo catch_that_image();?>)" class="img-fluid list_image"></div>
                            </a>
                        </div>
                        <div class="right col-lg-9">
                            <h4 class="  animation-delay-200" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target=_self><?php the_title(); ?></a>
                            </h4>
                            <div class="clearfix">
                                <p class="des  animation-delay-300" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                                    <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?> </p>
                                <a href="<?php the_permalink(); ?>" class="more  animation-delay-400" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                                    <span data-title="了解更多">
                                        了解更多 </span>
                                </a>
                            </div>
                            <p class="info font-weight-300 animation-delay-500 " data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                                <span><?php the_time('n-j') ?></span>
                                <span>/</span>
                                <span><?php the_time('Y') ?></span>
                            </p>
                        </div>
                    </li>
                <?php endwhile; ?>   
                <?php else : ?>   
                    暂无新闻，请稍后再来。   
                <?php endif; ?> 
                </ul>
                <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                    <div class='met_pager'>
                        <?php previous_posts_link(__("上一页")) ?>
                        <?php previous_posts_link(__("下一页")) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>