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
    if (!empty($breaking)) {
      // Ambil berita pertama
      $first = $breaking[0];
      if (count($breaking) > 1) {
        array_shift($breaking);

      }else{
        $breaking = [];
      }
    }else{
      $first = false;
    }
    $data['breaking_first'] = $first;
    $data['breaking_last'] = $breaking;
    $data['content'] = "home/home_v";
    $this->templates->get_news_templates($data);
  }
}
 ?>
