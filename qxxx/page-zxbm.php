<?php 
    /*
    Template Name: 在线报名  
    */ 
    get_header();
    ?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/feedback_cn.css">
<section class="feedback_met_16_1 animsition" m-id='24' m-type="nocontent">
    <div class="container">
        <div class="row">
            <div class="feedback_met_16_1-body">
                <div m-id='24' m-type='feedback'>
                    <form method='POST' class="met-form met-form-validation" enctype="multipart/form-data" action=''>
                        <input type='hidden' name='id' value="8" />
                        <input type='hidden' name='lang' value="cn" />
                        <input type='hidden' name='fdtitle' value='申请合作' />
                        <input type='hidden' name='referer' value='' />
                        <div class='form-group'><input name='para1' class='form-control' type='text' placeholder='联系人 ' data-fv-notempty="true" data-fv-message="不能为空" /></div>
                        <div class='form-group'><input name='para2' class='form-control' type='text' placeholder='公司名称 ' data-fv-notempty="true" data-fv-message="不能为空" /></div>
                        <div class='form-group'><input name='para3' class='form-control' type='text' placeholder='职务 ' data-fv-notempty="true" data-fv-message="不能为空" /></div>
                        <div class='form-group'><input name='para4' class='form-control' type='tel' placeholder='联系电话 ' data-fv-phone='true' data-fv-phone-message='联系电话格式错误' data-fv-notempty="true" data-fv-message="不能为空" /></div>
                        <div class='form-group'><input name='para5' class='form-control' type='email' placeholder='Email ' data-fv-emailAddress='true' data-fv-emailaddress-message='Email格式错误' data-fv-notempty="true" data-fv-message="不能为空" /></div>
                        <div class='form-group'><textarea name='para6' class='form-control' data-fv-notempty="true" data-fv-message="不能为空" placeholder='合作需求 ' rows='5'></textarea></div>
                        <div class="form-group m-b-0">
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-squared">保存</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>  
<?php get_footer();?> 