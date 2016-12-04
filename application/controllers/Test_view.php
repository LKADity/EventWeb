<?php 
/**
* 
*/
class Test_view extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function footer() {
		$this->load->view('footer');
	}

	public function form_login() {
		$this->load->view('form_login');
	}

	public function form_registration() {
		$this->load->view('form_registration');
	}

	public function header() {
		$this->load->view('header');
	}

	public function home() {
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

}
 ?>