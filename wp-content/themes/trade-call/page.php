<?php get_header(); ?>
    <section id="introduction-area" style="padding-bottom:20px; padding-top: 20px;">
        <div class="container">
            <div class="introduction-area-inner">
                <div class="introduction-area-inner-heading text-center">
                    <h2>About</h2>
                </div>

                <div class="introduction-area-inner-details">
                    <div class="col-sm-6">
                        <div class="introduction-area-inner-details-content-left">
                            <?php if (have_posts()) : while (have_posts()) :
                            the_post(); ?>
                            <?php the_content(); ?>

                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="introduction-area-inner-details-content-right">
                            <?php
                            global $post;
                            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                            <img src="<?php echo $url ?>"
                                 class="img-responsive" alt="">

                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>

                </div>

            </div>


        </div>


    </section>
<?php get_footer(); ?>