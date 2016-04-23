<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
    $this->load->helper('form');
		$this->load->view('Signup');
	}

  public function register(){
    $this->load->model('Register_model');
    $this->Register_model->addUser();
    redirect('/singnin');
  }
}
