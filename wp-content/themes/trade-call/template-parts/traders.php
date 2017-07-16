<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 10-Jan-17
 * Time: 5:53 PM
 * Template name: Traders
 */
get_header()
?>

<section id="welcome-section-area" style="padding-bottom:20px; padding-top: 20px;">
    <div class="container">
        <div class="welcome-section-area-inner">
            <div class="welcome-section-area-inner-heading text-center">
<!--                <h2>--><?php //echo get_the_title();?><!--</h2>-->
                <h2>traders <span>education</span></h2>
                <p><?php echo ot_get_option('trader_content'); ?></p>
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

            <div class="row">

                <?php
                /**
                 * Custom Slug Name Tradereducation
                 */
                global $post;
                $args = array(
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'Tradereducation',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>
                    <div class="col-sm-4">
                        <div class="content-snip yellow">
                            <div class="image">
                                <img src="<?php echo $url; ?>" alt="img">
                                <div class="icons"><i class="fa fa-search"></i></div>
                            </div>
                            <figcaption>
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </figcaption>
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>


        </div>
    </div>

</section>

<?php get_footer(); ?>
