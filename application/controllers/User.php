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

	public function form_ticket_ordering() {
                $this->load->view('form_ticket_ordering');
    }

    public function ticket_ordering() {
        $this->form_validation->set_rules('amount', 'jumlah');

        if ($this->form_validation->run() == FALSE) {
                $this->load->view('form_ticket_ordering');
        }else {
            $total = $this->input->post('amount');
            $data = array(
                'username' =>$this->session->userdata('username'), //username yang login
                'status' => 0
            );

            $result = $this->user_model->ticket_ordering($data);

            if ($result) {
                    echo "Success";
                    die();
                    $data['message_display'] = 'Ticket Ordering Success, Please wait until aproved by admin';
                    $this->load->view('home', $data);
            }else {
                    $data['message_display'] = 'Ticket Ordering Failed';
                    $this->load->view('form_ticket_ordering', $data);
            }
        }
    }

    public function form_registration_performer() {
        $this->load->view('test_upphoto');
		/*$this->load->view('form_registration_performer');*/
	}

	public function registration_performer()
	{
		$this->form_validation->set_rules('name', 'Performer', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi Performer', 'required');
		
                if ($this->form_validation->run() == FALSE) {
                	$this->load->view('form_registration_performer');
                }else {
                        
                        $session_data['username'] = 'babi';
                        $this->session->set_userdata('logged_in', $session_data);

                        for($i = 1; $i <  5; $i++) {
                                $no = 'photo'.$i;
                                if ($_FILES[$no]['name'] != NULL) {
                                        $filename = $this->session->userdata['logged_in']['username']."_".time()."_".$_FILES[$no]['name'];
                                        $name_file[] = $filename;
                                        $config = array(
                                                'upload_path' => './assets/uploads/',
                                                'allowed_types' => 'jpg|png|jpeg',
                                                'overwrite' =>TRUE,
                                                'max_size' => '2048000',
                                                'max_height' => '768',
                                                'max_width' => '1024',
                                                'file_name' => $filename
                                        );
                                        $this->load->library('upload', $config);
                                        if ($this->upload->do_upload($no)) {
                                                echo "Success";
                                        }else {
                                               echo "failed";
                                        }
                                }else {
                                        $nama_file[] = '-';
                                }
                                
                        }

                	$data = array(
                		'name' => $this->input->post('name'),
                		'description'=> $this->input->post('description'),
                                'pic1' => $name_file[0],
                                'pic2' => $nama_file[1],
                                'pic3' => $nama_file[2],
                                'pic4' => $nama_file[3],
                                'title' => "performer",
                                'owner' =>$this->session->userdata('username'), //username yang login
                                'status' => 0
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

	public function registration_stand()
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
        		'description'=> $this->input->post('description'),
        		//fotonya juga belum di masukin;
                        'title' => "performer",
                        'owner' =>$this->session->userdata('username'), //username yang login
                        'status' => 0
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