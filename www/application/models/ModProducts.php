<?php

if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class ModProducts extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  /**
  * Retrieves the products in optional paginated way
  */
  public function get($page=null,$limit=null)
  {
    $this->db->select('title,price,discount')
            ->from(PRODUCTS_TABLE);
    $query=$this->db->get();

    return $query->result_array();
  }
}

?>
