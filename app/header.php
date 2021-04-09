    <head>
        <?php echo $settings['GTM']['head']; ?>

        <title><?php echo $settings['meta']['title']; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="description" content="<?php echo $settings['meta']['description']; ?>" />

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $settings['favicon_path']; ?>apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $settings['favicon_path']; ?>favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $settings['favicon_path']; ?>favicon-16x16.png">
        <link rel="manifest" href="<?php echo $settings['favicon_path']; ?>site.webmanifest">
        <link rel="mask-icon" href="<?php echo $settings['favicon_path']; ?>safari-pinned-tab.svg">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="<?php echo SITE_URL; ?>styles/styles.css<?php echo $settings['forceRefresh']; ?>" rel="stylesheet" type="text/css" />

        <!-- Open Graph protocol -->
        <!-- Facebook -->
        <meta property="og:title" content="<?php echo $settings['meta']['title']; ?>" />
        <meta property="og:description" content="<?php echo $settings['meta']['description']; ?>" />
        <meta property="og:url" content="<?php echo SITE_URL; ?>" />
        <meta property="og:site_name" content="<?php echo $settings['meta']['site_name']; ?>" />
        <meta property="og:image" content="<?php echo SITE_URL; ?><?php echo $settings['meta']['image']; ?>" />
        <!-- Twitter -->
        <meta name="twitter:description" value="<?php echo $settings['meta']['title']; ?>" />
        <meta name="twitter:url" value="<?php echo SITE_URL; ?>" />
        <meta name="twitter:via" value="" />
        <meta name="twitter:hash" value="" />
    </head>
