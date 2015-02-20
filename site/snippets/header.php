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

    <?php e(c::get('debugmode'), css('assets/css/main.css'), css('assets/css/main.min.css')) ?>

  </head>
  <body>

    <!--[if lt IE 9]>
      <div class="old-browser">
        <h1>You are using an outdated browser!</h1>
        <p>
          Please update your browser or install a more up-to-date Browser, such
          as Mozilla Firefox or Google Chrome. For more information and downloads
          visit those pages:
          <a href="http://browsehappy.com" target="_blank">http://browsehappy.com</a> or
          <a href="http://whatbrowser.org" target="_blank">http://whatbrowser.org</a>.
        </p>
      </div>
    <![endif]-->

    <?php snippet('_logo') ?>
    <?php snippet('_nav') ?>

    <main class="main" role="main">
