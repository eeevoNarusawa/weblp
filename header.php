<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css?2020011602">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>">
    <meta name="format-detection" content="telephone=no">
    <!-- Global site tag (gtag.js) - Google Ads: 987123369 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-987123369"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-987123369'); </script>

    <title><?php bloginfo('name'); wp_title( '|', true, 'left' ); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
