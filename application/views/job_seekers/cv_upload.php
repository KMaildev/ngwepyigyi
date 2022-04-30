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
                    <form method="post" action="<?php echo site_url('job_seekers/upload_cv'); ?>" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-xl-12 col-md-12 col-sm-12 mb-4">
                                <?php $this->load->view('templates/shared/alert'); ?>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Name</label>
                                    <input type="text" style="background-color: white;" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Phone Number</label>
                                    <input type="text" style="background-color: white;" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Choose Your CV File</label>
                                    <input type="file" name="attached_file" accept=".pdf, .doc, .docx" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" id="submit" name="submit" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">
                                    Apply Now
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>