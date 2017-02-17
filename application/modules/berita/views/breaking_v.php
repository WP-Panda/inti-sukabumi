<?php foreach ($list as $key => $row): ?>
<div class="item <?= ($key == 0) ? 'active' : ''; ?>">
   <img src="<?= base_url($row->article_image) ?>" alt="<?= $row->article_name ?>" height='100px' width='500' />
   <div class="carousel-caption">
      <h3> <?= $row->article_name ?> </h3>
      <a href="<?= link_article($row->article_url) ?>" class="bt-mainslider">Read more</a>
   </div>
</div>
<?php endforeach; ?>
