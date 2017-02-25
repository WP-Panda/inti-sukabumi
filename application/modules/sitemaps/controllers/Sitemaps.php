<?php
class Sitemaps extends BeritaController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data = ["page/inti-sukabumi" , "news" , "category/photo-gallery" , "page/visi-misi-inti" , "page/sejarah-inti",];
    $this->load->view('sitemaps_v', ['sitemaps' => $data]);
  }
}
?>
