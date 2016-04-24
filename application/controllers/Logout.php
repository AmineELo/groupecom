
 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{
	public function index()
	{
		// $this->session->sess_destroy ();
        //  redirect('singnin');

          $Arr_not_destoy_session = array('image','username');

        foreach($_SESSION as $sees_key => $sess_val ){
            if(!in_array($sees_key, $Arr_not_destoy_session)){
                unset($_SESSION[$sees_key]);
            }
        }
        redirect('singnin');
	}

  public function destroy_all()
  {
     $this->session->sess_destroy ();    
  }


}
