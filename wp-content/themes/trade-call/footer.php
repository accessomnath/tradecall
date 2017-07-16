<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!--  Footer area starts  -->
<section id="footer-area" xmlns="http://www.w3.org/1999/html">
    <footer class="footerWrapper">
        <section id="mainFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-logo-area">
                            <?php if (get_theme_mod('themeslug_logo')) : ?>
                                <a href='<?php echo esc_url(home_url('/')); ?>' class=""
                                   title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><img
                                        src='<?php echo esc_url(get_theme_mod('themeslug_logo')); ?>'
                                        class="logo img-responsive"
                                        alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
                            <?php else : ?>
                                <hgroup>
                                    <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>'
                                                              title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'
                                                              rel='home'><?php bloginfo('name'); ?></a></h1>
                                    <h2 class='site-description'><?php bloginfo('description'); ?></h2>
                                </hgroup>
                            <?php endif; ?>
                            <p> <?php echo ot_get_option('about_footer'); ?> </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footerWidget">
                            <h3>Contact Detail</h3>
                            <address>
                                <p><i class="fa fa-home"
                                      aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo ot_get_option('address') ?></br>
                                    <i class="fa fa-mobile"
                                       aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo ot_get_option('upper_phone') ?>
                                    <br>
                                    <i class="fa fa-envelope-open" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<a
                                        href="#"><?php echo ot_get_option('upper_email') ?></a>
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footerWidget">
                            <h3>social Link</h3>
                            <ul class="social-network">
                                <li><a href="<?php echo ot_get_option('facebook'); ?>" data-toggle="tooltip"
                                       data-placement="bottom" title=""
                                       data-original-title="Facebook"><i class="fa fa-facebook rounded-icon"></i></a>
                                </li>
                                <li><a href="<?php echo ot_get_option('twitter'); ?>" data-toggle="tooltip"
                                       data-placement="bottom" title=""
                                       data-original-title="Twitter"><i class="fa fa-twitter rounded-icon"></i></a></li>
                                <li><a href="<?php echo ot_get_option('google'); ?>" data-toggle="tooltip"
                                       data-placement="bottom" title=""
                                       data-original-title="Google+"><i class="fa fa-google-plus rounded-icon"></i></a>
                                </li>
                                <li><a href="<?php echo ot_get_option('linkedin'); ?>" data-toggle="tooltip"
                                       data-placement="bottom" title=""
                                       data-original-title="Linkedin"><i class="fa fa-linkedin rounded-icon"></i></a>
                                </li>
                                <li><a href="<?php echo ot_get_option('dribble'); ?>" data-toggle="tooltip"
                                       data-placement="bottom" title=""
                                       data-original-title="Dribble"><i class="fa fa-dribbble rounded-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright © 2016 <a href="#" target="blank">Projectname.com</a> / All rights reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</section>


<!--  Footer area ends  -->


<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.1.0.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootsnav.js"></script>
<script src='<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js'></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/parallax-scrolling.js"></script>
<script src="<?php bloginfo('template_url'); ?>/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/select2.min.js"></script>


<script>
    $(".testimonial-slider").owlCarousel({
        navigation: false,
        slideSpeed: 100,
        paginationSpeed: 800,
        singleItem: true,
        autoPlay: true

    });
</script>

<script>
    $("#logo-carousel").owlCarousel({
        autoPlay: true,
        items: 5,
        touchDrag: true,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        paginationSpeed: 1000,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });
</script>


<script>
    $('#newsletter-area').parallax("50%", 0.4);
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".js-example-basic-single").select2();
    });
</script>


<script>

    $(document).on('click', '.down', function (event) {

        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });


</script>


</body>

</html>
<?php wp_footer(); ?>


