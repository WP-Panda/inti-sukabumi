<?php foreach ($list as $key => $article): ?>
  <div class="catalog-smallcolumn-content-box">
    <h2><a href="<?= link_article($article->article_url) ?>"><?= $article->article_name ?></a></h2>
    <p class="timestamp"><?= $this->format->date_indonesia($article->created_at) ?></p>
    <a href="<?= link_article($article->article_url) ?>"></a>
    <a href="<?= link_article($article->article_url) ?>" class="thumbnail"><img src="<?= base_url($article->article_image_thumb) ?>"></a>
    <br>
  </div>
<?php endforeach; ?>
