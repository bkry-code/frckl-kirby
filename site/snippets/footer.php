    </main>

    <?php if (c::get('debugmode')): ?>
      <?= js('/assets/js/main.js') ?>
    <?php else: ?>
      <?= js('/assets/js/main.min.' . @c::get('sharedconfig')->hash . '.js') ?>
      <script>
        if ('serviceWorker' in navigator) {
          navigator.serviceWorker.register('/serviceworker.<?= @c::get('sharedconfig')->hash ?>.js');
        }
      </script>
    <?php endif ?>
  </body>
</html>
