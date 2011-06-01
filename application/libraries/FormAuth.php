<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class FormAuth extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
    }


	function getAuthForm($name){
		//$this->load->library("session");
		if($name){
			$username = $name;
			$data["username"] = $username;
			
		}else{
			$data["username"] = "";
		}

		
		return $data;
		
	}
	
	function checkPerms($name){
		
		switch($name){
		
			case 'bfelix':
				$advanced_perms = 'YES';
				break;
			
			case 'ccomer':
				$advanced_perms = 'YES';
				break;
				
			default:
				$advanced_perms = 'NO';
		
		}
		
		
		return $advanced_perms;
	}
	
	

}
