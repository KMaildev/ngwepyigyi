<?php
$lang_session = $this->session->userdata('lang');
?>
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<!-- Titlebar -->
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    <?php
                    if ($lang_session == 'jp') {
                        echo "新しいキャリアの機会をお探しですか？";
                    } else {
                        echo "Looking for a new career opportunity?";
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
                            Browse Jobs In <?php echo $country_title->name; ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Titlebar End -->

<!-- Search Jobs Start -->
<div class="inner_search_block_section padding-top-0 padding-bottom-40">
    <div class="container">
        <div class="col-md-12">
            <form method="get" action="<?php echo site_url('services/search'); ?>" autocomplete="off" class="dezPlaceAni">
                <div class="utf-intro-banner-search-form-block">
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
        </div>
    </div>
</div>
<!-- Search Jobs End -->

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 content-left-offset">
            <div class="utf-inner-search-section-title">
                <h4><i class="icon-material-outline-search"></i> Browse Jobs In <?php echo $country_title->name; ?></h4>
            </div>

            <div class="tasks-list-container compact-list margin-top-35">
                <?php
                foreach ($oversea_jobs as $key => $value) {
                    if ($value->country_id == $country_title->id) {
                ?>
                        <a href="<?php echo site_url('job_seekers'); ?>" class="task-listing">
                            <div class="task-listing-details">
                                <div class="task-listing-description">
                                    <h3 class="task-listing-title">
                                        <?php echo $value->name ?>
                                    </h3>
                                    <ul class="task-icons">
                                        <li>
                                            <i class="icon-material-outline-location-on"></i>
                                            <?php echo $country_title->name; ?>
                                        </li>
                                    </ul>
                                    <p class="task-listing-text">
                                        <?php echo $value->description ?>
                                    </p>

                                    <div class="task-tags">
                                        <span>Apply Now</span>
                                    </div>
                                </div>
                            </div>
                            <div class="task-listing-bid">
                                <div class="task-listing-bid-inner">
                                    <span class="button">
                                        09 767 046 764
                                    </span>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>