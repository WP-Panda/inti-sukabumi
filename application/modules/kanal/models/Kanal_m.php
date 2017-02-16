<?php
class Kanal_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function ambil_berita($limit , $offset)
  {
    $this->db->select('article_url, article.article_id, category.category_id, article_name, article_image_thumb, article.created_at, article_view , article_summary');
    $this->db->from('article');
    $this->db->join('canal', 'article.article_id = canal.article_id');
    $this->db->join('category', 'canal.category_id = category.category_id');
    $this->db->order_by('article.created_at', 'DESC');
    $this->db->group_by('article.article_id');
    $this->db->limit($limit);
    $this->db->offset($offset);
    $get = $this->db->get()->result();
    return $get;
  }
  public function ambil_berita_per_category($category_url , $limit , $offset)
  {
    $this->db->select('article_url, article_image, article.article_id, category.category_id, article_name, article_image_thumb, article.created_at, article_view , article_summary');
    $this->db->from('article');
    $this->db->join('canal', 'article.article_id = canal.article_id');
    $this->db->join('category', 'canal.category_id = category.category_id');
    $this->db->where('category.category_url' , $category_url);
    $this->db->order_by('article.created_at', 'DESC');
    $this->db->group_by('article.article_id');
    $this->db->limit($limit);
    $this->db->offset($offset);
    $get = $this->db->get()->result();
    return $get;
  }
  public function ambil_berita_per_category_full($category_url)
  {
    $this->db->select('article_url, article.article_id, category.category_id, article_name, article_image, article_image_thumb, article.created_at, article_view , article_summary');
    $this->db->from('article');
    $this->db->join('canal', 'article.article_id = canal.article_id');
    $this->db->join('category', 'canal.category_id = category.category_id');
    $this->db->where('category.category_url' , $category_url);
    $this->db->order_by('article.created_at', 'DESC');
    $this->db->group_by('article.article_id');
    $get = $this->db->get();
    return $get;
  }
}
