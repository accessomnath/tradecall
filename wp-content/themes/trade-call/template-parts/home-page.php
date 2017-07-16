<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 10-Jan-17
 * Time: 5:48 PM
 * Template name: home
 */
get_header();
?>

    <!--  Menu area ends  -->

    <!--  Slider area Starts  -->

    <section class="jk-slider">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <?php
                /**
                 * Custom Slug Name slider
                 */
                global $post;
                $args = array(
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'slider',
                    'post_status' => 'publish'
                );
                $i = 0;
                $class = "";
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $i++;
                    if ($i == 1) {
                        $class = 'active';
                    } else {
                        $class = '';
                    }
                    ?>
                    <div class="item <?php echo $class ?>">
                        <a href="#"><img src="<?php echo $url; ?>"/></a>

                    </div>
                <?php endwhile; ?>
            </div>

            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

        <div class="scroll-down-bottom wow bounce animated infinite" data-wow-duration="3s" data-wow-delay="2s">
            <a class="down" href="#welcome-section-area"><i class="fa fa-angle-double-down"></i></a>
        </div>
    </section>
    <iframe height="50" scrolling="no" src="http://www.dailyforex.com/forex-widget/widget/18091"
            style="width: 100%; height:50px; display: block;border:0px;overflow:hidden;" width="404"></iframe><span
    style="position:relative;display:block;text-align:center;color:#ffffff;width:404px;font-family:arial,sans-serif;font-size:10px;"></span>

    <!--  Slider area Ends  -->
    <section id="introduction-area">
        <div class="container">
            <div class="introduction-area-inner">
                <div class="introduction-area-inner-details">
                    <div class="col-md-8">
<!--                        <iframe   src="https://feed.mikle.com/widget/v2/10839/"></iframe>-->
                        <iframe height="400" style="width: 100%; height:510px;" src="https://feed.mikle.com/widget/v2/10839/" ></iframe>
<!--                        <script type="text/javascript"-->
<!--                                src="http://www.cnbc.com/id/10000664/device/rss/rss.html"></script>-->
                    </div>
                    <div class="col-md-4">
                        <iframe height="400" scrolling="no" src="http://www.dailyforex.com/forex-widget/widget/18106" style="width: 300px; height:400px; display: block;border:0px;overflow:hidden;" width="300"></iframe><span style="position:relative;display:block;text-align:center;color:#000000;width:300px;font-family:verdana,sans-serif;font-size:10px;">Pip Calculator widget is provided by <a style="color:#000000;" href="http://www.dailyforex.com" rel="nofollow" style="font-size: 10px;" target="_blank">DailyForex.com</a> - Forex Reviews and News</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  welcome-section area starts  -->

    <section id="welcome-section-area" style="padding-bottom:20px; padding-top: 20px;">
        <div class="container">
            <div class="welcome-section-area-inner">
                <div class="welcome-section-area-inner-heading text-center">
                    <h2>Why <span>trade call</span></h2>
                    <?php $the_query = new WP_Query(array('pagename' => 'home')) ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                </div>
                <section id="search-palen-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <a class="castom-button" href="<?php echo site_url(); ?>/register">Register for free</i></a>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                </section>

                <div class="welcome-section-area-inner-details">
                    <div class="col-md-3 col-sm-3">
                        <div class="welcome-section-area-inner-details-content">
                            <!--                            --><?php //$image = ot_get_option('webinar_image') ?>
                            <img src="<?php echo ot_get_option('webinar_image'); ?>"
                                 class="img-responsive"
                                 alt="">
                            <h2>Live Webinars</h2>
                            <div class="main55">
                                <?php echo ot_get_option('webinar_content'); ?>

                                <a href="<?php echo esc_url(home_url('/')); ?>live-webiners">read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="welcome-section-area-inner-details-content">

                            <img src="<?php echo ot_get_option('trader_image'); ?>"
                                 class="img-responsive"
                                 alt="">
                            <h2>Traders Education</h2>
                            <div class="main55">
                                <?php echo ot_get_option('trader_content'); ?>

                                <a href="<?php echo esc_url(home_url('/')); ?>traders-education">read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="welcome-section-area-inner-details-content">
                            <img src="<?php echo ot_get_option('algorithmic_image'); ?>"
                                 class="img-responsive"
                                 alt="">
                            <h2>Algorithmic Trading</h2>
                            <div class="main55">
                                <?php echo ot_get_option('algorithmic_trading_conent'); ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>algorithmic-trading">read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="welcome-section-area-inner-details-content">
                            <img src="<?php echo ot_get_option('trade_alert_image'); ?>"
                                 class="img-responsive"
                                 alt="">
                            <h2>Trade Alerts</h2>
                            <div class="main55">
                                <?php echo ot_get_option('trade_alerts_content'); ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>trade-alerts">read more</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>


    <!--  welcome-section area ends  -->


    <!--  introduction-section area starts  -->

    <section id="introduction-area" style="padding-top:50px; padding-bottom: 23px;">
        <div class="container">
            <div class="introduction-area-inner">
                <div class="introduction-area-inner-heading text-center">
                    <h2><span>introduction</span></h2>
                </div>

                <div class="introduction-area-inner-details">
                    <div class="col-sm-6">
                        <div class="introduction-area-inner-details-content-left">
                            <?php $the_query = new WP_Query(array('pagename' => 'about-us')) ?>

                            <?php while ($the_query->have_posts()) :
                            $the_query->the_post(); ?>

                            <?php the_content(); ?>

                            <a href="<?php echo esc_url(home_url('/')); ?>about-us">read more</a>
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="introduction-area-inner-details-content-right">
                            <?php
                            global $post;
                            $url = get_post_meta($post->ID, 'video', true);
                            $embed = wp_oembed_get($url, array('width' => 550, 'height' => 305));
                            echo $embed;
                            ?>

                            <!--                            <iframe width="506" height="305" src="-->
                            <?php //echo get_post_meta($post->ID, 'video', true);
                            ?><!--" frameborder="0" allowfullscreen></iframe>-->
                        </div>
                    </div>
                    <?php endwhile; ?>

                </div>

            </div>


        </div>


    </section>


    <!--  introduction-section area ends  -->

    <!-- testimonial  area starts -->

    <section id="testimonial-area" style="padding-top: 34px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-area-heading text-center">
                        <h2>testimonial <span>area</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-slider">
                        <?php
                        /**
                         * Custom Slug Name Testimonial
                         */
                        global $post;
                        $args = array(
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_type' => 'Testimonial',
                            'post_status' => 'publish'
                        );
                        $the_query = new WP_Query($args);
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            ?>
                            <div class="item">
                                <blockquote><q><?php the_content(); ?></q></blockquote>
                                <div class="testimonial-writer">
                                    <div class="testimonial-writer-img"><img
                                            src="<?php echo $url ?>"
                                            class="img-responsive img-circle"
                                            alt="image-description"></div>
                                    <div class="writer-description">
                                        <p><?php the_title(); ?></p>
                                        <p><?php echo get_post_meta($post->ID, 'designation', true) ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- testimonial area ends -->

    <!----serach-panel----->
    <section id="search-palen-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="search-text">
                        <h5>Register Now!</h5>
                        <h3><?php echo ot_get_option('register'); ?></h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a class="castom-button" href="<?php echo site_url(); ?>/register">Register for free</i></a>
                </div>
            </div>
        </div>
    </section>


    <!----serach-panel----->


<?php get_footer(); ?>