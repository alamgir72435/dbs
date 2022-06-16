<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3><?php echo $lang['quick_links']; ?></h3>
							<ul>
								<li><a href="<?php echo $settings['url']; ?>"><?php echo $lang['exchange']; ?></a></li>
								<li><a href="<?php echo $settings['url']; ?>testimonials"><?php echo $lang['testimonials']; ?></a></li>
								<li><a href="<?php echo $settings['url']; ?>affiliate"><?php echo $lang['affiliate']; ?></a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3><?php echo $lang['terms_and_support']; ?></h3>
							<ul>
								<li><a href="<?php echo $settings['url']; ?>faq"><?php echo $lang['faq']; ?></a></li>
								<li><a href="<?php echo $settings['url']; ?>page/terms-of-services"><?php echo $lang['terms_of_services']; ?></a></li>
								<li><a href="<?php echo $settings['url']; ?>page/privacy-policy"><?php echo $lang['privacy_policy']; ?></a></li>
								<li><a href="<?php echo $settings['url']; ?>page/about"><?php echo $lang['about']; ?></a></li>
								<li><a href="<?php echo $settings['url']; ?>contact"><?php echo $lang['contact']; ?></a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h3><?php echo $lang['follow_us_on']; ?></h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3><?php echo $lang['language']; ?></h3>
							<ul>
								<?php echo getLanguage($settings['url'],null,1); ?>
							</ul>		
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2016 by BitExchanger v2.0</p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
<?php if(!checkSession()) { ?>
	<!-- login and register modals-->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
							<h4 class="modal-title"><?php echo $lang['login_with_your_account']; ?></h4>							
						</div>
						<div class="modal-body modal-spa">
							<div id="login_results"></div>
							<div id="bit_require_login" style="display:none;"><?php echo info($lang['info_3']); ?></div>
							<form id="login_form">
							<div class="form-group">
								<label><?php echo $lang['email_address']; ?></label>
								<input type="text" class="form-control input-lg form_style_1" name="email">
							</div>
							<div class="form-group">
								<label><?php echo $lang['password']; ?></label>
								<input type="password" class="form-control input-lg form_style_1" name="password">
								<a href="<?php echo $settings['url']; ?>password/reset"><?php echo $lang['forgot_password']; ?></a>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="checkbox">
										<label>
										  <input type="checkbox" name="remember_me" value="yes"> <?php echo $lang['remember_me']; ?>
										</label>
									  </div>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-danger pull-right btn-lg" onclick="bit_login();"><?php echo $lang['btn_login']; ?></button>
								</div>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<center>
									<p><?php echo $lang['with_entry']; ?> <a href="<?php echo $settings['url']; ?>page/terms-of-services"><?php echo $lang['terms_of_service']; ?></a> <?php echo $lang['and']; ?> <a href="<?php echo $settings['url']; ?>page/privacy-policy"><?php echo $lang['privacy_policy']; ?></a></p>
								</center>
							</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="register" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
							<h4 class="modal-title"><?php echo $lang['create_account_free']; ?></h4>							
						</div>
						<div class="modal-body modal-spa">
							<div id="register_results"></div>
							<form id="register_form">
							<div class="form-group">
								<label><?php echo $lang['username']; ?></label>
								<input type="text" class="form-control input-lg form_style_1" name="username">
							</div>
							<div class="form-group">
								<label><?php echo $lang['email_address']; ?></label>
								<input type="text" class="form-control input-lg form_style_1" name="email">
							</div>
							<div class="form-group">
								<label><?php echo $lang['password']; ?></label>
								<input type="password" class="form-control input-lg form_style_1" name="password">
							</div>
							<div class="form-group">
								<label><?php echo $lang['repassword']; ?></label>
								<input type="password" class="form-control input-lg form_style_1" name="repassword">
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-danger pull-right btn-lg" onclick="bit_register();"><?php echo $lang['btn_register']; ?></button>
								</div>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<center>
								<p><?php echo $lang['with_registering']; ?> <a href="<?php echo $settings['url']; ?>page/terms-of-services"><?php echo $lang['terms_of_services']; ?></a> <?php echo $lang['and']; ?> <a href="<?php echo $settings['url']; ?>page/privacy-policy"><?php echo $lang['privacy_policy']; ?></a></p>
							</center>
						</div>
					</div>
				</div>
			</div>
			<!-- login and register modals-->
<?php } ?>
	
	<input type="hidden" id="url" value="<?php echo siteURL(); ?>">
    <!-- JS -->
    <script src="<?php echo $settings['url']; ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/smoothscroll.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/scrollup.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/price-range.js"></script> 
    <script src="<?php echo $settings['url']; ?>assets/js/jquery.countdown.js"></script>    
    <script src="<?php echo $settings['url']; ?>assets/js/custom.js"></script>
  </body>
</html>