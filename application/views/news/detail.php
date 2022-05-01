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
                        echo "ニュース";
                    } else {
                        echo "News";
                    }
                    ?>
                </h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li>
                            <?php echo $news_detail->title; ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Post Content -->
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-8">
            <div class="blog-post single-post">
                <div class="utf-blog-post-thumbnail">
                    <div class="utf-blog-post-thumbnail-inner">
                        <img src="<?php echo base_url(); ?>admin/<?php echo $news_detail->photo; ?>" alt="">
                    </div>
                </div>
                <div class="utf-blog-post-content">
                    <h3 class="margin-bottom-10">
                        <?php echo $news_detail->title; ?>
                    </h3>
                    <div class="blog-post-info-list margin-bottom-20">
                        <a href="#" class="blog-post-info">By, Admin</a>
                        <a href="#" class="blog-post-info">
                            <?php echo $news_detail->create_at; ?>
                        </a>
                    </div>
                    <p>
                        <?php echo $news_detail->description; ?>
                    </p>
                    <div class="utf-detail-social-sharing margin-top-25">
                        <span><strong>Social Sharing:</strong></span>
                        <ul class="margin-top-15">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/intent/tweet?url=<?php echo current_url(); ?>" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo current_url(); ?>" title="LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Content / End -->

        <div class="col-xl-4 col-lg-4">
            <div class="utf-sidebar-container-aera">

                <div class="utf-sidebar-widget-item">
                    <h3>Other</h3>
                    <ul class="utf-featured-list">
                        <?php
                        foreach ($news as $key => $value) {
                        ?>
                            <li class="utf-sidebr-pro-widget">
                                <div class="utf-blog-thumb-info">
                                    <div class="utf-blog-thumb-info-image">
                                        <img src="<?php echo base_url(); ?>admin/<?php echo $value->photo; ?>" alt="">
                                    </div>
                                    <div class="utf-blog-thumb-info-content">
                                        <h4>
                                            <a href="<?php echo site_url('news/detail/' . $value->id) ?>">
                                                <?php echo $value->title; ?>
                                            </a>
                                        </h4>
                                        <p> <?php echo $value->create_at; ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="utf-sidebar-widget-item">
                    <h3>Quick Links</h3>
                    <div class="utf-sidebar-categorie">
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
            </div>
        </div>
    </div>
</div>
<div class="padding-top-20"></div>

<?php $this->load->view('templates/footer'); ?>