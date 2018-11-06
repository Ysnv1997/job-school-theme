    <?php include 'header.php' ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/contact.min.css" />

            <?php if( have_posts() ){ the_post();?>   

			<div class="section">
				<div class="container">
					<div class="section--header">
						<h2 class="section--title"><?php the_title(); ?></h2>
					</div>

					<div class="section-container">
						<div class="am-g">
				<?php the_content(); ?>  	
						</div>
					</div>
				</div>
            </div>
            <?php } ?>  

            <style>
                .am-g{
                    padding:35px 15px 0;
                }
                .am-g img{
                    max-width:100%;
                }
            </style>
    <?php include 'footer.php' ?>