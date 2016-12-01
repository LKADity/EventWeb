<?php 
/**
* 
*/
class Event extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}

	public function index() {
		$this->load->view('home');
	}

	public function form_registration() {
		$this->load->view('form_registration');
	}

	public function registration_process() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('ktp', 'KTP', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('poss', 'Poss', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form_registration');
		}else {
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			if ($this->input->post('gender') == 1) {
				$gender = 'L';
			}elseif($this->input->post('gender') == 2) {
				$gender = 'P';
			}else {
				$gender = 'O';
			}
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $password,
				'name' => $this->input->post('name'),
				'gender' => $gender,
				'date' => $this->input->post('date'),
				'email' => $this->input->post('email'),
				'ktp' => $this->input->post('ktp'),
				'contact' => $this->input->post('contact'),
				'address' => $this->input->post('address'),
				'poss' => $this->input->post('address'),
				'role' => 'user'
			);

			$result = $this->user_model->registration($data);

			if ($result) {
				echo "Success";
				die();
				$data['message_display'] = 'Registration Success';
				$this->load->view('login_form', $data);
			}else {
				$data['message_display'] = 'Registration Failed';
				$this->load->view('form_registration', $data);
			}
		}
	}

	public function form_login() {
		$this->load->view('form_login');
	}

	public function login_process() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form_login');
		}else {
			$data = array(
				'username' = $this->input->post('username'),
				'password' = $this->input->post('password')
			);

			$result = $this->user_model->login($data);
			if ($result) {
				$session_data = array(
					'username' => $data['Username'],
					'password' => $data['password']
				);
				$this->session->set_userdata('logged_in', $session_data);
				$this->load->view('home');
			}else {
				$data['error_message'] = "Username atau Password salah";
				$this->load->view('form_login', $data);
			}
		}
	}

}
 ?>