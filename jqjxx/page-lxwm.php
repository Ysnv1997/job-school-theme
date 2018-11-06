    <?php
/*
Template Name: 联系我们  
*/ 
        include 'header.php' ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/contact.min.css" />
			<div class="layout-container">
				<div class="page-header">
					<div class="am-container">
						<h1 class="page-header-title">联系我们</h1>
					</div>
				</div>

				<div class="breadcrumb-box">
					<div class="am-container">
						<ol class="am-breadcrumb">
							<li>
								<a href="index.html">首页</a>
							</li>
							<li class="am-active">联系我们</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="container">
					<div class="section--header">
						<h2 class="section--title">专业的学校</h2>
						<p class="section--description">
							请拨打热线电话或直接下面邮件我们，我们会尽快安排客服人员回复你的信息或来电，详细的为你解答所有问题<br/>
						</p>
					</div>

					<div class="section-container">
						<div class="am-g">
							<!--contact-left start-->
							<div class="am-u-md-5">
								<ul class="contact-left">
									<li class="contact-box-item">
										<div class="contact_item">
											<i class="contact_item--icon am-icon-phone"></i>
											<h3 class="contact_item--title">电话</h3>
											<p class="contact_item--text">
												联系电话： <strong>1888888888</strong>,
												<br> 星期一 - 星期五, 上午8：00 - 下午7：00
											</p>
										</div>
									</li>
									<li class="contact-item">
										<div class="contact_item">
											<i class="contact_item--icon am-icon-envelope-o"></i>
											<h3 class="contact_item--title">邮箱</h3>
											<p class="contact_item--text">
												8888@123.com, <br/>期待您的来信...
											</p>
										</div>
									</li>
									<li class="contact-item">
										<div class="contact_item">
											<i class="contact_item--icon am-icon-map-marker"></i>
											<h3 class="contact_item--title">地址</h3>
											<p class="contact_item--text">
												重庆市南岸区南坪协信星光时代广场斜对面
											</p>
										</div>
									</li>
								</ul>
							</div>
							<!--contact-left end-->

							<!--contact-right start-->
							<div class="am-u-md-7">
								<div class="contact-form">
									<h3 class="contact-form_title">内容</h3>
									<form class="am-form">
										<div class="am-g">
											<div class="am-u-md-6">
												<input class="" id="doc-ipt-email-1" placeholder="姓名">
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
														<option value="option1">专业咨询</option>
														<option value="option2">学费咨询</option>
														<option value="option3">学校环境咨询</option>
													</select>
													<span class="am-form-caret"></span>
												</div>
											</div>
										</div>

										<div class=am-g>
											<div class="am-u-md-12">
												<div class="am-form-group">
													<textarea class="" rows="5" id="doc-ta-1" placeholder="写下你想说的..."></textarea>
												</div>
											</div>
										</div>

										<div class="am-g">
											<div class="am-u-md-9">
												<p id="message"></p>
											</div>
											
											<div class="am-u-md-3"  id="zxbm">
												<p><button type="submit" class="am-btn am-btn-default btn-reguest am-fr btn-fl">提交</button></p>
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