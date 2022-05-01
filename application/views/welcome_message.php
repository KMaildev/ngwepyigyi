<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php $this->load->view('templates/slider'); ?>

<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
                    <div class="utf-banner-headline-text-part">
                        <h3 style="color:black">Our Sending Countries: <span class="typed-words"></span></h3>
                    </div>
                </div>
            </div>

            <form method="get" action="<?php echo site_url('services/search'); ?>" autocomplete="off" class="dezPlaceAni">
                <div class="utf-intro-banner-search-form-block margin-top-40">
                    <div class="utf-intro-search-field-item">
                        <i class="icon-feather-search"></i>
                        <input id="intro-keywords" type="text" placeholder="Search Jobs Keywords..." name="keyword">
                    </div>
                    <div class="utf-intro-search-field-item">
                        <select class="selectpicker" name="country_id" required>
                            <?php
                            foreach ($country_lists as $key => $value) {
                            ?>
                                <option value="<?php echo $value->id; ?>">
                                    <?php echo $value->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="utf-intro-search-button">
                        <button class="button ripple-effect" type="submit">
                            <i class="icon-material-outline-search"></i> Search
                        </button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="row d-flex justify-content-center" style="background-color: white; padding: 20px">
                <div class="col-xl-6 col-lg-6 utf-content-right-offset-aera">
                    <div class="">
                        <h2 style="color: #50a78e; text-shadow: 2px 2px 2px black;">
                            Ngwe Pyi Gyi Co.,Ltd
                        </h2>

                        <br>
                        <h4 style="color: #50a78e; text-shadow: 3px 3px 5px white;">
                            Number One Asset
                        </h4>
                        <p style="text-align: justify; font-size: 15px;">
                            Ngwe Pyi Gyi Co.,Ltd firmly believes that people are it's most valuable
                            asset and has therefore committed itself to a people centered management
                            philosophy. Our resources for personal are from the highest caliber and
                            equipped with quality working experience. Our Management team itself is
                            also competently qualified to address any matters directly whether techni-
                            cally, commercially and/or legally. Coupled with stringent selections, good
                            training grounds and exemplary foresight Ngwe Pyi Gyi Co.,Ltd is proud to
                            declare that it has attracted and retained a talented and knowledgeable team.
                        </p>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-12">
                                <a href="<?php echo site_url('contact'); ?>" class="button save-job-btn">
                                    Read More <i class="icon-feather-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <h2 style="color: #50a78e; text-shadow: 2px 2px 2px black;">
                        Organizational Chart
                    </h2>
                    <br><br>
                    <div class="utf-sidebar-container-aera">
                        <img data-enlargeable="" src="<?php echo base_url('public/data/chart.jpg'); ?>" alt="" style="padding: 6px; box-shadow: 0px 3px 3px 3px #000000;">
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center" style="padding-top: 30px;">
                <div class="col-xl-4 col-lg-4">
                    <center>
                        <h3>
                            Oversea Lincence
                        </h3>
                    </center>
                    <div class="utf-sidebar-container-aera" style="padding-top: 10px;">
                        <img data-enlargeable="" src="<?php echo base_url('public/data/oversea_lincence.jpg'); ?>" alt="" style="padding: 6px; box-shadow: 0px 3px 3px 3px #000000;">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <center>
                        <h3>
                            Thai Licence
                        </h3>
                    </center>
                    <div class="utf-sidebar-container-aera" style="padding-top: 10px;">
                        <img data-enlargeable="" src="<?php echo base_url('public/data/thai_licence.jpg'); ?>" alt="" style="padding: 6px; box-shadow: 0px 3px 3px 3px #000000;">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <center>
                        <h3>
                            Thai Licence
                        </h3>
                    </center>
                    <div class="utf-sidebar-container-aera" style="padding-top: 10px;">
                        <img data-enlargeable="" src="<?php echo base_url('public/data/thai_icence_2.jpg'); ?>" alt="" style="padding: 6px; box-shadow: 0px 3px 3px 3px #000000;">
                    </div>
                </div>
            </div>

            <?php $this->load->view('templates/image_slide'); ?>

            <div class="section  padding-top-65">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
                                <h3>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "使い方？";
                                    } else {
                                        echo "How It Works?";
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="icon-box with-line">
                                <div class="utf-icon-box-circle">
                                    <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-user-secret"></i></div>
                                </div>
                                <h3>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "人材供給";
                                    } else {
                                        echo "Manpower Supply";
                                    }
                                    ?>
                                </h3>
                                <p>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "シンガポール、マレーシア、タイ、日本、その他の海外に半熟練労働者と熟練労働者を供給しています。";
                                    } else {
                                        echo "We are supplying semi-skilled and skilled workers to Singapore, Malaysia, Thailand, Japan and other foreign countries.";
                                    }
                                    ?>
                                </p>
                                <br><br>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="icon-box with-line">
                                <div class="utf-icon-box-circle">
                                    <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-user-plus"></i></div>
                                </div>
                                <h3>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "候補者の選択と事前スクリーニング";
                                    } else {
                                        echo "Selection and Pre-Screening of Candidates";
                                    }
                                    ?>
                                </h3>
                                <p>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "個々の雇用主の雇用前提条件に基づいて候補者を選択します。";
                                    } else {
                                        echo "We select candidates based on employment prerequisites of individual employers.";
                                    }
                                    ?>
                                </p>
                                <br><br>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="icon-box">
                                <div class="utf-icon-box-circle">
                                    <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-edit"></i></div>
                                </div>
                                <h3>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "出発前の手配";
                                    } else {
                                        echo "Pre-departure Arrangements";
                                    }
                                    ?>
                                </h3>
                                <p>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "労働者の健康診断の手配をします。また、出発前の労働者向けの航空券サービスの予約と購入も行っています。";
                                    } else {
                                        echo "We provide arrangement of medical check-up for workers. We also provide booking and purchasing to air ticket services for workers prior to departure.";
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="icon-box">
                                <div class="utf-icon-box-circle">
                                    <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-save"></i></div>
                                </div>
                                <h3>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "24時間年中無休のサポートおよびその他のサービス";
                                    } else {
                                        echo "24/7 Support and Other Services";
                                    }
                                    ?>
                                </h3>
                                <p>
                                    <?php
                                    if ($lang_session == 'jp') {
                                        echo "24時間年中無休のサポートとビジネスパートナーおよび労働者への対応。他の移民労働者サービスも提供しています。";
                                    } else {
                                        echo "24/7 support and responses to our business partners and workers. We also offer other migrant workers services.";
                                    }
                                    ?>
                                    <br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section padding-top-65 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
                    <h3>
                        <?php
                        if ($lang_session == 'jp') {
                            echo "ニュース";
                        } else {
                            echo "Latest News";
                        }
                        ?></h3>
                </div>

                <div class="utf-blog-carousel-block">
                    <?php
                    foreach ($news as $key => $value) {
                    ?>
                        <a href="<?php echo site_url('news/detail/' . $value->id) ?>" class="utf-blog-item-container-part">
                            <div class="utf-blog-compact-item">
                                <img src="<?php echo base_url(); ?>admin/<?php echo $value->photo; ?>" alt="">
                                <div class="utf-blog-compact-item-content">
                                    <h3><?php echo $value->title; ?></h3>
                                    <ul class="utf-blog-post-tags">
                                        <li>By, Admin</li>
                                        <li><?php echo $value->create_at; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>