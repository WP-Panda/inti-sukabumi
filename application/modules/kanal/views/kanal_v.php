<div class="content">
    	<div class="wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-6 catalog-bigcolumn">
                    <div class="catalog-title"><h1>News</h1></div>
                      <?php foreach ($beritas as $key => $article): ?>
                        <div class="catalog-bigcolumn-content">
                          <h2>
                            <a href="<?= link_article($article->article_url) ?>"><?= $article->article_name ?></a>
                          </h2>
                          <p class="timestamp">
                            <?= $this->format->date_indonesia($article->created_at); ?>
                          </p>
                          <a href="<?= link_article($article->article_url) ?>"></a>
                          <a href="<?= link_article($article->article_url) ?>" class="thumbnail"><img src="<?= base_url($article->article_image_thumb) ?>"></a>
                          <br>
                          <br>
                          <p class="overflow"><a href="<?= link_article($article->article_url) ?>"><?= $article->article_summary ?></a></p>
                        </div>
                      <?php endforeach; ?>
                      <?php echo $paging ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 catalog-smallcolumn">
                    <div class="section-title">
                        <h4>Berita <span>Terpopuler</span></h4>
                    </div>
                    <div class="catalog-smallcolumn-content">
  					          <?php echo modules::run('berita/get_popular') ?>
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
                      <?php echo modules::run('berita/get_feeds'); ?>
						        </div>
                  </div>
                </div>
              </div>
            </div>
