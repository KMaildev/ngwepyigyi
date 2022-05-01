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
                                echo "ニュース";
                            } else {
                                echo "News";
                            }
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="margin-top-0 margin-bottom-0">
                    <?php
                    foreach ($news as $key => $value) {
                    ?>
                        <a href="<?php echo site_url('news/detail/' . $value->id) ?>" class="blog-post">
                            <div class="utf-blog-post-thumbnail">
                                <div class="utf-blog-post-thumbnail-inner">
                                    <img src="<?php echo base_url(); ?>admin/<?php echo $value->photo; ?>" alt="">
                                </div>
                            </div>
                            <div class="utf-blog-post-content">
                                <h3><?php echo $value->title; ?></h3>
                                <span class="blog-post-info">By, Admin</span>
                                <span class="blog-post-date">
                                    <?php echo $value->create_at; ?>
                                </span>
                                <p>
                                    <?php
                                    echo mb_substr($value->description, 0, 300, 'UTF-8');
                                    echo "...";
                                    ?>
                                </p>
                            </div>
                            <div class="entry-icon"></div>
                        </a>
                    <?php } ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="utf-sidebar-container-aera">

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
</div>
<?php $this->load->view('templates/footer'); ?>