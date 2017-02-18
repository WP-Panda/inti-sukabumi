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
               <div class="col-lg-8 col-md-8 col-sm-8 index-beritautama-1">
                  <a class="thumbnail" href="http://inti.or.id/view_article/Selamat_Jalan,_Pak_Ben!_____.html?id=8572ff39-3bda-4c76-b4f2-65d802798e98" >
                     <!-- <img src="assets/images/Selamat_Jalan_Pak_Ben__thumb.jpg" data-src="holder.js/10%x50" height="300" width="500" /> -->
                     <img src="assets/images/Selamat_Jalan_Pak_Ben__thumb.jpg" data-src="holder.js/10%x50" />
                  </a>
                  <p class="timestamp">18 Jan 2017 14:18</p>
                  <h2><a href="http://inti.or.id/view_article/Selamat_Jalan,_Pak_Ben!_____.html?id=8572ff39-3bda-4c76-b4f2-65d802798e98">Selamat Jalan, Pak Ben!     </a></h2>
                  <p class="overflow"><a href="http://inti.or.id/view_article/Selamat_Jalan,_Pak_Ben!_____.html?id=8572ff39-3bda-4c76-b4f2-65d802798e98">Telah berpulang salah seorang Pendiri dan Wakil Ketua Umum Perhimpunan INTI, bapak Benny Gatot Setiono pada Selasa pagi 17 Januari 2017 di RS Cipto Mangunkusumo Kencana, Jakarta.</a></p>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 index-beritautama-2">
                  <div class="index-beritautama-2-box">
                     <a href="http://inti.or.id/view_article/_MoU_INTI_dan_ICMI.html">
                     <img src="assets/images/_MoU_INTI_dan_ICMI_thumb.jpeg" data-src="holder.js/10%x50" height="150" width="250" />
                     </a>
                     <p class="timestamp">28 Nov 2016 16:02</p>
                     <h2 class="overflow"><a href="http://inti.or.id/view_article/_MoU_INTI_dan_ICMI.html?id=512fcead-0582-439d-9a00-fe90d2148cb5"> MoU INTI dan ICMI</a></h2>
                  </div>
                  <div class="index-beritautama-2-box">
                     <a href="http://inti.or.id/view_article/_Bangun_Persatuan_dan_Kesatuan,_GEMA_INTI_Sulawesi_Selatan_Adakan_Kejuaraan_Badminton.html">
                     <img src="assets/images/_Bangun_Persatuan_dan_Kesatuan,_GEMA_INTI_Sulawesi_Selatan_Adakan_Kejuaraan_Badminton_thumb.jpeg" data-src="holder.js/10%x50" height="150" width="250" />
                     </a>
                     <p class="timestamp">20 Nov 2016 21:11</p>
                     <h2 class="overflow"><a href="http://inti.or.id/view_article/_Bangun_Persatuan_dan_Kesatuan,_GEMA_INTI_Sulawesi_Selatan_Adakan_Kejuaraan_Badminton.html?id=51e67694-3828-4ff6-a593-0e8bb3db12d9"> Bangun Persatuan dan Kesatuan, GEMA INTI Sulawesi Selatan Adakan Kejuaraan Badminton</a></h2>
                  </div>
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
