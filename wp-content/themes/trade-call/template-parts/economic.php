<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 09-Feb-17
 * Time: 6:52 PM
 * Template Name: Economic
 */
get_header();
?>
    <section id="introduction-area" style="padding-bottom:20px; padding-top: 20px;">
        <div class="container">
            <div class="introduction-area-inner">
                <div class="introduction-area-inner-heading text-center">
<!--                    <h2>--><?php //echo get_the_title(); ?><!--</h2>-->
                    <h2>economic <span>calender</span></h2>
                </div>

                <div class="introduction-area-inner-details">
                    <div class="col-md-12">
                        <div class="introduction-area-inner-details-content-left content-height" style="max-height: 100%; overflow: visible";>
                            <?php if (have_posts()) : while (have_posts()) :
                                the_post(); ?>

                                <?php the_content(); ?>

                            <?php endwhile;
                            endif; ?>

                        </div>

                    </div>


                </div>

            </div>


        </div>


    </section>



<?php get_footer(); ?>