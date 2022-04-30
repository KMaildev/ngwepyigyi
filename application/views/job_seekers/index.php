<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="utf-dashboard-content-inner-aera">
	<div class="row justify-content-center">
		<div class="col-xl-12 col-lg-12 col-sm-12">
			<div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
				<span>
					<?php
					if ($lang_session == 'jp') {
						echo "求職者";
					} else {
						echo "Job Seeker";
					}
					?>
				</span>
				<p>
					<?php
					if ($lang_session == 'jp') {
						echo "フォームにご記入ください。すぐにご連絡いたします。";
					} else {
						echo "Please fill up the form and we will contact you soon.";
					}
					?>
				</p>
			</div>
		</div>


		<div class="col-xl-9 col-md-9 col-sm-12">

			<div class="utf-single-page-section-aera">
				<div class="attachments-container">
					<a href="#" class="attachment-box ripple-effect"><span>Find Your Jobs</span><i>Ngwe Pyi Gyi Co.,Ltd</i></a>
					<a href="#" class="attachment-box ripple-effect"><span>Upload Your Resume</span><i>Ngwe Pyi Gyi Co.,Ltd</i></a>
					<a href="#" class="attachment-box ripple-effect"><span>Apply for Dream Job</span><i>Ngwe Pyi Gyi Co.,Ltd</i></a>
				</div>
			</div>

			<div class="dashboard-box">
				<div class="headline">
					<h3>
						<?php
						if ($lang_session == 'jp') {
							echo "あなたの仕事に応募する";
						} else {
							echo "Apply for your job";
						}
						?>
					</h3>
				</div>
				<div class="content with-padding padding-bottom-10">
					<form method="post" action="<?php echo site_url('job_seekers/save'); ?>" autocomplete="off">
						<div class="row">
							<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
								<?php $this->load->view('templates/shared/alert'); ?>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Name</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">NRC No</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="NRC No" name="nrc" value="<?php echo set_value('nrc'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Email Address</label>
									<input type="email" style="background-color: #f6f6f6;" class="form-control" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Phone Number</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Date Of Birth</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Date Of Birth" name="date_of_birth" value="<?php echo set_value('name'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Health Status</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Health Status" name="health_status" value="<?php echo set_value('health_status'); ?>">
								</div>
							</div>


							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Age</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Age" name="age" value="<?php echo set_value('age'); ?>">
								</div>
							</div>


							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Gender</label>
									<ul class="row featchoose">
										<div class="col-md-4">
											<input type="radio" name="gender" value="Male" checked> Male
										</div>
										<div class="col-md-6">
											<input type="radio" name="gender" value="Female"> Female
										</div>
									</ul>
								</div>
							</div>


							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Height</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Height" name="height" value="<?php echo set_value('height'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Weight <small><i>(lb)</i></small></label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Weight" name="weight" value="<?php echo set_value('weight'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Passport</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Passport" name="passport" value="<?php echo set_value('passport'); ?>">
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Date Of Expiry (Passport)</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Date Of Expiry (Passport)" name="expire_date" value="<?php echo set_value('expire_date'); ?>">
								</div>
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Education</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Education" name="education" value="<?php echo set_value('education'); ?>">
								</div>
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Skill</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Skill" name="skill" value="<?php echo set_value('skill'); ?>">
								</div>
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Language</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="English 4 skills, N5 Japanese" name="language" value="<?php echo set_value('language'); ?>">
								</div>
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 mb-4">
								<div class="formrow">
									<label for="nameInput" class="form-label" style="font-weight: bold; font-style: italic;">Current Address</label>
									<input type="text" style="background-color: #f6f6f6;" class="form-control" placeholder="Current Address" name="current_address" value="<?php echo set_value('current_address'); ?>">
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<button type="submit" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">
								Apply Now
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>