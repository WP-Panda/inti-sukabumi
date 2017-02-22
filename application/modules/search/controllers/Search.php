<?php
class Search extends UserController {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('search_m');
        $this->load->library('format');
    }
    public function index()
    {
      $keywords = $this->input->get('keywords');
      $data['articles'] = $this->search_m->get_article($keywords);
      $data['content'] = 'search/search_result_v';
      $this->templates->get_main_templates($data);
    }
}
