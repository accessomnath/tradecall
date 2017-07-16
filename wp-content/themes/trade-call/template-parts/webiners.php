<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 10-Jan-17
 * Time: 5:53 PM
 * Template name: Webiners
 */
get_header()
?>

<section id="welcome-section-area" style="padding-bottom:20px; padding-top: 20px;">
    <div class="container">
        <div class="welcome-section-area-inner webiner">
            <div class="welcome-section-area-inner-heading text-center">
<!--                <h2>--><?php //echo get_the_title();?><!--</h2>-->
                <h2>live <span>webiner</span></h2>
                <p><?php echo ot_get_option('webinar_content'); ?></p>
            </div>
            <br>
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

            <div class="row webiner-inner" style="padding-top: 15px;">
                <?php
                /**
                 * Custom Slug Name Livewebiners
                 */
                global $post;
                $args = array(
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'Livewebiners',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <?php $video = get_post_meta($post->ID, 'youtube', true); ?>
                        <?php $embed_code = wp_oembed_get($video, array('width' => 325, 'height' => 300));
                        echo $embed_code;
                        ?>
                        <div class="webinnar-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i
                                            class="glyphicon glyphicon-calendar"></i><?php echo get_the_date(); ?></span>
                                </li>

                                <li>|</li>
                                <span>Posted by : <?php echo get_post_meta($post->ID, 'postedby', true) ?></span>

                                <li>|</li>
                                <li>
                                    <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                </li>
                            </ul>
                        </div>
                    </div>

                <?php endwhile; ?>


            </div>


        </div>
    </div>

</section>


<?php get_footer(); ?>
