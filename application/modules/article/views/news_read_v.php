<div class="content">
  <div class="wrapper">
    <div class="row">
      <!-- start of content -->
      <div class="col-sm-9 col-xs-12 article-area">
        <div class="">
          <div class="">
            <article>
              <div class="judul">
                <div class="article date">
                  <?= $this->format->date_indonesia($article->created_at) ?>
                </div>
                <h1 class="article subject">
                    <?= $article->article_name ?>
                </h1>
                <br>
                <div class="bukan-iklan">
                  <div class="addthis_inline_share_toolbox"></div>
                </div>
              </div>
              <?php if ($article->article_type == "article"): ?>
                <?php if (count($article_images) > 0): ?>
                  <div class="photoslide widget">
                      <div class="mid">
    											<img src="<?= base_url($article->article_image) ?>" data-src="holder.js/80%x80" />
                      </div>
                      <div class="photo-carousel-wrapper">
                          <button class="partnerslide-prev"><span class="glyphicon glyphicon-chevron-left"></span></button>
                          <div class="photo-carousel">
                              <ul>
                                <?php foreach ($article_images as $key => $value): ?>
                                  <li>
                                  	<img src="<?= base_url($value->image_url) ?>" data-src="holder.js/80%x80" />
                                  </li>
                                <?php endforeach; ?>
                              </ul>
                          </div>
                          <button class="partnerslide-next"><span class="glyphicon glyphicon-chevron-right"></span></button>
                      </div>
                  </div>
                <?php else: ?>
                  <div class="article images">
                    <img class="img-responsive" src="<?= base_url($article->article_image) ?>" />
                  </div>
                <?php endif; ?>
              <?php else: ?>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?= $article->article_video ?>"></iframe>
                </div>
              <?php endif; ?>

              <span class="article image-caption"><?= $article->article_image_caption ?></span>
              <div class="article article-content">
                <?php echo $article->article_desc; ?>
              </div>
              <hr/>
              <div class="section-title">
                  <h4>Komentar <span>Berita</span></h4>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="fb-comments" data-href="<?= current_url() ?>" data-width="100%" data-numposts="5"></div>
                    </div>
                  </div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 index-news-section section-photovideo">
        <div class="section-title">
            <h4>Berita <span>Terbaru</span></h4>
        </div>
        <div class="catalog-smallcolumn2">
          <?php echo modules::run('berita/get_feeds'); ?>
        </div>
      </div>
      <!-- end of content -->
    </div>
  </div>
</div>
