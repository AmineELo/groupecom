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

  public function getUserWithMail($email){

    $query = $this->db->where(['email' => $email])->get('users');
    $resultArray = $query->result_array();

    if($query->num_rows() >= 1){
      return $resultArray;
    }else {
      return array();
    }
  }

  public function checkUser($username){
    $query = $this->db->where(['username' => $username])->get('users');

    if($query->num_rows() >= 1){
      return true;
    }else {
      return false;
    }
  }

  public function checkUserWithEmail($email){
    $query = $this->db->where(['email' => $email])->get('users');

    if($query->num_rows() >= 1){
      return true;
    }else {
      return false;
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

  public function addUserWithFields($dataSet){
    $data = array(
      'firstname' => $dataSet['first_name'],
      'lastname' => $dataSet['last_name'],
      'email' => isset($dataSet['email']) ? $dataSet['email'] : strtolower($dataSet['first_name']).'.'.strtolower($dataSet['last_name']),
      'username' => strtolower($dataSet['first_name']).'.'.strtolower($dataSet['last_name']).rand(1,99) ,
      'image' => $dataSet['picture']['url'],
      'password' => sha1(rand(111111, 999999)),
      'role' => 'etudiant'
    );
    if($this->db->insert('users',$data)){
      return true;
    }else {
      return false;
    }
  }
}
