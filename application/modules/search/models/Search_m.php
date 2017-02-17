<?php
class Search_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_article($keywords)
  {
    if ($keywords == null) {
      return [];
    }
    $this->db->select('*')->from('article')
    ->like('article_name' , $keywords , '%')
    ->or_like('article_desc' , $keywords , '%');
    $data = $this->db->get();

    return $data->result();
  }
}
?>
