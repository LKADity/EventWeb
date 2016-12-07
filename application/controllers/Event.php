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

	//goto home
	public function index() {
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	//goto form_registration
	public function form_registration() {
		$this->load->view('header');
		$this->load->view('form_registration');
		$this->load->view('footer');
	}

	public function registration_process() {
		//check if form already filled
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('ktp', 'KTP', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('poss', 'Code Post', 'required');

		if ($this->form_validation->run() == FALSE) {
			//when there are error
			$this->load->view('form_registration');
		}else {
			//hash password for safety
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

			//check gender
			if ($this->input->post('gender') == 1) {
				$gender = 'L';
			}elseif($this->input->post('gender') == 2) {
				$gender = 'P';
			}else {
				$gender = 'O';
			}

			//insert form to $data
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

			//insert data to database
			$result = $this->user_model->registration($data);

			if ($result) {
				//if success when inserting data to database
				$data['message_display'] = 'Registration Success';
				$this->load->view('header');
				$this->load->view('form_login',$data);
				$this->load->view('footer');
			}else {
				//if failed when inserting data to database
				$data['message_display'] = 'Registration Failed';
				$this->load->view('form_registration', $data);
			}
		}
	}

	//goto form login
	public function form_login() { 
		$this->load->view('header');
		$this->load->view('form_login');
		$this->load->view('footer');
	}

	public function login_process() {
		//check if form already filled
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			//when there are error
			$this->load->view('form_login');
		}else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

			//check username and password
			$result = $this->user_model->login($data);
			
			if ($result) {
				//when username and password confirmed
				//insert username and password to session
				$session_data = array(
					'username' => $data['username'],
					'password' => $data['password']
				);
				$this->session->set_userdata('logged_in', $session_data);
				$data['message_display'] = "Successfully login";
				$this->load->view('header');
				$this->load->view('home', $data);
				$this->load->view('footer');
			}else {
				//when username or password wrong
				$data['error_message'] = "Username atau Password salah";
				$this->load->view('form_login', $data);
			}
		}
	}

	//goto about us view
	public function view_about_us() {
		$this->load->view('header');
		$this->load->view('about_us');
		$this->load->view('footer');
	}

	//goto venue view
	public function view_venue() {
		$this->load->view('header');
		$this->load->view('venue');
		$this->load->view('footer');
	}

	//goto lineup view
	public function view_lineup() {
		$data['lineup'] = $this->user_model->select_lineUp()->result();
		$this->load->view('header');
		$this->load->view('lineup',$data);
		$this->load->view('footer');
	}

	//goto contact view
	public function view_contact() {
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	//logout
	public function logout() {
		$this->session->unset_userdata('logged_in');
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

}
 ?>








