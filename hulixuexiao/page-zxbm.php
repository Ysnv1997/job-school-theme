<?php 
	/*
	Template Name: 在线报名  
	*/ 
	get_header();
	?>
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/feedback_cn957e.css?1539312750">
        <section class="banner_met_11_4-warrper">
            <div class="banner_met_11_4 page-bg" m-id='2' m-type="banner">
                <div class="slick-slide">
                    <img class="cover-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/jpg/1527745998.jpg" sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0' data-fade="false" data-autoplayspeed="4000" data-speed="1000">
                </div>
                </div>
        </section>
        <section class="feedback_met_16_1 animsition" m-id='22' m-type="nocontent">
            <div class="container">
                <div class="row">
                    <div class="feedback_met_16_1-body">
                        <div m-id='22' m-type='feedback'>
                            <form method='POST' class="met-form met-form-validation" enctype="multipart/form-data" action=''>
                                <input type='hidden' name='id' value="15" />
                                <input type='hidden' name='lang' value="cn" />
                                <input type='hidden' name='fdtitle' value='网上报名' />
                                <input type='hidden' name='referer' value='indexc096.html?lang=cn&amp;anyid=37&amp;n=html&amp;c=html&amp;a=dohtml&amp;auto=1&amp;turnovertext=%E6%93%8D%E4%BD%9C%E6%88%90%E5%8A%9F&amp;turnovertype=1&amp;pageset=1' />
                                <div class='form-group'>
                                    <input name='para11' id="form-name" class='form-control' type='text' placeholder='姓名 ' data-fv-notempty="true" data-fv-message="不能为空" />
                                </div>
                                <div class='form-group'>
                                    <label class='control-label'>性别</label>
                                    <div class="radio-custom radio-primary">
                                        <input name='para12' type="radio" checked value='男' id="para12_1">
                                        <label for="para12_1">男</label>
                                    </div>
                                    <div class="radio-custom radio-primary">
                                        <input name='para12' type="radio" value='女' id="para12_2">
                                        <label for="para12_2">女</label>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <input id="form-tel" name='para13' class='form-control' type='text' placeholder='手机号码 ' data-fv-notempty="true" data-fv-message="不能为空" />
                                </div>
                                <div class='form-group'>
                                    <input id="form-mail" name='para14' class='form-control' type="email" placeholder='联系邮箱 ' data-fv-notempty="true" data-fv-message="不能为空" />
                                </div>
                                <div class='form-group'>
                                    <textarea id="form-text" name='para17' class='form-control' placeholder='请在这里留下您想询问的内容，我们将以最快的速度联系您。 ' rows='5'></textarea>
                                </div>
                                <div id="form-message" style="color:red"></div>
                                <div class="form-group m-b-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-squared" id="zxbm">保存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ajax-mail.js"></script>
	<?php get_footer();?>