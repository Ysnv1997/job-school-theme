<?php get_header();?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/news_cna4d5.css?1538795026">
    <div class="banner_met_16_3box     bottom20">
        <div class="banner_met_16_3 page-bg" data-height='' style='' m-id='158' m-type='banner'>
            <div class="slick-slide">
                <img class="cover-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1532437242.jpg" srcset='http://glk55665574.cms2.91mb.com.cn/upload/thumb_src/x_767/1532437242.jpg 767w,http://glk55665574.cms2.91mb.com.cn/upload/201807/1532437242.jpg' sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0'>
            </div>
        </div>
    </div>

    <main class="news_list_page_met_35_1 met-news" m-id='173'>
        <div class="container met-news-body">
            <div class="row m-x-0">
                <div class="col-md-12     pright">
                    <div class="row m-x-0">
                        <!-- 这里放内容 -->
                        <div class="news-section" id="news">
                            <div class="news-section-grids">
                                <!-- 内容模块 -->
                                <ul class="tiles met-pager-ajax blocks-xs-2 blocks-md-2 blocks-lg-4 blocks-xxl-4 no-space imagesize index-product-list tab-pane active animation-scale-up" role="tabpanel" data-scale='x'>



                               <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                                    <li class="sumary_list">
                                        <div class="news-section-grid">
                                            <!-- 图片 -->
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target=_self>
                                                <div class="image-hover img-zoom-out">
                                                    <img class="overlay-scale " src="<?php echo catch_that_image();?>" alt="<?php the_title(); ?>">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <!-- 标题 -->
                                                <h3 class="titleSet"><a class="news-title" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" target=_self><?php the_title(); ?></a></h3>
                                                <!-- 时间 -->
                                                <label>
                                                    发布日期 <span><?php the_time('Y年n月j日') ?></span>
                                                </label>
                                                <!-- 内容 -->
                                                <p class="newDetail"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 30,"..."); ?></p>
                                                <a class="more btnaSet" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" target=_self>查看更多</a>

                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>   
                                <?php else : ?>   
                                    输出找不到文章提示   
                                <?php endif; ?>  
                                </ul>
                                <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                                    <div class='met_pager'><span class='PreSpan'>上一页</span><a href='index-10.html' class='Ahover'>1</a><span class='NextSpan'>下一页</span>
                                        <span class='PageText'>转至第</span>
                                        <input type='text' id='metPageT' data-pageurl='index.php?lang=cn&class1=2&page=|.html|1' value='1' />
                                        <input type='button' id='metPageB' value='页' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <style>
    .titleSet{
        overflow:hidden;  text-overflow:ellipsis; white-space:nowrap;
    }
    </style>
    <?php get_footer();?>