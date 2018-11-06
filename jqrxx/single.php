<?php get_header();?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/shownews_cn.css">
<main class="news_list_detail_met_16_1 met-shownews animsition left">
    <div class="container">
        <div class="row">
            <div class="col-md-9 met-shownews-body" m-id='25'>
                <div class="row">
                    <?php if( have_posts() ){ the_post();?> 
                    <section class="details-title border-bottom1">
                        <h1 class='m-t-10 m-b-5'><?php the_title(); ?></h1>
                        <div class="info font-weight-300">
                            <span><?php the_time('Y年n月j日') ?></span>
                            <span></span>
                            <span><i class="icon wb-eye m-r-5" aria-hidden="true"></i><?php post_views(); ?></span>
                        </div>
                    </section>
                    <section class="met-editor clearfix">
                    <?php the_content(); ?> 
                    </section>
                    <?php } ?> 
                </div>
            </div>
            <div class="col-md-3 col-xs-12 sidebar_met_28_1_boxdiv">
                <div class="row">
                    <aside class="sidebar_met_28_1 met-sidebar panel panel-body m-b-0" boxmh-h m-id='52' m-type='nocontent'>
                        <form class='sidebar-search' method='get' action="http://jrb22542910.cms2.91mb.com.cn/search/search.php">
                            <input type='hidden' name='lang' value='cn' />
                            <input type='hidden' name='class1' value='3' />
                            <div class="form-group">
                                <div class="input-search">
                                    <button type="submit" class="input-search-btn">
                                        <i class="icon wb-search" aria-hidden="true"></i>
                                    </button>
                                    <input type="text" class="form-control" name="searchword" placeholder="search">
                                </div>
                            </div>
                        </form>

                        <div class="sidebar-news-list recommend">
                            <h3 class='font-size-16 m-0'>为你推荐</h3>
                            <ul class="list-group list-group-bordered m-t-10 m-b-0">
                                <?php query_posts('showposts=4'); ?>  
                                <?php while (have_posts()) : the_post(); ?> 
                                <li class="list-group-item ">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target=_self class=""><?php the_title(); ?></a>
                                </li>
                                <?php endwhile;?>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>