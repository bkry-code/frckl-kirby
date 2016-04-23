<?php if ($articles->pagination()->hasPages()): ?>
  <nav class="pagination">

    <?php if ($articles->pagination()->hasNextPage()): ?>
      <a class="pagination__older" href="<?= $articles->pagination()->nextPageURL() ?>">
        <?php snippet('icon', [ 'icon' => 'arrow-left' ]) ?>
        Older posts
      </a>
    <?php endif ?>

    <?php if ($articles->pagination()->hasPrevPage()): ?>
      <a class="pagination__newer" href="<?= $articles->pagination()->prevPageURL() ?>">
        Newer posts
        <?php snippet('icon', [ 'icon' => 'arrow-right' ]) ?>
      </a>
    <?php endif ?>

  </nav>
<?php endif ?>
