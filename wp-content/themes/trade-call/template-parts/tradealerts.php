<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 10-Jan-17
 * Time: 5:53 PM
 * Template name: Trade Alerts
 */
get_header()
?>
<section id="news-section">
    <div class="container">
        <div class="news-section-inner">
            <div class="news-section-inner-heading text-center">
<!--                <h2>--><?php //echo get_the_title();?><!--</h2>-->
                <h2>trade <span>alerts</span></h2>
                <p><?php echo ot_get_option('trade_alerts_content'); ?></p>

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


            <div class="news-main-content">
                <?php
                /**
                 * Custom Slug Name Tradealert
                 */
                global $post;
                $args = array(
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'Tradealert',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>
                    <div class="well">
                        <div class="media">
                            <a class="pull-left" href="<?php the_permalink(); ?>">
                                <img class="media-object img-responsive" src="<?php echo $url; ?>"/>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php the_title() ?></h4>
                                <p><?php the_content(); ?></p>
                                <ul class="list-inline list-unstyled">
                                    <li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo get_the_date(); ?></span>
                                    </li>

                                    <li>|</li>
                                    <span>Posted by......<?php echo get_post_meta($post->ID, 'author', true) ?></span>

                                    <li>|</li>
                                    <li>
                                        <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                        <span><i class="fa fa-facebook-square"></i></span>
                                        <span><i class="fa fa-twitter-square"></i></span>
                                        <span><i class="fa fa-google-plus-square"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="pagination-section">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>


        </div>


    </div>


</section>

<?php get_footer(); ?>
