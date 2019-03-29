<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title"
              content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?php bloginfo('url'); ?>/apple-touch-icon-144x144.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="152x152"
              href="<?php bloginfo('url'); ?>/apple-touch-icon-152x152.png"/>
        <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-32x32.png" sizes="32x32"/>
        <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-16x16.png" sizes="16x16"/>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">

       <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/user-style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/grids.css">
        <!--[if IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/grids.css"><![endif]-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/header.css">

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4700177-62"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-4700177-62');
      </script>

      <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '404239980378143');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
                     src="https://www.facebook.com/tr?id=404239980378143&ev=PageView&noscript=1"
        /></noscript>
      <!-- End Facebook Pixel Code -->

      <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?> id="p7000">

<div id="r5001" class="row designRow">
    <div class="container container-fluid">
        <div class="col col-sm-12">

            <header>
                <div id="r5000" class="row " data-req="">
                    <div class="container container-fixed">
                        <div id="c5000" class="col col-md-5 col-sm-12 col-lg-5">
                            <div class="nav-logo">
                                <h1 class="mb-0 text-center">
                                    <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
                                        <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Lavington Turf Farms Ltd. logo"
                                             class="img-fluid navbar-main-logo">
                                        <span class="sr-only"><?php bloginfo('name'); ?></span>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div id="c4354" class="col col col col col-md-7 col-sm-12 col-lg-7 hidden-sm" data-req="">
                            <div id="m4655" class="module text">
                                <p class="custom1">
                                    <a data-global="phone" href="tel:250&#8209;549&#8209;2967" data-track-event="click" data-track-action="phone_link">250&#8209;549&#8209;2967</a><br>
                                    <a href="tel:1-800-453-8873" data-track-event="click" data-track-action="phone_link">1&#8209;800&#8209;453&#8209;8873</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="r1923" class="row " data-req="">
                    <div class="container container-fixed ">
                        <div id="c4695" class="col col-sm-12">
                            <nav class="navbar navbar-expand-md navbar-light py-0 p-md-0">
                                <div class="container">

                                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar"
                                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <?php wp_nav_menu([
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id' => 'navbar',
                                        'menu_class' => 'navbar-nav mt-3 mt-md-0 ml-auto',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                                    ]); ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

