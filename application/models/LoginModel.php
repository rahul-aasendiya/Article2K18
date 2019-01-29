<?php 
class Loginmodel extends CI_Model
{
	public function login_valid($User,$Pass)
	{
		//$Pass=md5($Pass);
		$q=$this->db
		->where(['uname'=>$User,'pword'=>$Pass])
		->get('users');
		if ($q->num_rows()) {
			return $q->row()->id;
		}else{
			return false;
		}
	}
}