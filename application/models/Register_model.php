<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

  public function __construct()
  {
          // Call the CI_Model constructor
          parent::__construct();
  }

  public function getUser($username, $password){

    $query = $this->db->where(['username' => $username, 'password' => sha1($password)])->get('users');
    $resultArray = $query->result_array();

    if($query->num_rows() >= 1){
      return $resultArray;
    }else {
      return array();
    }
  }

  public function addUser(){
    $data = array(
      'firstname' => $this->input->post('nom'),
      'lastname' => $this->input->post('prenom'),
      'email' => $this->input->post('email') ,
      'username' => $this->input->post('username') ,
      'image' => 'img/users/default.png',
      'password' => sha1($this->input->post('password')) ,
      'role' => $this->input->post('role')
    );
    if($this->db->insert('users',$data)){
      return true;
    }else {
      return false;
    }
  }
}
