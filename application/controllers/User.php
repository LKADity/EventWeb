<?php 
/**
* 
*/
class User extends CI_Controller {
	
	function __construct() {
		
	}

	

	public function form_registration_performer()
	{
		$this->load->view('registration_performer');
	}

	public function registration_performer($id,$name)
	{
		# code...
	}

	public function form_registration_stand()
	{
		$this->load->view('registration_stand');
	}

	public function registration_stand($id,$name)
	{
		# code...
	}
}
 ?>