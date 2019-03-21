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

                    <div class="col col-sm-12 col-lg-8 col-md-8" data-req="">

                        <div class="module text">
                            <?php if (have_posts()) : ?>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div><!-- module text -->

                    </div><!-- col -->

                    <div id="c3906" class="col col-lg-4 col-sm-12 col-md-4" data-req="">
                        <ul id="m1878" class="module verticalnav hidden-sm">
                            <li class=" active">
                                <a href="/products_and_services/benefits_of_turf"
                                   data-track-event="click" data-track-action="internal_link_clicked">Benefits
                                    of Turf</a>
                            </li>
                            <li class="">
                                <a href="/products_and_services/getting_started" data-track-event="click"
                                   data-track-action="internal_link_clicked">Getting Started</a>
                            </li>
                        </ul>
                        <div id="m4704" class="module text">
                            <p class="custom2">Is It Worth It? <br></p>
                        </div>
                        <a class="imageModuleWrap" id="w_m1290">
                            <img id="m1290" class="module image"
                                 src="<?php bloginfo('template_url'); ?>/images/06_help_1_grey.png" alt="Question Mark">
                        </a>
                        <div class="module text">
                            <p class="preamble">Listen to our satisfied customers!</p>
                        </div>
                        <a id="m4041" class="module button" href="/testimonials" title="" role="button"
                           data-track-event="click" data-track-action="internal_link_clicked">
                            <i class="buttonIcon fa fa-caret-right"></i> Find Out More
                        </a>
                    </div><!-- col -->

                </div><!-- container container-fixed colsStack -->
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- container container-fluid -->
</div><!-- row designRow -->


<?php get_footer(); ?>
