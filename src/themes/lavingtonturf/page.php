<?php
get_header();
?>

<section class="section">
    <div class="container">


        <?php if (is_page(array(619))) : ?>
            <div class="row justify-content-center align-items-start">

                <div class="col-xs-12">
                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <h2 class="h1"><?php echo get_the_title(); ?></h2>
                            <?php the_content(); ?>

                        <?php endwhile; ?>


                    <?php endif; ?>

                    <?php if (have_rows('project_block')): ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_rows('project_block')) : the_row(); ?>
                            <div class="row justify-content-center align-items-center projects-listing-row">
                                <div class="col-md-4">
                                    <img src="<?php echo the_sub_field('project_img'); ?>" alt="" class="img-fluid">
                                </div><!-- col-->
                                <div class="col-md-8 project-listing-content">
                                    <h2><?php echo the_sub_field('project_title'); ?></h2>
                                    <p><?php echo the_sub_field('project_description'); ?></p>
                                </div><!-- col-->
                                <div class="col-xs-12 projects-listing-divider">
                                    <hr>
                                </div>
                            </div><!-- row -->

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div><!-- col -->
            </div><!-- row -->


        <?php else : ?>
            <div class="row justify-content-between align-items-start">


                <?php if (have_posts()) : ?>

                <?php /* Start the Loop */ ?>

                <?php while (have_posts()) :
                the_post(); ?>
                <div class="col-xs-12">
                    <h2 class="h1"><?php echo get_the_title(); ?></h2>
                </div>
                <div class="col-xs-12 col-lg-7 col-xl-8 opposite-widget">
                    <?php the_content(); ?>

                    <?php endwhile; ?>

                    <?php if (is_page(array(620))) : ?>
                        <div id="serives-page-block">
                            <?php dynamic_sidebar('listing-values-widget-area'); ?>
                        </div>
                    <?php endif; ?>


                    <?php endif; ?>
                </div><!-- col -->

                <div class="col-xs-12 col-lg-5 col-xl-4 sidebarwidget-block" id="sidebarwidget-list">

                    <?php if (is_page(array(620))) : ?>
                        <div>
                            <h4>Got a project?</h4>
                            <p>Our experienced team of industry professionals can provide a better plan, execute a
                                better build,
                                and end with a successful project.</p>
                            <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-primary">Contact
                                Us
                                Today</a>
                        </div>
                    <?php else : ?>
                        <div>
                            <?php dynamic_sidebar('listing-values-widget-area'); ?>
                            <?php if (is_page(622)) : ?>
                                    <a id="tel-number-1" class="btn btn-primary d-none text-white" href="tel:17782122240">
                                        1-778-212-2240
                                    </a>
                                    <a class="btn btn-primary text-white js-show-tel" rel="tel-number-1">
                                        <i class="fas fa-phone fa-lg mr-2"></i> Call Us Now
                                    </a>

                            <?php else : ?>
                                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-primary">Contact
                                    Us
                                    Today</a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>


                </div><!-- col -->

            </div><!-- row -->

            <?php if (is_page(array(618))) : ?>
                <div class="row justify-content-center">
                    <div class="col-xs-12">

                        <div class="row ourvalues-row ourvalues-pg">
                            <div class="col-12">
                                <h2>Our Values</h2>
                                <hr>
                                <p><?php the_field('our_value_blurb') ?></p>
                            </div>
                        </div><!-- row -->

                        <div class="row justify-content-center valuesblock-row">
                            <?php dynamic_sidebar('homepage-values-widget-area'); ?>
                        </div><!-- row -->


                    </div><!-- col -->
                </div><!-- row justify-content-center -->

            <?php endif; ?>

        <?php endif; ?>


    </div><!-- container -->
</section><!-- section -->

<?php get_footer(); ?>
