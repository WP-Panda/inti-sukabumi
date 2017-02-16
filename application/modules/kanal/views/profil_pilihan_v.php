<div class="content">
  <div class="wrapper">
    <div class="row">
      <div class="col-lg-9 col-md-9 detail-row">
        <div class="title-row-search">
          <div class="catalog-title"><h4>Profil Pilihan</h4></div>
          <div class="gallery-search">
          </div>
        </div>
        <div id="photo-slider" class="carousel slide" data-ride="carousel">
            <div class="catalog-itemlist">
              <ul>
                <?php foreach ($articles as $key => $article): ?>
                  <li>
                    <div class="catalog-smallcolumn-content-box">
                      <a href="<?= link_article($article->article_url) ?>" class="thumbnail">
                        <img src="<?= base_url($article->article_image_thumb) ?>" height="150" width="250" />
                      </a>
                      <p class="timestamp"><?= $this->format->date_indonesia($article->created_at) ?></p>
                      <h2 class=""><a href="<?= link_article($article->article_url) ?>"><?= $article->article_name ?></a></h2>
                      <p>
                        <?= $article->article_summary . "....."; ?>
                      </p>
                      <em><a class="bt-red" href="<?= link_article($article->article_url) ?>">READ MORE</a></em>
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
