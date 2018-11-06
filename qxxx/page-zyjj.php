<?php 
    /*
    Template Name: 专业设置  
    */ 
    get_header();
    ?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/product_cn.css">
<div class="product_list_page_met_21_9 met-product animsition lh-other-box met-index-body" m-id='42'>
    <div class="container lh-other-container">
        <h2 class="lh-news-h cuisine">
            <b>专业设置</b>
            <span></span>
        </h2>
        <h3 class="lh-news-h3"></h3>
        <ul class="lh-cusine-item clearfix lh-flex blocks-xs-2 blocks-md-2 blocks-lg-3 blocks-xxl-3  met-pager-ajax imagesize met-product-list met-grid" id="met-grid" data-scale='560x800'>
            <?php query_posts('cat=3'); ?>
            <?php while (have_posts()) : the_post(); ?> 
            <li data-animated="fadeInUp" class="wow animated fadeInUp animated " data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target=_self>
                    <div class="img">
                        <div style="background-image: url(<?php echo catch_that_image();?>)"></div>
                    </div>
                    <h2>
                        <p><?php the_title(); ?></p>
                        <span href="">
                            <em>MORE</em>
                            <i class="icon fa-long-arrow-right"></i>
                        </span>
                    </h2>
                    <h3><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 40,"..."); ?></h3>
                </a>
            </li>
            <?php endwhile;?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>