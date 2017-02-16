<?php
class Kanal extends BeritaController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kanal_m');
  }
  public function show_kanal($page = null)
  {
    $this->load->library('pagination');
    $mydata = $this->db->get('article');
    //konfigurasi untuk pagination
		$config['base_url'] = site_url().'news';
		$config['total_rows'] = $mydata->num_rows();
		$config['per_page'] = 2;
    // $config['enable_query_strings'] = true;
    // $config['page_query_string'] = true;
    // $config['query_string_segment'] = 'page';
    // $config['reuse_query_string'] = true;
		$config['first_page'] = 'First';
		$config['last_page'] = 'Last';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';
    $config['use_page_numbers']  = TRUE;

		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="current"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		//inisialisasi/apply config
		$this->pagination->initialize($config);

		//buat pagination
		$paging = $this->pagination->create_links();
    $data['paging'] = $paging;
		if($page){
			$offset = ($page - 1) * $config['per_page'];
		}else{
			$offset = 0;
		}
    $data['beritas'] = $this->kanal_m->ambil_berita($config['per_page'] , $offset);
    $data['content'] = 'kanal/kanal_v';
    $this->templates->get_main_templates($data);
  }
  public function per_category($category_url = null , $page = null)
  {

    $this->load->library('pagination');
    $mydata = $this->kanal_m->ambil_berita_per_category_full($category_url);
    //konfigurasi untuk pagination
		$config['base_url'] = site_url().'category/' . $category_url;
		$config['total_rows'] = $mydata->num_rows();
		$config['per_page'] = 6;
    // $config['enable_query_strings'] = true;
    // $config['page_query_string'] = true;
    // $config['query_string_segment'] = 'page';
    // $config['reuse_query_string'] = true;
		$config['first_page'] = 'First';
		$config['last_page'] = 'Last';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';
    $config['use_page_numbers']  = TRUE;

		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="current"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		//inisialisasi/apply config
		$this->pagination->initialize($config);

		//buat pagination
		$paging = $this->pagination->create_links();
    $data['paging'] = $paging;
		if($page){
			$offset = ($page - 1) * $config['per_page'];
		}else{
			$offset = 0;
		}
    $category_data = $this->db->get_where('category' , ['category_url' => $category_url]);
    $data['category'] = $category_data->row();
    $result = $this->kanal_m->ambil_berita_per_category($category_url , $config['per_page']  , $offset);
    $data['highligh'] = $this->kanal_m->ambil_berita_per_category($category_url , 4  , 0);
    $data['articles'] = $result;
    $data['content'] = 'kanal/gallery_v';
    $this->templates->get_main_templates($data);
  }
  public function profil_pilihan($page = null)
  {
    $category_url = "profil-pilihan";
    $this->load->library('pagination');
    $mydata = $this->kanal_m->ambil_berita_per_category_full($category_url);
    //konfigurasi untuk pagination
		$config['base_url'] = site_url().'category/' . $category_url;
		$config['total_rows'] = $mydata->num_rows();
		$config['per_page'] = 6;
    // $config['enable_query_strings'] = true;
    // $config['page_query_string'] = true;
    // $config['query_string_segment'] = 'page';
    // $config['reuse_query_string'] = true;
		$config['first_page'] = 'First';
		$config['last_page'] = 'Last';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';
    $config['use_page_numbers']  = TRUE;

		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="current"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		//inisialisasi/apply config
		$this->pagination->initialize($config);

		//buat pagination
		$paging = $this->pagination->create_links();
    $data['paging'] = $paging;
		if($page){
			$offset = ($page - 1) * $config['per_page'];
		}else{
			$offset = 0;
		}
    $result = $this->kanal_m->ambil_berita_per_category($category_url , $config['per_page']  , $offset);
    $data['highligh'] = $this->kanal_m->ambil_berita_per_category($category_url , 4  , 0);
    $data['articles'] = $result;
    $data['content'] = 'kanal/profil_pilihan_v';
    $this->templates->get_main_templates($data);
  }
}
?>
