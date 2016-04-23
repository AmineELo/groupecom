<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

  public function __construct()
  {
          // Call the CI_Model constructor
          parent::__construct();
  }

  public function addUser(){
    $data = array(
      'firstname' => $this->input->post('nom'),
      'lastname' => $this->input->post('prenom'),
      'email' => $this->input->post('email') ,
      'username' => $this->input->post('username') ,
      'password' => md5($this->input->post('password')) ,
      'role' => $this->input->post('role')
    );
    $this->db->insert('users',$data);
    return true;
  }
}
