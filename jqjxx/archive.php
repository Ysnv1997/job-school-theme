<?php
    get_header(); 
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/news.min.css" />
<div class="layout-container">
                <div class="page-header">
                    <div class="am-container">
                        <h1 class="page-header-title">校园新闻</h1>
                    </div>
                </div>

                <div class="breadcrumb-box">
                    <div class="am-container">
                        <ol class="am-breadcrumb">
                            <li>
                                <a href="index.html">首页</a>
                            </li>
                            <li class="am-active">校园新闻</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <div class="section--header">
                        <h2 class="section--title">最新消息</h2>
                        <p class="section--description">
                            学校最新资讯尽在这里，欢迎各位同学查看
                        </p>
                    </div>

                    <div class="news-contaier">
                        <div class="blog">
                            <div class="am-g">

                                

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
                                <div class="am-u-lg-4 am-u-md-6">
                                    <div class="article">
                                        <div class="article-img" style="background-image:url(<?php echo catch_that_image();?>);"></div>
                                        <div class="article-header">
                                            <h2><a href="<?php the_permalink(); ?>" rel=""><?php the_title(); ?></a></h2>
                                            <ul class="article--meta">
                                                <li class="article--meta_item -date"><?php the_time('Y年n月j日') ?></li>
                                                <li class="article--meta_item comments"><?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?> </li>
                                            </ul>
                                        </div>
                                        <div class="article--content">
                                            <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 68,"..."); ?></p>
                                        </div>
                                        <div class="article--footer">
                                            <a href="<?php the_permalink(); ?>" class="link">了解详情</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>   
                            <?php else : ?>   
                                输出找不到文章提示   
                            <?php endif; ?>  

                            </div>

                            <!-- pagination-->
                            <!-- <ul class="am-pagination">
                                <li class="am-disabled">
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="am-active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul> -->
                            <?php par_pagenavi(5); ?>
                        </div>

                    </div>
                </div>
            </div>
            <style>
                .article-header > h2 {
                    overflow:hidden;  text-overflow:ellipsis; white-space:nowrap;
                }
                .blog .article .article-header h2{
                    line-height:1;
                }
                .article-img{
                    width:100%;
                    height:194px;
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                }
                .article--content{
                    height:69px;
                }
            </style>
<?php
    get_footer(); 
?>
