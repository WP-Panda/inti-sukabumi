<?php
class Home extends BeritaController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('berita/berita_m');
  }
  public function index()
  {
    $breaking = $this->berita_m->get_breaking(null);
    $data['breakings'] = $breaking;
    $data['content'] = "home/home_v";
    $this->templates->get_news_templates($data);
  }
}
 ?>
