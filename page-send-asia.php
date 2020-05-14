<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css?2020011602">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>">
    <meta name=”robots” content=”noindex” />
    <meta http-equiv="refresh" content="5; url=<?php echo home_url(); ?>/asia">
    <!-- Global site tag (gtag.js) - Google Ads: 987123369 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-987123369"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-987123369'); </script>
    <!-- Event snippet for eeevoコーポレートお問い合わせ conversion page -->
    <script> gtag('event', 'conversion', {'send_to': 'AW-987123369/NRmQCMSWtLsBEKmd2dYD'}); </script>

    <title><?php bloginfo('name'); wp_title( '|', true, 'left' ); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="wrapper">
      <main>
        <header id="top"><h1><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eeevo.jpg" alt="eeevo malaysia"></h1></header>
        <div class="send__main">
          <div class="send__main--ttl">メッセージは送信されました</div>
          <div class="send__main--comment">
            <p>お問い合わせいただきありがとうございました。</p>
            <p>のちほど日本人担当者よりご連絡を差し上げます。</p>
            <p class="send__main--ex">5秒後にTOPページへ戻ります。</p>
          </div>
        </div>
      </main>
    <footer>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/eeevo_logo.png" alt="eeevo malaysia">
      <p class="copyright">Copyright © eeevo group. All Rights Reserved.</p>
    </footer>
    <a href="#top"><div class="totop">▲<br>TOP</div></a>

    <div class="menu-trigger" href="">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>/asia#characteristic">eeevoの特徴</a></li>
        <li><a href="<?php echo home_url(); ?>/asia#ourWorks">our works</a></li>
        <li><a href="<?php echo home_url(); ?>/asia#reason">選ばれる理由</a></li>
        <li><a href="<?php echo home_url(); ?>/asia#price">料金プラン</a></li>
        <li><a href="<?php echo home_url(); ?>/asia#flow">制作の流れ</a></li>
        <li><a href="<?php echo home_url(); ?>/asia#faq">FAQ</a></li>
        <li><a href="<?php echo home_url(); ?>/asia#contact">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="overlay"></div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
