    <?php
/*
Template Name: 在线报名  
*/ 
        include 'header.php' ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/contact.min.css" />

			<div class="layout-container">
				<div class="page-header">
					<div class="am-container">
						<h1 class="page-header-title">在线报名</h1>
					</div>
				</div>

				<div class="breadcrumb-box">
					<div class="am-container">
						<ol class="am-breadcrumb">
							<li>
								<a href="index.html">首页</a>
							</li>
							<li class="am-active">在线报名</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="container">
					<div class="section--header">
						<h2 class="section--title">专业的学校</h2>
						<p class="section--description">
							请在下方填写你的报名信息，务必选好自己的专业<br/>
						</p>
					</div>

					<div class="section-container">
						<div class="am-g">
							
							<!--contact-right start-->
							<div class="am-u-md-12">
								<div class="contact-form">
									<h3 class="contact-form_title">在线报名</h3>
									<form class="am-form">
										<div class="am-g">
											<div class="am-u-md-6">
												<input type="email" class="" id="doc-ipt-email-1" placeholder="姓名" >
											</div>
											<div class="am-u-md-6">
												<input type="email" class="" id="doc-ipt-email-2" placeholder="QQ">
											</div>
										</div>

										<div class="am-g">
											<div class="am-u-md-6">
												<input type="email" class="" id="doc-ipt-email-3" placeholder="电话">
											</div>
											<div class="am-u-md-6">
												<div class="am-form-group" style="background: #fcfcfc;">
													<select id="doc-select-1" style="width: 100%;font-size: 16px;line-height: 20px;padding: 15px 20px;border-radius: 3px;color: #262626;border: 2px solid #e9e9e9;">
														<option value="option1">电子竞技运管精英</option>
														<option value="option2">互联网商务技术运维师</option>
														<option value="option3">新媒体UI创意设计师</option>
														<option value="option3">环境艺术创意设计师</option>
														<option value="option3">VR空间创意设计师</option>
														<option value="option3">云开发软件工程师</option>
													</select>
													<span class="am-form-caret"></span>
												</div>
											</div>
										</div>

										<div class="am-g">
											<p id="message"></p>
											<div class="am-u-md-6" id="zxbm">
												<p><button type="submit" class="am-btn am-btn-default btn-reguest btn-fl">立即报名</button></p>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--contact-right end-->
						</div>
					</div>
				</div>
			</div>
    <?php include 'footer.php' ?>