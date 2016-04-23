<!doctype html>
<html lang="<?= $site->language()->code() ?>"
  class="no-js  <?= (c::get('debugmode') || !$page->isHomePage()) ? 'fonts-loaded' : '' ?>">
  <head>
    <meta charset="utf-8" />
    <?php if ($page->isHomePage()): ?>
      <title><?= html($site->title() . ' — ' . $site->subtitle()) ?></title>
    <?php else: ?>
      <title><?= html($page->title() . ' | ' . $site->title()) ?></title>
    <?php endif ?>

    <meta name="description" content="<?= html($site->description()) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="7" />
    <meta name="ICBM" content="<?= $site->lat() ?>, <?= $site->lon() ?>" />
    <meta name="geo.position" content="<?= $site->lat() ?>;<?= $site->lon() ?>" />
    <meta name="geo.region" content="<?= $site->region() ?>" />
    <meta name="geo.placename" content="<?= $site->city() ?>" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />

    <?php if ($page->isHomePage()): ?>
      <meta property="og:title" content="<?= html($site->title() . ' — ' . $site->subtitle()) ?>" />
      <meta name="twitter:title" content="<?= html($site->title() . ' — ' . $site->subtitle()) ?>" />
    <?php else: ?>
      <meta property="og:title" content="<?= html($page->title() . ' | ' . $site->title()) ?>" />
      <meta name="twitter:title" content="<?= html($page->title() . ' | ' . $site->title()) ?>" />
    <?php endif ?>


    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $page->url() ?>" />
    <meta property="og:site_name" content="<?= html($site->title()) ?>" />
    <meta property="og:description" content="<?= html($site->description()) ?>" />
    <meta property="og:image" content="<?= $site->url() ?>/preview.jpg" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@<?= $site->social() ?>" />
    <meta name="twitter:description" content="<?= html($site->description()) ?>" />
    <meta name="twitter:image" content="<?= $site-url() ?>/apple-touch-icon.png" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

    <?php if (c::get('debugmode')): ?>
      <link rel="stylesheet" href="/assets/css/main.css" />

    <?php elseif ($page->isHomePage()): // only load the critical stuff, rest via js ?>
      <style><?= @file_get_contents('./assets/css/critical.min.css') ?></style>
      <script><?= @file_get_contents('./assets/js/loadcss.min.js') ?></script>
      <script>window.loadCSS('/assets/css/main.min.<?= c::get('sharedconfig')->hash ?>.css');</script>
      <noscript><link rel="stylesheet" href="/assets/css/main.min.<?= c::get('sharedconfig')->hash ?>.css" /></noscript>

    <?php else: // just load the minified css, should be in cache now anyway ?>
      <link rel="stylesheet" href="/assets/css/main.min.<?= c::get('sharedconfig')->hash ?>.css" />

    <?php endif ?>
  </head>

  <body>

    <header class="header  js-header">
      <?php snippet('nav') ?>
      <?php snippet('logo') ?>
    </header>

    <main class="main  js-main">
