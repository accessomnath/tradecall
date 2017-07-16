<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 10-Jan-17
 * Time: 5:53 PM
 * Template name: Algorithmic Trading
 */
get_header()
?>

<section id="welcome-section-area" style="padding-bottom:20px; padding-top: 20px;">
    <div class="container">
        <div class="welcome-section-area-inner">
            <div class="welcome-section-area-inner-heading text-center">
                <h2>Algorithmic <span>Trading</span></h2>
                <p><?php echo ot_get_option('algorithmic_trading_conent'); ?></p>
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
                 * Custom Slug Name Algorithmictrending
                 */
                global $post;
                $args = array(
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'algo',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <figure class="snip-sec">
                            <img src="<?php echo $url; ?>" alt="img">
                            <figcaption>
                                <h3><?php the_title(); ?></h3>
                                <h5><?php echo get_post_meta($post->ID, 'heading', true); ?></h5>
                                <blockquote>
                                    <p><?php the_excerpt() ?></p>
                                </blockquote>
                            </figcaption>
                        </figure>
                        <a href="<?php echo the_permalink(); ?>" class="snip-btn">view more</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>
