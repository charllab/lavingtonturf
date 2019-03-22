<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

get_header(); ?>
    <div id="r5002" class="row designRow">
        <div class="container container-fluid">
            <div class="col col-sm-12">
                <div id="r7000" class="row ">
                    <div class="container container-fixed colsStack spr-page">

                        <?php if (have_rows('slide_image')): ?>

                            <?php /* Start the Loop */ ?>

                            <div class="col col-sm-12">
                                <div class="owl-carousel owl-theme">

                                    <?php while (have_rows('slide_image')) : the_row(); ?>
                                        <div class="item"><img src="<?php echo the_sub_field('image_url'); ?>" alt=""
                                                               class="img-fluid"></div>
                                    <?php endwhile; ?>

                                </div><!-- owl-carousel -->
                            </div><!-- col -->

                        <?php endif; ?>


                        <div id="c4362" class="col col-sm-12 col-lg-8 col-md-8" data-req="">
                            <div id="m2528" class="module text">
                                <?php if (have_posts()) : ?>

                                    <?php /* Start the Loop */ ?>

                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php the_content(); ?>

                                    <?php endwhile; ?>

                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="col col-sm-12 col-lg-4 col-md-4">
                            <h2 class="custom2">See Our Testimonials</h2>
                            <a class="imageModuleWrap" id="w_m7022">
                                <img id="m7022" class="module image"
                                     src="<?php bloginfo('template_url'); ?>/images/06_help_1_grey.png"
                                     alt="Question mark"/>
                            </a>
                            <div class="module text">
                                <p class="preamble">Do you want to know what our previous customers have to say about
                                    us?</p>
                            </div>
                            <a id="m1570" class="module button" href="<?php echo esc_url(home_url('/')); ?>testimonials" title="" role="button"
                               data-track-event="click" data-track-action="internal_link_clicked"><i
                                        class="buttonIcon fa fa-caret-right"></i> Click Here</a>
                            <h2 class="custom2">Browse our Products & Services</h2>
                            <a class="imageModuleWrap" id="w_m7024"> <img id="m7024" class="module image"
                                                                          src="<?php bloginfo('template_url'); ?>/images/15_ratings_1_grey.png"
                                                                          alt="Thumbs up"/> </a>
                            <div class="module text">
                                <p class="preamble">Want to see all that we offer at Lavington Turf Farms?</p>
                            </div>
                            <a id="m4553" class="module button" href="<?php echo esc_url(home_url('/products-and-services')); ?>" title="" role="button"
                               data-track-event="click" data-track-action="internal_link_clicked"><i
                                        class="buttonIcon fa fa-caret-right"></i> Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
