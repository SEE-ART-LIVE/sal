<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?>
    <!DOCTYPE html>
    <html <?php print $html_attributes . $rdf_namespaces; ?>>

    <head>
        <meta charset=utf-8>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <?php print $head; ?>
        <title>
            <?php print $head_title; ?>
        </title>
        <?php if ($default_mobile_metatags): ?>
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width">
        <?php endif; ?>
        <?php print $styles; ?>
        <?php print $scripts; ?>
        <?php if ($add_html5_shim): ?>
        <!--[if lt IE 9]>
    <script src="/d7/sites/all/themes/see_art_live/dist/js/html5shiv.min.js"></script>
    <![endif]-->
        <?php endif; ?>
        <link as="style" href="/d7/sites/all/themes/see_art_live/dist/css/main.e37dcbf5.css" rel="preload">
        <link as="style" href="/d7/sites/all/themes/see_art_live/dist/css/vendors~main.0.90b76d74.css" rel="preload">
        <link as="script" href="/d7/sites/all/themes/see_art_live/dist/js/main.e903507f.js" rel="preload">
        <link as="script" href="/d7/sites/all/themes/see_art_live/dist/js/vendors~main.2c0cee93.js" rel="preload">
        <link href="/d7/sites/all/themes/see_art_live/dist/css/vendors~main.0.90b76d74.css" rel="stylesheet">
        <link href="/d7/sites/all/themes/see_art_live/dist/css/main.e37dcbf5.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="/d7/sites/all/themes/see_art_live/dist/img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/d7/sites/all/themes/see_art_live/dist/img/icons/favicon-16x16.png">
        <link rel="manifest" href="/d7/sites/all/themes/see_art_live/dist/manifest.json">
        <meta name="theme-color" content="#4DBA87">
        <meta name="apple-mobile-web-app-capable" content="no">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-title" content="seeartlive">
        <link rel="apple-touch-icon" href="/d7/sites/all/themes/see_art_live/dist/img/icons/apple-touch-icon-152x152.png">
        <link rel="mask-icon" href="/d7/sites/all/themes/see_art_live/dist/img/icons/safari-pinned-tab.svg" color="#4DBA87">
        <meta name="msapplication-TileImage" content="/d7/sites/all/themes/see_art_live/dist/img/icons/msapplication-icon-144x144.png">
        <meta name="msapplication-TileColor" content="#000000">
    </head>

    <body class="<?php print $classes; ?>" <?php print $attributes;?>>
        <noscript><strong>We're sorry but seeartlive doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
        <div id=app></div>
        <script type="text/javascript" src="/d7/sites/all/themes/see_art_live/dist/js/vendors~main.2c0cee93.js"></script>
        <script type="text/javascript" src="/dist/js/main.e903507f.js"></script>
    </body>

    </html>