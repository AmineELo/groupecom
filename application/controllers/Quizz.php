<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizz extends CI_Controller {

	public function index()
	{
			$this->load->view('Accueil');
	}
	public function page($id_quizz)
	{ $data['id_quizz']=$id_quizz;
		$this->load->view('quizz',$data);
	}



}
