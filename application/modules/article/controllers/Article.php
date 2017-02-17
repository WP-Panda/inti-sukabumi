<?php
class Article extends UserController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('article_m');
    $this->load->library('format');
  }
  public function faqs()
  {
    $data['page_title'] = 'FAQs';
    $data['content'] = 'article/faqs_v';
    $data['meta']['title'] = $data['page_title'];
    $data['faqs'] = $this->db->get_where('article' , ['article_category' => 'FAQs'])->result();
    $this->templates->get_main_templates($data);
  }
  public function article_list()
  {
    $data['page_title'] = 'Artikel';
    $data['content'] = 'article/article_v';
    $data['articles'] = $this->article_m->get_article_list();
    $data['meta']['title'] = $data['page_title'];
    $this->templates->get_main_templates($data);
  }
  public function article_read($article_url)
  {
    $data['article'] = $this->article_m->get_article($article_url);
    $data['page_title'] = 'Artikel';
    $data['meta']['title'] = $data['article']->article_name;
    $data['meta']['desc'] = $this->format->text_only($data['article']->article_desc , 0 , 500);
    $data['content'] = 'article/article_read_v';
    $this->templates->get_main_templates($data);
  }
  public function news_read($article_url)
  {
    add_js(base_url('assets/js/fb.js'));
    $data['article'] = $this->article_m->get_article($article_url);
    $data['page_title'] = 'Artikel';
    $data['meta']['title'] = $data['article']->article_name;
    $data['meta']['desc'] = $data['article']->article_summary;
    $data['content'] = 'article/news_read_v';
    $this->set_viewer($article_url);
    $this->templates->get_news_templates($data);
  }
  public function set_viewer($news_url)
  {
    $this->db->select('article_id')->from('article')
    ->where('article_url', $news_url);
    $news_id = $this->db->get()->row()->article_id;
    $seens_ip = $_SERVER['REMOTE_ADDR'];

    $this->db->select('article_viewed_id')->from('article_viewed')
    ->where('article_id', $news_id)
    ->where('article_viewed_ip', $seens_ip);
    $cekIp = $this->db->get()->result();
  		// Jika blum ada yang liat maka insert
		if (empty($cekIp)) {
			if($this->session->userdata('logged_in')):
				$isLogin = true;
			else:
				$isLogin = false;
			endif;
			$data = array(
				'article_id' => $news_id,
				'article_viewed_ip' => $seens_ip,
				'article_viewed_comment' => 'Already seens on ip '.$seens_ip,
				'isLogin' => $isLogin
			);
			$this->db->insert('article_viewed', $data);
    }
  }
}
