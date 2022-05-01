<?php
$lang_session = $this->session->userdata('lang');
?>
<header id="utf-header-container-block">
	<div id="header">
		<div class="container">
			<div class="utf-left-side">
				<!-- logo -->
				<div id="logo">
					<a href="<?php echo site_url('welcome'); ?>">
						<img src="<?php echo base_url(); ?>public/data/logo.jpg" alt="">
					</a>
				</div>

				<nav id="navigation">
					<ul id="responsive">

						<li>
							<a href="<?php echo site_url('welcome'); ?>">
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
							<a href="#">
								<?php
								if ($lang_session == 'jp') {
									echo "海外での仕事";
								} else {
									echo "Overseas Jobs";
								}
								?>
							</a>
							<ul class="dropdown-nav">
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
						</li>


						<li>
							<a href="#">
								<?php
								if ($lang_session == 'jp') {
									echo "海外での仕事";
								} else {
									echo "Appliance Form";
								}
								?>
							</a>
							<ul class="dropdown-nav">
								<li>
									<a href="<?php echo site_url('job_seekers'); ?>">
										<i class="icon-feather-chevron-right"></i>
										JOB SEEKERS
									</a>
								</li>

								<li>
									<a href="<?php echo site_url('partner'); ?>">
										<i class="icon-feather-chevron-right"></i>
										EMPLOYER
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="<?php echo site_url('activities'); ?>">
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
				</nav>
				<div class="clearfix"></div>
			</div>

			<div class="utf-right-side">
				<div class="utf-header-widget-item">
					<a href="<?php echo site_url('job_seekers/cv_upload'); ?>" class="log-in-button">
						<i class="icon-feather-log-in"></i>
						<span>
							<?php
							if ($lang_session == 'jp') {
								echo "今すぐ申し込む";
							} else {
								echo "Apply Now";
							}
							?>
						</span>
					</a>
				</div>
				<span class="mmenu-trigger">
					<button class="hamburger utf-hamburger-collapse-item" type="button">
						<span class="utf-hamburger-box-item">
							<span class="utf-hamburger-inner-item"></span>
						</span>
					</button>
				</span>
			</div>

		</div>
	</div>
</header>
<div class="clearfix"></div>