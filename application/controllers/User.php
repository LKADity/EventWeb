<?php 
/**
* 
*/
class User extends CI_Controller {
	
	function __construct() {
		parent::__construct();
                $this->load->helper('url');
                $this->load->library(array('session', 'form_validation'));
                $this->load->database();
                $this->load->model('user_model');
	}

	

	public function form_registration_performer()
	{
		$this->load->view('form_registration_performer');
	}

	public function registration_performer($id,$name)
	{
		$this->form_validation->set_rules('name', 'Performer', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi Performer', 'required');
		$config['upload_path']          = './assets/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1280;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $this->load->view('upload_success', $data);
        }

        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('form_registration_performer');
        }else {
        	$data = array(
        		'name' => $this->input->post('name'),
        		'description'=> $this->input->post('description'),
                        //fotonya juga belum di masukin;
                        'title' => "performer",
                        'owner' =>$this->session->userdata('username') //username yang login
                        'status' => 1
        	);

        	$result = $this->user_model->registration_performer($data);

        	if ($result) {
        		echo "Success";
        		die();
        		$data['message_display'] = 'Performer Registration Success, Please wait until aproved by admin';
        		$this->load->view('home', $data);
        	}else {
        		$data['message_display'] = 'Performer Registration Failed';
        		$this->load->view('form_registration_performer', $data);
        	}
        }

	}

	public function form_registration_stand()
	{
		$this->load->view('form_registration_stand');
	}

	public function registration_stand($id,$name)
	{
		$this->form_validation->set_rules('name', 'Stand', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi Stand', 'required');
		$config['upload_path']          = './assets/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1280;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $this->load->view('upload_success', $data);
        }

        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('form_registration_stand');
        }else {
        	$data = array(
        		'name' => $this->input->post('name'),
        		'description'=> $this->input->post('description')
        		//fotonya juga belum di masukin;
                        'title' => "performer",
                        'owner' =>$this->session->userdata('username') //username yang login
                        'status' => 1
        	);

        	$result = $this->user_model->registration_stand($data);

        	if ($result) {
        		echo "Success";
        		die();
        		$data['message_display'] = 'Stand Registration Success, Please wait until aproved by admin';
        		$this->load->view('home', $data);
        	}else {
        		$data['message_display'] = 'Stand Registration Failed';
        		$this->load->view('form_registration_performer', $data);
        	}
        }
	}
}
 ?>