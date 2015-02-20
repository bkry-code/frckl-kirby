<?php snippet('header') ?>

<article class="">
  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>
</article>

<?php snippet('footer') ?>
