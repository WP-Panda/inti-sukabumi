<div class="content">
  <div class="wrapper">
    <div class="row">
      <div class="col-lg-9 col-md-9 detail-row">
        <div class="title-row-search">
          <div class="catalog-title"><h4><?= $category->category_name ?></h4></div>
          <div class="gallery-search">
          </div>
        </div>
        <div id="photo-slider" class="carousel slide" data-ride="carousel">
          <!-- indicators -->
          <ol class="carousel-indicators">
            <li data-target="#photo-slider" data-slide-to="1" class="active"></li>
            <li data-target="#photo-slider" data-slide-to="2"></li>
            <li data-target="#photo-slider" data-slide-to="3"></li>
            <li data-target="#photo-slider" data-slide-to="4"></li>
            <li data-target="#photo-slider" data-slide-to="5"></li>
          </ol>
          <!-- wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php foreach ($highligh as $key => $row): ?>
              <div class="item <?= ($key == 0) ? 'active' : ''; ?>">
                <img src="<?php echo base_url($row->article_image); ?>" data-src="holder.js/10%x50" height="355" width="853" />
                <div class="carousel-caption">
                  <p class="timestamp"><?= $this->format->date_indonesia($row->created_at); ?><p>
                    <h3><a href="<?= link_article($row->article_url) ?>"><?= $row->article_name ?></a></h3>
                    <p>
                      <?= $row->article_summary ?>
                    </p>
                  </div>
              </div>
            <?php endforeach; ?>
              <a class="left carousel-control" href="#photo-slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#photo-slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <div class="catalog-itemlist">
              <ul>
                <?php foreach ($articles as $key => $article): ?>
                  <li>
                    <div class="catalog-smallcolumn-content-box">
                      <a href="<?= link_article($article->article_url) ?>" class="thumbnail">
                        <img src="<?= base_url($article->article_image_thumb) ?>" height="150" width="250" />
                      </a>
                      <p class="timestamp"><?= $this->format->date_indonesia($article->created_at) ?></p>
                      <h2 class="overflow"><a href="<?= link_article($article->article_url) ?>"><?= $article->article_name ?></a></h2>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
              <div class="clear"></div>
            </div>
            <?php echo $paging ?>
          </div>
        </div>
          <div class="col-lg-3 col-md-3 index-news-section section-photovideo">
            <div class="ad-space">
            </div>
            <div class="ad-space">
            </div>
            <div class="section-title">
              <h4>Berita <span>Terbaru</span></h4>
            </div>
            <div class="catalog-smallcolumn2">
              <?php echo modules::run('berita/get_feeds') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
