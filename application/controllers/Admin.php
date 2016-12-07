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
				$ticket = $this->admin_model->select_ticket()->result();
				$data = array(
					'user' => $user,
					'performer' => $performer,
					'stand' => $stand,
					'ticket' => $ticket
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

	public function acc_performer($id) {
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$update = $this->admin_model->acc_performer($id);
				if ($update) {
					$data['message_display'] = 'acc performer success';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = 'acc performer failed';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}
			}else {
				$$this->load->view('header');
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

	public function acc_stand($id) {
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$update = $this->admin_model->acc_stand($id);
				if ($update) {
					$data['message_display'] = 'acc stand success';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = 'acc stand failed';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}
			}else {
				$$this->load->view('header');
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

	public function acc_ticket($id) {
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$update = $this->admin_model->acc_ticket($id);
				if ($update) {
					$data['message_display'] = 'acc ticket success';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = 'acc ticket failed';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}
			}else {
				$$this->load->view('header');
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

	public function dec_performer($id) {
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$update = $this->admin_model->dec_performer($id);
				if ($update) {
					$data['message_display'] = 'dec performer success';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = 'dec performer failed';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}
			}else {
				$$this->load->view('header');
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

	public function dec_stand($id) {
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$update = $this->admin_model->dec_stand($id);
				if ($update) {
					$data['message_display'] = 'dec stand success';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = 'dec stand failed';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}
			}else {
				$$this->load->view('header');
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

	public function dec_ticket($id) {
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$update = $this->admin_model->dec_ticket($id);
				if ($update) {
					$data['message_display'] = 'dec ticket success';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = 'dec ticket failed';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}
			}else {
				$$this->load->view('header');
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

	public function del_user($id) {
		if (isset($this->session->userdata['logged_in'])) {
			if ($this->session->userdata['role']['role'] == 'admin') {
				$update = $this->admin_model->del_user($id);
				if ($update) {
					$data['message_display'] = 'delete user success';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = 'delete user failed';
					$this->load->view('header');
					$this->load->view('admin_page', $data);
					$this->load->view('footer');
				}
			}else {
				$$this->load->view('header');
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