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

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css"
              integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css"
              integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/brands.css"
              integrity="sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW"
              crossorigin="anonymous">

        <?php wp_head(); ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3847911-73"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-3847911-73');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '516021462197474');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=516021462197474&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
    </head>

<body <?php body_class(); ?>>

<?php if (!is_page_template(array('page-templates/landing-page-contractor.php', 'page-templates/landing-page-engineer.php', 'page-templates/landing-page-manager.php'))) : ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="nav-logo">
                <h1 class="mb-0">
                    <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
                        <img src="<?php bloginfo('template_url'); ?>/images/kcw-logo.svg" alt="Lavington Turf Farms logo"
                             class="img-fluid navbar-main-logo">
                        <span class="sr-only"><?php bloginfo('name'); ?></span>
                    </a>
                </h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbar',
                'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb' => '',
                'menu_id' => 'main-menu',
                'walker' => new understrap_WP_Bootstrap_Navwalker(),
            ]); ?>
        </div>
    </nav>
<?php endif; ?>
