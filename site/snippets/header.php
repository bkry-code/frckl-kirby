<!doctype html>
<html lang="<?= $site->language()->code() ?>"
  class="no-js  <?= (c::get('debugmode') || !$page->isHomePage()) ? 'fonts-loaded' : '' ?>">
  <head>
    <meta charset="utf-8" />
    <?php if ($page->isHomePage()): ?>
      <title><?= html($site->title()) ?></title>
      <meta property="og:title" content="<?= html($site->title()) ?>" />
      <meta property="og:description" content="<?= html($site->description()) ?>" />
      <meta property="og:image" content="<?= $site->url() ?>/preview.jpg" />
      <meta name="twitter:title" content="<?= html($site->title()) ?>" />
      <meta name="twitter:description" content="<?= html($site->description()) ?>" />
    <?php else: ?>
      <title><?= html($page->title() . ' | ' . $site->title()) ?></title>
      <meta property="og:title" content="<?= html($page->title() . ' | ' . $site->title()) ?>" />
      <meta property="og:description" content="<?= html($page->text()) ?>" />
      <meta name="twitter:title" content="<?= html($page->title() . ' | ' . $site->title()) ?>" />
      <meta name="twitter:description" content="<?= html($page->text()) ?>" />
    <?php endif ?>

    <meta name="description" content="<?= html($site->description()) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="7" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $page->url() ?>" />
    <meta property="og:site_name" content="<?= html($site->title()) ?>" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/assets/img/favicon-16x16.png" sizes="16x16" />
    <link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#323232" />
    <meta name="theme-color" content="#323232" />
    <link rel="manifest" href="/manifest.json" />

    <?php if (c::get('debugmode')): ?>
      <?= css('assets/css/main.css') ?>
    <?php elseif ($page->isHomePage()): // only load the critical stuff, rest via js ?>
      <style><?= @file_get_contents('./assets/css/critical.min.css') ?></style>
      <script><?= @file_get_contents('./assets/js/loadcss.min.js') ?></script>
      <script>window.loadCSS('/assets/css/main.min.<?= @c::get('sharedconfig')->hash ?>.css');</script>
      <noscript><?= css('assets/css/main.min.' . @c::get('sharedconfig')->hash . '.css') ?></noscript>
    <?php else: // just load the minified css, should be in cache now anyway ?>
      <?= css('assets/css/main.min.' . @c::get('sharedconfig')->hash . '.css') ?>
    <?php endif ?>
  </head>

  <body>

    <header class="header">
      <?php snippet('nav') ?>
      <?php snippet('logo') ?>
    </header>

    <main class="main">
