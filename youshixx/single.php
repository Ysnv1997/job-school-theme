    <?php get_header();?>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/shownews_cna4d5.css?1538795026">
        <div class="banner_met_16_3box     bottom20">
        <div class="banner_met_16_3 page-bg" data-height='' style='' m-id='158' m-type='banner'>
            <div class="slick-slide">
                <img class="cover-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1532437242.jpg" sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0'>
            </div>
        </div>
    </div>

<?php if( have_posts() ){ the_post();?> 

    <main class="news_list_detail_met_16_1 met-shownews animsition     left">
        <div class="container">
            <div class="row">
                <div class="col-md-12 met-shownews-body" m-id='176'>
                    <div class="row">
                        <section class="details-title border-bottom1">
                            <h1 class='m-t-10 m-b-5'><?php the_title(); ?></h1>
                            <div class="info font-weight-300">
                                <span><?php the_time('Y年n月j日') ?></span>
                                <span></span>
                                <span>
                                    <i class="icon wb-eye m-r-5" aria-hidden="true"></i>
                                </span>
                            </div>
                        </section>
                        <section class="met-editor clearfix">
                            <?php the_content(); ?> 
                        </section>
                        <div class='met-page p-y-30 border-top1'>
                        </div>
                    </div>
                </div>
<?php } ?> 

            </div>
        </div>
    </main>
    <?php get_footer();?>