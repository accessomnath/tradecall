<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 10-Jan-17
 * Time: 5:57 PM
 * Template name: Contact Us
 */
get_header() ?>

<section id="contact-us">
    <div class="container">
        <div class="contact-us-inner">
            <div class="contact-us-inner-heading text-center">
                                <h2>Contact <span>Us</span></h2>
                <?php $the_query = new WP_Query(array('pagename' => 'contact-us')) ?>

                <?php while ($the_query->have_posts()) :
                    $the_query->the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

            </div>

            <div class="col-md-6">
                <div class="contact-us-form">

                    <div class="contact-us-form-heading text-center">
                        <h4>contact message</h4>
                    </div>
                    <div>
                        <?php echo do_shortcode('[contact-form-7 id="73" title="Contact"]'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="address-map">
                    <div class="address-map-heading text-center">
                        <h4>contact details</h4>
                    </div>

                    <div class="address-details">
                        <h5>address :-</h5></br>
                        <?php echo ot_get_option('address') ?>

                        </br>
                        </br>
                        </br>
                        </br>
                    </div>

                    <div class="map-area">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9364415.2622334!2d-12.401088617324604!3d55.039112313815174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2sin!4v1483766908691"
                            width="800" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>


                </div>
            </div>


        </div>


    </div>


</section>

<?php get_footer(); ?>



