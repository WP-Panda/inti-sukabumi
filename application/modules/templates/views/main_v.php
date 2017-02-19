<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="/assets/css/style-inti.css" rel="stylesheet" />
      <link href="/assets/css/inti-sukabumi.css" rel="stylesheet" />
      <link rel="icon" type="image/png" href="/assets/images/logo-INTI.png">
      <?= (isset($meta) ? meta_tags($meta) : meta_tags());?>
      <!-- Bootstrap -->
      <link href="/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Addthis  -->
   </head>
   <body>

     <!-- facebook sdk -->
     <div id="fb-root"></div>
     <script>(function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=1681108218854132";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));</script>
      <div class="topbar">
         <div class="wrapper row">
            <div class="col-lg-6 col-md-6 col-sm-6">
               <h1>Selamat datang di website Perhimpunan Inti Sukabumi</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
               <ul class="topbar-socmed">
                  <li>
                     <a target="_blank" href="#"><img src="/assets/images/icon-facebook.png" /></a>
                  </li>
                  <li>
                     <a target="_blank" href="#"><img src="/assets/images/icon-twitter.png" /></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="header">
         <div class="wrapper">
            <div class="row">
               <div class="col-lg-2 col-md-2 col-sm-3"><a href="#"><img class="img-responsive" style="width : 150px;" src="/assets/images/logo-INTI.png" /></a></div>
               <div class="col-lg-8 col-md-8 col-sm-6">
                  <form action="/search/" class="navbar-form navbar-left searchbox" role="search" method="get" accept-charset="utf-8" enctype="multipart/form-data">
                     <div class="form-group">
                        <input  type="text" class="form-control" name='keywords' id='keyword' placeholder="Search">
                        <span class="glyphicon glyphicon-search"></span>
                     </div>
                     <button type="submit" class="btn btn-default">Search</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="mainnav">
         <div class="wrapper">
            <nav class="navbar navbar-default" role="navigation" id="sidebar-menu">
               <div class="container-fluid">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav">
                        <li>
                           <a href="/"><span class="glyphicon glyphicon-home"></span>Home</a>
                        </li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tentang INTI <span class="caret"></span></a>
                           <ul class="dropdown-menu" role="menu">
                              <li>
                                 <a href="<?= base_url('page/visi-misi-inti') ?>">Visi Misi</a>
                              </li>
                              <li>
                                 <a href="<?= base_url('page/sejarah-inti') ?>">Sejarah INTI</a>
                              </li>
                              <li>
                                 <a href="<?= base_url('page/ad-dan-rt'); ?>">Anggaran Dasar & Rumah Tangga</a>
                              </li>
                           </ul>
                        </li>
                        <li><a href="<?= base_url('page/inti-sukabumi') ?>" class="menu">Tentang Inti Sukabumi</a></li>
                        <li>
                           <a href="<?= base_url('news') ?>" class="menu">Berita</a>
                        </li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">E-Gallery <span class="caret"></span></a>
                           <ul class="dropdown-menu" role="menu">
                              <li>
                                 <a href="<?= base_url('category/photo-gallery') ?>">Photo Gallery</a>
                              </li>
                              <li><a href="<?= base_url('category/video-gallery') ?>">Video Galler</a>
                              </li>
                           </ul>
                        </li>
                        <li><a href="<?= base_url('category/profil-pilihan') ?>" class="menu">Profil Pilihan</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Xtra INTI <span class="caret"></span></a>
                           <ul class="dropdown-menu" role="menu">
                              <li><a target="_blank" href="http://www.yec-inti.com/about">YEC INTI </a></li>
                              <li><a target="_blank" href="http://www.beasiswapelangi.org">Beasiswa Pelangi </a></li>
                              <li><a href="#">GEMA INTI</a></li>
                              <li><a href="#">PINTI</a></li>
                              <li><a href="#">Akupuntur</a></li>
                              <li><a href="#">Photography</a></li>
                              <li><a href="#">Sekolah Sepakbola</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <!-- /.navbar-collapse -->
               </div>
               <!-- /.container-fluid -->
            </nav>
         </div>
      </div>
      <?php if (isset($breadcrumbs)): ?>
        <div class="content">
          <div class="wrapper">
            <?php echo $breadcrumbs ?>
          </div>
        </div>
      <?php endif; ?>
      <!-- start of content -->
      <?php echo (isset($content)) ? $this->load->view($content) : "No Templates Found"; ?>
      <!-- end of content -->
      <div class="footer">
         <div class="wrapper">
            <div class="row section-partnerlogo">
               <div class="col-lg-12">
                  <div class="section-title">
                     <h4>Partner <span>Logo</span></h4>
                  </div>
                  <div class="partnerlogo">
                     <button class="partnerslide-prev"><span class="glyphicon glyphicon-chevron-left"></span></button>
                     <div class="partner-carousel">
                        <ul>
                          <li>
                             <a class="media-left media-top" href="#" target="_blank">
                             <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                          </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                           <li>
                              <a class="media-left media-top" href="#" target="_blank">
                              <img src="/assets/images/default.jpeg" style="width:120px; height:120px;" /></a>
                           </li>
                        </ul>
                     </div>
                     <button class="partnerslide-next"><span class="glyphicon glyphicon-chevron-right"></span></button>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4 footer-about">
                  <h2>About Inti Sukabumi</h2>
                  <p>
                    Perhimpunan INTI adalah Oganisasi yang bersifat kebangsaan sesuai semangat Mukadimah UUD RI 1945, bebas, egaliter, pluralis, inklusif, demokratis, tidak bernaung atau mengikatkan diri kepada salah satu partai politik dan terbuka bagi semua Warga Negara Indonesia yang setuju pada Anggaran Dasar, Anggaran Rumah Tangga, serta Tujuan Perhimpunan INTI.
                  </p>
               </div>
               <div class="col-lg-5 col-md-5 footer-quickmenu">
                  <div class="section-title">
                     <h4>Quick <span>Menu</span></h4>
                  </div>
                  <ul>
                     <li><a href="<?= base_url('/') ?>"><span class="glyphicon glyphicon-chevron-right"></span> Home</a></li>
                     <li><a href="<?= base_url('/news') ?>"><span class="glyphicon glyphicon-chevron-right"></span> Berita</a></li>
                     <li><a href="<?= base_url('/category/photo-gallery') ?>"><span class="glyphicon glyphicon-chevron-right"></span> Photo Gallery</a></li>
                     <li><a href="<?= base_url('/category/profil-pilihan') ?>"><span class="glyphicon glyphicon-chevron-right"></span> Profil Pilihan</a></li>
                  </ul>
                  <div class="clear"></div>
               </div>
               <div class="col-lg-3 col-md-3 footer-socmed">
                  <div class="section-title">
                     <h4>Follow <span>Us</span></h4>
                  </div>
                  <div class="row">
                     <ul>
                        <li><a target="_blank" href="#"><img src="/assets/images/icon-facebook-60.png" /></a></li>
                        <li><a target="_blank" href="#"><img src="/assets/images/icon-twitter-60.png" /></a></li>
                        <!-- <li><a href="#"><img src="images/icon-rss-60.png" /></a></li> -->
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 footer-copyright">Copyright 2017 Inti Sukabumi. All Rights Reserved. Powered by <a href='<?= $this->config->item("vendor_url") ?>' target='_blank'><?= $this->config->item("vendor_name") ?></a></div>
            </div>
         </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="/assets/js/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/assets/vendors/bootstrap/js/bootstrap.js"></script>
      <script type="text/javascript" src="/assets/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/assets/js/jquery.jcarousellite.js"></script>
      <!-- <script type="text/javascript" src="/assets/js/calender.js"></script> -->
      <!-- Custom Scrip -->
      <script type="text/javascript" src="/assets/js/intismi.js"></script>
      <script>
         $(".partner-carousel").jCarouselLite({
         btnNext: ".partnerslide-next",
         btnPrev: ".partnerslide-prev"
         });
         $(function() {
                $(".widget .photo-carousel").jCarouselLite({
                    btnNext: ".widget .partnerslide-next",
                    btnPrev: ".widget .partnerslide-prev",
                });
                $(".widget img").click(function() {
                    $(".widget .mid img").attr("src", $(this).attr("src"));
                })
            });
      </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58a5a8fbb509416a"></script>
   </body>
</html>
