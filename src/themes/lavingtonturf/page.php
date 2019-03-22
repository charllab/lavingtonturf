<?php
get_header();
?>

<div id="r5002" class="row designRow">
    <div class="container container-fluid">
        <div class="col col-sm-12">
            <div id="r7000" class="row ">
                <div class="container container-fixed colsStack spr-page">

                    <div class="col col-md-12 col-sm-12 col-lg-12">
                        <img class="module image spr-image"
                             src="<?php bloginfo('template_url'); ?>/images/lavington_turf_farms_ltd_27288fef_9529_252d_ec20_de02e045c9ee.jpg"
                             alt="residential turf">
                    </div><!-- col -->

                    <div class="col col-sm-12 col-lg-8 col-md-8">

                        <?php if (is_page(array(815))) : ?>


                            <?php if (have_rows('testimony')): ?>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_rows('testimony')) : the_row(); ?>

                                    <img id="m7011" class="module image spr-testimonial-img"
                                         src="<?php echo the_sub_field('testimonial_image'); ?>"
                                         alt="Testimonial photo">
                                    <h2><?php echo the_sub_field('testimonial_title'); ?></h2>
                                    <div id="m1779" class="module text spr-testimonial-txt">
                                        <?php echo the_sub_field('testament'); ?>
                                        <p><strong><?php echo the_sub_field('testament_author'); ?><?php if (get_sub_field("author_contact_number")): ?>,
                                                <a href="tel:<?php echo the_sub_field('author_contact_number'); ?>"><?php echo the_sub_field('author_contact_number'); ?></a><br><?php echo the_sub_field('author_title'); ?>
                                            <?php endif; ?>
                                            </strong>
                                        </p>
                                    </div>

                                <?php endwhile; ?>

                            <?php endif; ?>

                        <?php else : ?>

                            <div class="module text">
                                <?php if (have_posts()) : ?>

                                    <?php /* Start the Loop */ ?>

                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php the_content(); ?>

                                    <?php endwhile; ?>

                                <?php endif; ?>
                            </div><!-- module text -->

                        <?php endif; ?>

                    </div><!-- col -->

                    <?php if (is_page(array(791, 794, 797))) : ?>
                        <div id="c7000" class="col col-md-4 col-lg-4 col-sm-12">
                            <ul id="m3295" class="module verticalnav hidden-sm spr-inpage-nav">
                                <?php if (is_page(array(794))) : ?>
                                    <li>
                                        <a href="<?php bloginfo('url'); ?>/benefits-of-turf" class="active">Benefits of
                                            Turf</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="<?php bloginfo('url'); ?>/benefits-of-turf">Benefits of Turf</a>
                                    </li>
                                <?php endif; ?>
                                <?php if (is_page(array(797))) : ?>
                                    <li>
                                        <a href="<?php bloginfo('url'); ?>/getting-started" class="active">Getting
                                            Started</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="<?php bloginfo('url'); ?>/getting-started">Getting Started</a>
                                    </li>
                                <?php endif; ?>
                            </ul>

                            <h2 class="custom2">Find Out More</h2>
                            <a class="imageModuleWrap" id="w_m7001">
                                <img id="m7001" class="module image inline-icon"
                                     src="<?php bloginfo('template_url'); ?>/images/04_contactus_1_grey.png "
                                     alt="Telephone "> </a>
                            <div class="module text ">
                                <p class="preamble">Questions about our services?</p>
                                <p class="preamble">We've got answers!</p>
                            </div>
                            <a id="m1840" class="module button spr-btn-mb" href="<?php bloginfo('url'); ?>/contact"
                               title=" "
                               role="button "
                               data-track-event="click" data-track-action="internal_link_clicked ">
                                <i class="buttonIcon fa fa-caret-right "></i> Call Us
                            </a>
                            <h2 class="custom2">Maintenance Information</h2>
                            <a class="imageModuleWrap" id="w_m7003 ">
                                <img id="m7003" class="module image inline-icon"
                                     src="<?php bloginfo('template_url'); ?>/images/06_help_1_grey.png "
                                     alt="Question Mark ">
                            </a>
                            <div class="module text ">
                                <p class="preamble ">How can I protect my investment?</p>
                            </div>
                            <a id="m4425" class="module button spr-btn-mb" href="<?php bloginfo('url'); ?>/testimonials"
                               title=" "
                               role="button "
                            <i class="buttonIcon fa fa-caret-right "></i> Click Here
                            </a>
                        </div>

                    <?php elseif (is_page(array(744, 813))): ?>

                        <div id="c1826" class="col col-lg-4 col-md-4 col-sm-12" data-req="">
                            <div id="m4098" class="module text">
                                <h2 class="custom">Need More Information?</h2>
                            </div>
                            <a class="imageModuleWrap" id="w_m1865">
                                <img id="m1865" class="module image inline-icon"
                                     src="<?php bloginfo('template_url'); ?>/images/04_contactus_2_grey.png"
                                     alt="Computer mouse">
                            </a>
                            <div class="module text">
                                <p class="preamble">We've got the products and services that will meet your lawn care
                                    needs!</p>
                            </div>
                            <a id="m4531" class="module button spr-btn-mb"
                               href="<?php bloginfo('url'); ?>/products-and-services"
                               title="" role="button">
                                <i class="buttonIcon fa fa-caret-right"></i> See More</a></div>

                    <?php elseif (is_page(array(815))): ?>

                        <div class="col col-md-4 col-lg-4 col-sm-12">
                            <div class="hidden-sm">
                                <h2 class="custom2">Contact Us</h2>
                                <img id="m7001" class="module image inline-icon"
                                     src="<?php bloginfo('template_url'); ?>/images/15_ratings_1_grey.png"
                                     alt="Thumbs Up">
                                <div class="module text">
                                    <p class="preamble">Join our happy customers!</p>
                                </div>
                                <a id="m4073" class="module button spr-btn-mb" href="/contact_us" title="" role="button"
                                ><i class="buttonIcon fa fa-caret-right"></i> Call Today
                                </a>
                            </div><!-- hidden-sm -->


                            <?php if (have_rows('testimony_sidebar')): ?>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_rows('testimony_sidebar')) : the_row(); ?>

                                    <div class="spr-testimonial-txt-aside">
                                        <img id="m7003" class="module image spr-testimonial-img"
                                             src="<?php echo the_sub_field('testimonial_image'); ?>"
                                             alt="Testimonial photo">
                                        <h2 class="custom2"><?php echo the_sub_field('testimonial_title'); ?></h2>
                                        <?php echo the_sub_field('testament'); ?>
                                        <p>
                                            <strong><?php echo the_sub_field('testament_author'); ?><?php if (get_sub_field("author_contact_number_aside")): ?>,
                                                <a href="tel:<?php echo the_sub_field('author_contact_number_aside'); ?>"><?php echo the_sub_field('author_contact_number_aside'); ?></a><br><?php echo the_sub_field('author_title'); ?>
                                            <?php endif; ?>
                                            </strong>
                                        </p>
                                    </div><!-- spr-testimonial-txt-aside -->

                                <?php endwhile; ?>

                            <?php endif; ?>


                            <div id="m2201" class="module text hidden-lg hidden-md">
                                <h2 class="custom2">Contact Us</h2>
                                <a class="imageModuleWrap" id="w_m7001">
                                    <img id="m7001" class="module image inline-icon"
                                         src="<?php bloginfo('template_url'); ?>/images/15_ratings_1_grey.png"
                                         alt="Thumbs Up"> </a>
                                <div class="module text">
                                    <p class="preamble">Join our happy customers!</p>
                                </div>
                                <a id="m4073" class="module button spr-btn-mb" href="/contact_us" title="" role="button"
                                ><i class="buttonIcon fa fa-caret-right"></i> Call Today
                                </a>
                            </div><!-- hidden- md & lg -->
                        </div><!--col -->


                    <?php else : ?>

                    <div class="col col-md-4 col-lg-4 col-sm-12">
                        <h2 class="custom2">Come and See Us</h2>
                        <div id="m1727" class="module text">
                            <div class="module text a-tdn">
                                <p><strong>Address</strong><br>
                                    5770 Petworth Rd, Vernon, BC V1B&nbsp;3E4</p>
                                <p><strong>Phone</strong><br>
                                    Main: <a href="tel:250‑549‑2967">250‑549‑2967</a><br>
                                    Toll Free: <a href="tel:1-800-453-8873">1‑800‑453‑8873</a>
                                </p>
                                <p><strong>Email</strong><br>
                                    <a itemprop="email" class="casu-email" name="email"
                                       href="mailto:lavingtonturffarms@shaw.ca">lavingtonturffarms@shaw.ca</a>
                                </p>
                            </div>
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.9245678175985!2d-119.08774538368503!3d50.23731411057953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537dd0c193bb372d%3A0x3067775b2eb8630b!2s5770+Petworth+Rd%2C+Coldstream%2C+BC!5e0!3m2!1sen!2sca!4v1553267440980"
                                        width="289" height="200" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                            </div><!-- map-responsive -->
                        </div>

                        <?php endif; ?>

                        <?php if (is_page(array(791, 794, 797))) : ?>
                            <script>
                                jQuery(function () {
                                    jQuery('.dropdown > a').addClass('spr-active-tab');
                                });
                            </script>
                        <?php endif; ?>


                    </div><!-- container container-fixed colsStack -->
                </div><!-- row -->
            </div><!-- col -->
        </div><!-- container container-fluid -->
    </div><!-- row designRow -->


    <?php get_footer(); ?>
