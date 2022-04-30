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
                        echo "ギャラリー";
                    } else {
                        echo "Gallery";
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
                                echo "ギャラリー";
                            } else {
                                echo "Gallery";
                            }
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
                <p>
                    <?php
                    if ($lang_session == 'jp') {
                        echo "私たちは「適切な人、適切なスキル、適切なタイミング」を提供します。";
                    } else {
                        echo "We provide “the right person, with the right skills, at the right time.”";
                    }
                    ?>
                </p>
            </div>
        </div>

        <?php
        foreach ($activities as $activitie) {
            $temp_arr = explode(',', $activitie->photo);
            $total_count = count($temp_arr);
            for ($i = 0; $i < $total_count; $i++) {
        ?>
                <div class="col-lg-3 mb-lg-0" style="margin-top: 3px;">
                    <div class="blog-post text-center">
                        <div class="blog-post-image">
                            <img class="img-fluid" src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="" style="width: 100%; height: 190px; background-size: center; object-fit: cover; border: 3px solid #eb6033;">
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>

    </div>
</div>

<?php $this->load->view('templates/footer'); ?>