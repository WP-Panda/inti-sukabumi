<?php
class Admin_images extends AdminController
{
    public function __construct()
    {
      parent::__construct();
    }
    public function index()
    {
      $data['content'] = 'admin_images/upload_images_v';
      $this->templates->get_admin_templates($data);
    }
    public function postData()
    {

      $config['upload_path']          = './gallery/';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('file'))
      {
              $error = array('error' => $this->upload->display_errors());

              print_r($error);
      }
      else
      {
          $data = $this->upload->data();
          $image_path = $config['upload_path'] . $data['file_name'];
          $article = $this->input->post('news_list');
          foreach ($article as $key => $value) {
            $data = [
              'article_id' => $value,
              'image_url' => $image_path
            ];
            $this->db->insert('article_images' , $data);
          }
      }
    }
}
