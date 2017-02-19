<div id="main-slider" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
   </ol>
   <!-- wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <?php echo modules::run('berita/get_breaking'); ?>
   </div>
   <!-- controls -->
   <a class="left carousel-control" href="#main-slider" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#main-slider" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right"></span>
   <span class="sr-only">Previous</span>
   </a>
</div>
<div class="content">
   <div class="wrapper">
      <div class="row">
         <div class="col-lg-12">
            <div class="col-lg-12 col-md-12 col-sm-12 ad-space">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-8 col-md-8 index-beritautama">
            <div class="section-title">
               <h4>Berita <span>Utama</span></h4>
            </div>
            <div class="row">
              <?php if ($breaking_first != null): ?>
                <div class="col-lg-8 col-md-8 col-sm-8 index-beritautama-1">
                   <a class="thumbnail" href="<?= link_article($breaking_first->article_url); ?>" >
                      <!-- <img src="assets/images/Selamat_Jalan_Pak_Ben__thumb.jpg" data-src="holder.js/10%x50" height="300" width="500" /> -->
                      <img src="<?= base_url($breaking_first->article_image) ?> "/>
                   </a>
                   <p class="timestamp"><?= $this->format->date_indonesia($breaking_first->created_at) ?></p>
                   <h2><a href="<?= link_article($breaking_first->article_url); ?>"><?= $breaking_first->article_name ?></a></h2>
                   <p class="overflow"><a href="<?= link_article($breaking_first->article_url); ?>"><?= $breaking_first->article_summary ?></a></p>
                </div>
              <?php endif; ?>
               <div class="col-lg-4 col-md-4 col-sm-4 index-beritautama-2">
                 <?php foreach ($breaking_last as $key => $row): ?>
                   <div class="index-beritautama-2-box">
                      <a href="<?= link_article($row->article_url); ?>">
                      <img src="<?= base_url($row->article_image_thumb) ?>" height="150" width="250" />
                      </a>
                      <p class="timestamp"><?= $this->format->date_indonesia($row->created_at) ?></p>
                      <h2 class="overflow">
                        <a href="<?= link_article($row->article_url); ?>"> <?= $row->article_name ?> </a></h2>
                   </div>
                 <?php endforeach; ?>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 index-news-section section-beritaprofil">
            <div class="section-title">
               <h4>Berita <span>Terbaru</span></h4>
            </div>
            <?php echo modules::run('berita/get_feeds') ?>
            <div class="section-link"><a href="http://inti.or.id/calendar_event.html">See All</a></div>
         </div>
      </div>
      <!-- banner 2 location -->
      <div class="row">
         <div class="col-lg-6 col-md-6">
            <div class="ad-space">
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="ad-space">
            </div>
         </div>
      </div>
      <!-- end banner 2 location -->
      <div class="row">
         <div class="col-lg-4 col-md-4 index-news-section section-beritaprofil">
            <div class="section-title">
               <h4>Profil <span>Pilihan</span></h4>
            </div>
            <?php echo modules::run('berita/get_feeds' , 'profil-pilihan'); ?>
            <div class="section-link"><a href="<?= base_url('category/profil-pilihan') ?>">See All</a></div>
         </div>
         <div class="col-lg-4 col-md-4 index-news-section section-beritaopini">
            <div class="section-title">
               <h4>Berita <span>Video</span></h4>
            </div>
            <?php echo modules::run('berita/get_feeds' , 'video-gallery'); ?>
            <div class="section-link"><a href="<?= base_url('category/video-gallery') ?>">See All</a></div>
         </div>
         <div class="col-lg-4 col-md-4 index-news-section section-photovideo">
            <div class="section-title">
               <h4>Gallery<span>Foto</span></h4>
            </div>
            <?php echo modules::run('berita/get_feeds' , 'photo-gallery'); ?>
            <div class="section-link"><a href="<?= base_url('category/photo-gallery') ?>">See All</a></div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="ad-space">
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="ad-space">
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="ad-space">
            </div>
         </div>
      </div>
   </div>
</div>
