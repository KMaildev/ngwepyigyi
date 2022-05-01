<?php
$lang_session = $this->session->userdata('lang');
?>

<section class="utf_cta_area_item utf_cta_area2_block">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="utf_subscribe_block">
					<div class="col-xl-8 col-md-7">
						<div class="section-heading">
							<h2 class="utf_sec_title_item utf_sec_title_item2">
								<?php
								if ($lang_session == 'jp') {
									echo "採用、欠員、その他について質問がある場合は、私たちのチームがすべての質問に答える準備ができています。";
								} else {
									echo "If you have any queries about recruitments, vacancies, or anything else, our team is ready to response all your queries.";
								}
								?>
							</h2>
						</div>
					</div>
					<div class="col-xl-4 col-md-5">
						<div class="contact-form-action">
							<form method="post">
								<a class="utf_theme_btn" href="<?php echo site_url('contact'); ?>">
									Contact Us
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="footer">
	<div class="utf-footer-section-item-block">
		<div class="container">
			<div class="row">

				<div class="col-xl-4 col-md-4 col-sm-6">
					<div class="utf-footer-item-links">
						<h3>
							Quick Links
						</h3>
						<ul>
							<li>
								<a href="<?php echo site_url('welcome'); ?>">
									<i class="icon-feather-chevron-right"></i>
									<?php
									if ($lang_session == 'jp') {
										echo "ホームページ";
									} else {
										echo "Home";
									}
									?>
								</a>
							</li>

							<li>
								<a href="<?php echo site_url('about'); ?>">
									<i class="icon-feather-chevron-right"></i>
									<?php
									if ($lang_session == 'jp') {
										echo "会社概要";
									} else {
										echo "Our Company";
									}
									?>
								</a>
							</li>

							<li>
								<a href="<?php echo site_url('activities'); ?>">
									<i class="icon-feather-chevron-right"></i>
									<?php
									if ($lang_session == 'jp') {
										echo "ギャラリー";
									} else {
										echo "Gallery";
									}
									?>
								</a>
							</li>

							<li>
								<a href="<?php echo site_url('news'); ?>">
									<i class="icon-feather-chevron-right"></i>
									<?php
									if ($lang_session == 'jp') {
										echo "ニュース";
									} else {
										echo "News";
									}
									?>
								</a>
							</li>

							<li>
								<a href="<?php echo site_url('contact'); ?>">
									<i class="icon-feather-chevron-right"></i>
									<?php
									if ($lang_session == 'jp') {
										echo "コンタクト";
									} else {
										echo "Contact Us";
									}
									?>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-xl-4 col-md-4 col-sm-6">
					<div class="utf-footer-item-links">
						<h3>
							<?php
							if ($lang_session == 'jp') {
								echo "海外での仕事";
							} else {
								echo "Overseas Jobs";
							}
							?>
						</h3>
						<ul>
							<?php
							foreach ($country_lists as $key => $value) {
							?>
								<li>
									<a href="<?php echo site_url('services/category/' . $value->id); ?>">
										<i class="icon-feather-chevron-right"></i>
										<?php echo $value->name; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>

				<div class="col-xl-4 col-md-4 col-sm-6">
					<div class="utf-footer-item-links">
						<h3>Facebook</h3>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer Copyrights -->
	<div class="utf-footer-copyright-item">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">Copyright &copy; <?php echo date("Y"); ?> All Rights Reserved.</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->
</div>
</div>
<!-- Wrapper / End -->
<!-- Scripts -->
<script src="<?php echo base_url(); ?>public/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/mmenu.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/tippy.all.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/simplebar.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/snackbar.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/clipboard.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/typed.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/custom_jquery.js"></script>

<script>
	if ($('.utf-intro-banner-search-form-block')[0]) {
		setTimeout(function() {
			$(".pac-container").prependTo(".utf-intro-search-field-item.with-autocomplete");
		}, 300);
	}
</script>
<script>
	var typed = new Typed('.typed-words', {
		strings: ["Japan.", " Thailand.", " Singapore.", " Malaysia."],
		typeSpeed: 80,
		backSpeed: 80,
		backDelay: 4000,
		startDelay: 1000,
		loop: true,
		showCursor: true
	});
</script>
</body>

</html>