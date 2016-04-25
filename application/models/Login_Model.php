<?php
  class Login_Model extends CI_Model
  {
    public function __construct()
    {
      parent::__construct();
    }
  	public function login($username,$password)
  	{
       $password=sha1($password);
  		 $sql=$this->db->where(['username'=>$username,'password'=>$password])->get('users');//Notre requete
        $donnes=$sql->result_array();//faire le resultat forme array de la requete dans une array
        $vide=array();//array vide
        //Tester si le nombre de ligne de requete retourne quelque chose ou rien
        if($sql->num_rows() >=1)
        {
        return $donnes;
        }
        else
        {
        return $vide;
        }
  	}
  }
?>
