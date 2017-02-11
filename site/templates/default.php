<?php snippet('header') ?>

<article class="">
  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>
  <?= html::tag('hr') ?>
</article>

<?php snippet('footer') ?>
