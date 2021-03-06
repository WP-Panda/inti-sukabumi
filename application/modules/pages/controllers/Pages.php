<?php
class Pages extends UserController {
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {

  }
  public function visi_misi_inti()
  {
    // meta
    $data['meta']['title'] = "Visi dan Misi";
    // load Breadcrumbs
    $this->load->library('breadcrumbs');
    $this->breadcrumbs->push('Tentang Inti', '#');
    $this->breadcrumbs->push('Visi dan Misi', '/page/visi-misi-inti');
    $data['breadcrumbs'] = $this->breadcrumbs->show();
    $data['content'] = "pages/visi_misi_v";
    $this->templates->get_main_templates($data);
  }
  public function sejarah_inti()
  {
    // meta
    $data['meta']['title'] = "Sejarah Inti";
    // load Breadcrumbs
    $this->load->library('breadcrumbs');
    $this->breadcrumbs->push('Tentang Inti', '#');
    $this->breadcrumbs->push('Sejarah Inti', '/page/sejarah-inti');
    $data['breadcrumbs'] = $this->breadcrumbs->show();
    $data['content'] = "pages/sejarah_inti_v";
    $this->templates->get_main_templates($data);
  }
  public function ad_rt()
  {
    // meta
    $data['meta']['title'] = "Anggaran Dasar dan Rumah Tangga";
    // load Breadcrumbs
    $this->load->library('breadcrumbs');
    $this->breadcrumbs->push('Tentang Inti', '#');
    $this->breadcrumbs->push('Anggaran Dasar dan Rumah Tangga', '/page/ad-dan-rt');
    $data['breadcrumbs'] = $this->breadcrumbs->show();
    $data['content'] = "pages/ad_rt_v";
    $this->templates->get_main_templates($data);
  }
  public function inti_sukabumi()
  {
    // meta
    $data['meta']['title'] = "Tentang Inti Sukabumi";
    // load Breadcrumbs
    $this->load->library('breadcrumbs');
    // $this->breadcrumbs->push('Tentang Inti', '#');
    $this->breadcrumbs->push('Tentang Inti Sukabumi', '/page/inti-sukabumi');
    $data['breadcrumbs'] = $this->breadcrumbs->show();
    $data['content'] = "pages/inti_sukabumi";
    $this->templates->get_main_templates($data);
  }
}
