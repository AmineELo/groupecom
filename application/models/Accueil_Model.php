<?php
class Accueil_Model extends CI_Model
{
 public function __construct()
 {
   parent::__construct();
 }
 public function get_slider()
        {
          $sql =   $this->db->query("SELECT * FROM `slider`");
          return $sql->result();
        }
}
?>
