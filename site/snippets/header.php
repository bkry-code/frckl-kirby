<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $site->title() ?></title>

    <meta name="description" content="<?= $site->description() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <?php e(c::get('debugmode'), css('assets/css/main.css'), css('assets/css/main.min.css')) ?>

  </head>
  <body>
    <?php snippet('old-browsers') ?>
    <?php snippet('logo') ?>
    <?php snippet('nav') ?>

    <main class="main" role="main">
