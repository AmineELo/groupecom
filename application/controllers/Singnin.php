<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Singnin extends CI_Controller {

	public function index()
	{
        //Tester sur la session si il est remplie par les données de l'utilisateur
       if($this->session->userdata('role'))
         {
          if($this->session->userdata('role')=="etudiant" || $this->session->userdata('role')=="ecole")
          {
            redirect('Accueil');
          }
         }
        else
         {
         $this->load->view('singnin');
         }
	}

	public function validation()
	{
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[30]');
		$this->form_validation->set_rules('password','User password','required|min_length[5]|max_length[30]');

			if($this->form_validation->run()==FALSE)
				{
					$val_errors=array('errors'=>validation_errors());
					$this->session->set_flashdata($val_errors);
					redirect('singnin');
				}

				else
				{
					$this->load->model('login_Model');
					$username=$this->input->post('username');
					$password=$this->input->post('password');
					$tableau=$this->login_Model->login($username,$password);
					var_dump($tableau);
					if(empty($tableau))
					{
						 $data_error['data_error']="Invalid Login, You should verify your data !";
				  	 $this->session->set_flashdata($data_error);
						redirect('singnin');
					}
					else
					{
						//Remplir notre session par les valeurs de l'utilisateur

						$this->session->set_userdata($tableau[0]);
						redirect('singnin');
					}

				}

	}
}
?>
