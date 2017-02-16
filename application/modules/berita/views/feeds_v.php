<?php foreach ($list as $key => $article): ?>
  <div class="media">
    <a class="media-left media-top" href="<?= link_article($article->article_url) ?>">
      <img src="<?= base_url($article->article_image_thumb); ?>" height="65" width="125">
    </a>
    <div class="media-body">
        <p class="timestamp"><?= $this->format->date_indonesia($article->created_at) ?></p>
        <h2 class="media-heading overflow"><a href="<?= link_article($article->article_url) ?>"><?= $article->article_name ?></a></h2>
    </div>
  </div>
<?php endforeach; ?>
