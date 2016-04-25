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
		$this->form_validation->set_rules('username','Nom d\'utilisateur','required|min_length[5]|max_length[30]');
		$this->form_validation->set_rules('password','Mot de passe','required|min_length[5]|max_length[30]');
		$this->form_validation->set_message('required','{field} est obligatoir');

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
						 $data_error['data_error']="les données sont incorrectes ";
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
	public function signInWithFb(){
		require_once(APPPATH . '../fbapp/src/Facebook/autoload.php');

		$fb = new Facebook\Facebook([
		  'app_id' => '1547335258894275',
		  'app_secret' => '05feb43fa7824d59ed640e34630eb2a2',
		  'default_graph_version' => 'v2.5'
		]);

		$helper = $fb->getRedirectLoginHelper();
		$permissions = ['email', 'public_profile']; // optional
		$loginUrl = $helper->getLoginUrl('http://localhost:8080/groupecom/Singnin/loginCallback', $permissions);

		redirect($loginUrl);
	}

	public function loginCallback(){

		require_once(APPPATH . '../fbapp/src/Facebook/autoload.php');

		$fb = new Facebook\Facebook([
		  'app_id' => '1547335258894275',
		  'app_secret' => '05feb43fa7824d59ed640e34630eb2a2',
		  'default_graph_version' => 'v2.5'
		]);

		$helper = $fb->getRedirectLoginHelper();
		try {
			$accessToken = $helper->getAccessToken();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}

		if (isset($accessToken)) {

			$this->load->model('Register_model');

			$fb->setDefaultAccessToken($accessToken);

		  try {

		    $requestProfile = $fb->get("me?fields=first_name,last_name,email,picture");
		    $data = $requestProfile->getGraphNode()->asArray();

		  } catch(Facebook\Exceptions\FacebookResponseException $e) {
		    // When Graph returns an error
		    echo 'Graph returned an error: ' . $e->getMessage();
		  } catch(Facebook\Exceptions\FacebookSDKException $e) {
		    // When validation fails or other local issues
		    echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  }

			if($this->Register_model->checkUserWithEmail(isset($data['email') ? $data['email')] : strtolower($dataSet['first_name']).'.'.strtolower($dataSet['last_name']))){

				$userData = $this->Register_model->getUserWithMail($data['email']);
				$this->session->set_userdata($userData[0]);
				redirect('/Accueil');

			}else{
				$this->Register_model->addUserWithFields($data);
				$userData = $this->Register_model->getUserWithMail($data['email']);
				$this->session->set_userdata($userData[0]);
				redirect('/Accueil');
			}



		}
	}
}

?>
