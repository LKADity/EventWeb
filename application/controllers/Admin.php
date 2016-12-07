<?php 
/**
* 
*/
class Admin extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session'));
		$this->load->database();
		$this->load->model('admin_model');
	}

	public function admin_page() {
		
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$user = $this->admin_model->select_user()->result();
				$performer = $this->admin_model->select_performer()->result();
				$stand = $this->admin_model->select_stand()->result();
				$data = array(
					'user' => $user,
					'performer' => $performer,
					'stand' => $stand
				);
				$this->load->view('header');
				$this->load->view('admin_page', $data);
				$this->load->view('footer');
			}else {
				$this->load->view('header');
	            $data['message_display'] = 'Please login first as admin!';
	            $this->load->view('form_login', $data);
	            $this->load->view('footer');	
			}
		}else {
			$this->load->view('header');
            $data['message_display'] = 'Please login first';
            $this->load->view('form_login', $data);
            $this->load->view('footer');
		}
	}
}
 ?>