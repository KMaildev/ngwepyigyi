<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>
					<?php
					if ($lang_session == 'jp') {
						echo "コンタクト";
					} else {
						echo "Contact Us";
					}
					?>
				</h2>
				<nav id="breadcrumbs">
					<ul>
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
							<?php
							if ($lang_session == 'jp') {
								echo "コンタクト";
							} else {
								echo "Contact Us";
							}
							?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>


<section class="utf_cta_area_item utf_cta_area2_block" style="margin-bottom: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.353710748511!2d96.2353273149843!3d16.858388422282673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1931d1e511ee7%3A0xc8b56887e5c4763b!2sYanking!5e0!3m2!1sen!2smm!4v1651334135074!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>

<div class="container" style="padding: 20px;">
	<div class="row">
		<div class="col-xl-5 col-lg-5">
			<div class="utf-boxed-list-headline-item margin-bottom-35">
				<h3><i class="icon-feather-map-pin"></i> Office Address</h3>
			</div>
			<div class="utf-contact-location-info-aera margin-bottom-50">
				<div class="contact-address">
					<ul>
						<li>
							<strong>Phone: </strong>
							<a href="tel:09.767046764">
								09 767 046 764
							</a>
						</li>

						<li>
							<strong>Phone: </strong>
							<a href="tel:09.420071450">
								09 420 071 450
							</a>
						</li>

						<li>
							<strong>Phone: </strong>
							<a href="tel:09.795881064">
								09 795 881 064
							</a>
						</li>

						<li>
							<strong>Email: </strong>
							<a href="mailto:info@ngwepyigyicompany.com">
								info@ngwepyigyicompany.com
							</a>
						</li>

						<li>
							<strong>Email: </strong>
							<a href="mailto:admin@ngwepyigyicompany.com">
								admin@ngwepyigyicompany.com
							</a>
						</li>

						<li>
							<strong>Address: </strong>
							<a href="#" target="_blank">
								No.3, 2nd Floor, Tint San Street, Saya San
								North/ West Ward, Bahan T/S, Yangon.
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-6">
			<section id="contact" class="margin-bottom-50">
				<div class="utf-boxed-list-headline-item margin-bottom-35">
					<h3><i class="icon-material-outline-description"></i> CONTACT US</h3>
				</div>
				<?php $this->load->view('templates/shared/alert'); ?>
				<div class="utf-contact-form-item">
					<p>
						<?php
						if ($lang_session == 'jp') {
							echo "採用、欠員、その他について質問がある場合は、私たちのチームがすべての質問に答える準備ができています。";
						} else {
							echo "If you have any queries about recruitments, vacancies, or anything else, our team is ready to response all your queries.";
						}
						?>
					</p>
					<form method="post" action="<?php echo site_url('contact/save'); ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="utf-no-border">
									<input class="utf-with-border" name="name" type="text" id="firstname" placeholder="Name" autocomplete="off" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="utf-no-border">
									<input class="utf-with-border" name="email" type="text" id="lastname" placeholder="Email" autocomplete="off" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="utf-no-border">
									<input class="utf-with-border" name="phone" type="text" id="email" placeholder="Phone" autocomplete="off" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="utf-no-border">
									<input class="utf-with-border" name="subject" type="text" id="subject" placeholder="Subject" autocomplete="off" />
								</div>
							</div>
						</div>
						<div>
							<textarea class="utf-with-border" name="message" cols="40" rows="3" id="comments" autocomplete="off" placeholder="Message..."></textarea>
						</div>
						<div class="utf-centered-button margin-top-10">
							<input type="submit" class="submit button" id="submit" value="Send Message" />
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- Container / End -->
<?php $this->load->view('templates/footer'); ?>