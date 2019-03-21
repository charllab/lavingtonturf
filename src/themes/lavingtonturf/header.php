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


<!--        <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/style/gallery.css">-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/user-style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/grids.css">
        <!--[if IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/grids.css"><![endif]-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/header.css">



        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?> id="p7000">

<div id="r5001" class="row designRow">
    <div class="container container-fluid">
        <div class="col col-sm-12">

            <header>
                <div id="r4305" class="row row hidden-sm" data-req="">
                    <div class="container container-fixed ">
                        <div class="col col-lg-9 col-sm-8">
                            <div class="module emailshare" id="m1258" data-req="ext-https://www.google.com/recaptcha/api.js?render=explicit,emailshare">
                                <a href="#" class="sendicon" data-overlay-trigger="click" data-overlay-open="emailshare-m1258" role="button" data-track-event="click" data-track-action="internal_link_clicked"> <span></span> </a>
                                <div data-overlay-content="emailshare-m1258" style="display: none;" role="dialog" aria-describedby="overlaySubtitle">
                                    <p class="overlayTitle">Send to a friend</p>
                                    <p class="overlaySubtitle">Send the url of this page to a friend of yours</p>
                                    <form method="post" class="shareForm" data-track-action="page_share" onsubmit="return _monoEmailShare.handleForm(this);" data-url="?dm=m1258">
                                        <div class="field w100 ">
                                            <label for="m1258_senderName"></label>
                                            <input type="text" name="senderName" id="m1258_senderName" placeholder="Your name*" data-required="true" /> </div>
                                        <div class="field w100 ">
                                            <label for="m1258_senderEmail"></label>
                                            <input type="text" data-type="email" name="senderEmail" id="m1258_senderEmail" placeholder="Your email*" data-required="true" /> </div>
                                        <div class="field w100 ">
                                            <label for="m1258_recipientEmail"></label>
                                            <input type="text" data-type="email" name="recipientEmail" id="m1258_recipientEmail" placeholder="Your friend's email*" data-required="true" /> </div>
                                        <div class="hidden" tabindex="-1">
                                            <input type="text" id="spam_protection" name="spam_protection"> </div>
                                        <div class="g-recaptcha formcaptcha-m1258" data-sitekey="6LfnbmoUAAAAAKbjzRdpMrfoVrD468m9Si4mixNk"></div>
                                        <div id="errors_m1258"> </div>
                                        <input type="hidden" name="emailshare_m1258" value="1">
                                        <input type="submit" value="Submit"> </form>
                                </div>
                            </div>
                        </div>
                        <div id="c2933" class="col col-sm-1" data-req="">
                            <div id="m1413" class="module facebooklike" data-req="fbsdk">
                                <div class="fb-like" data-href="" data-layout="button" data-action="like" data-show-faces="" data-share=""></div>
                            </div>
                        </div>
                        <div id="c4350" class="col col-sm-1">
                            <div id="m3092" class="module googleplusone" data-req="ext-https://apis.google.com/js/platform.js">
                                <div class="g-plusone" data-href="" data-size="standard" data-annotation="bubble" data-width="450" data-align=""></div>
                            </div>
                        </div>
                        <div id="c3517" class="col col-sm-1">
                            <div id="m3270" class="module twittershare" data-req="twittersdk" data-track-action="twitter_tweet"> <a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-via="" data-text="" data-size="" data-count="" data-hashtags="" data-lang="" data-track-event="click" data-track-action="link_clicked">Tweet</a> </div>
                        </div>
                    </div>
                </div>
                <!-- sharing ends -->
                <div id="r5000" class="row " data-req="">
                    <div class="container container-fixed">
                        <div id="c5000" class="col col-md-5 col-sm-12 col-lg-5">
                            <div class="nav-logo">
                                <h1 class="mb-0 text-center">
                                    <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
                                        <img src="<?php bloginfo('template_url'); ?>/images/lavington-turf-farms-logo2.png" alt="Lavington Turf Farms Ltd. logo"
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

