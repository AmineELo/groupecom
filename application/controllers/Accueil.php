<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		$this->load->view('accueil.php');
	}

	public function load_slider()
	{
		$this->load->model('Accueil_Model');
		$sql = $this->Accueil_Model->get_slider();
		foreach ($sql as $row ) {
			if($row->active==1)
			$active="active";
			else
			$active ="";
			$url='./slider/'.$row->url;
			echo ' <div class="item '.$active.'" style="background-image:url('.$url.');
							no-repeat center center ;
							-moz-background-size: cover;
							-webkit-background-size: cover;
							-o-background-size: cover;
							background-size: cover;
							height: 300px;
									">
					 <div class="carousel-content">


					 </div>
					 <div class="title" style="background:rgba(0, 0, 0, 0.4);position:absolute;bottom:0px;width:100%;max-height: 130px;
																			min-height: 23px;
																			padding-left: 50px;
																			padding-top: 10px;">
							<h3 style="font-family:Georgia;text-shadow: 3px 3px #0E0E0E;">'.$row->title.'</h3>
						 <p style="font-family:Georgia;"><i style="color:white;font-size:12px;">'.$row->subtitle.'</i>  </p>
					 </div>
			 </div>
			';
	      }
	}

}
