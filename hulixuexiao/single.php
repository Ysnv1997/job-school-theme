<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/shownews_cn0e36.css?1539312749">
<section class="banner_met_11_4-warrper">
    <div class="banner_met_11_4 page-bg" m-id='2' m-type="banner">
        <div class="slick-slide">
            <img class="cover-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1527745998.jpg" sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0' data-fade="false" data-autoplayspeed="4000" data-speed="1000">
        </div>
    </div>
</section>
<main class="news_list_detail_met_16_1 met-shownews animsition left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 met-shownews-body" m-id='23'>
                <?php if( have_posts() ){ the_post();?> 
                <div class="row">
                    <section class="details-title border-bottom1">
                        <h1 class='m-t-10 m-b-5'><?php the_title(); ?></h1>
                        <div class="info font-weight-300">
                            <span><?php the_time('Y年n月j日') ?></span>
                            <span></span>
                            <span>
                                <i class="icon wb-eye m-r-5" aria-hidden="true"></i><?php post_views(); ?>
                            </span>
                        </div>
                    </section>
                    <section class="met-editor clearfix">
                    <?php the_content(); ?> 
                    </section>
                </div>
                <?php } ?> 
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>