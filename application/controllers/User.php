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

    //goto ticket ordering
    public function form_ticket_ordering() {
        $this->load->view('header');
        $this->load->view('form_ticket_ordering');
        $this->load->view('footer');
    }

    public function ticket_ordering() {
        //check if user already login or not
        if (isset($this->session->userdata['logged_in'])) {
            if ($this->session->userdata('logged_in')) {
                //check if form already filled
                $this->form_validation->set_rules('amount', 'jumlah');

                if ($this->form_validation->run() == FALSE) {
                    //when there are errors reload page
                    $this->load->view('form_ticket_ordering');
                }else {
                    //total ticker ordered
                    $total = $this->input->post('amount');
                    //input form into $data
                    $data = array(
                        'username' =>$this->session->userdata('username'), //username yang login
                        'status' => 0
                    );

                    //insert data to database
                    $result = $this->user_model->ticket_ordering($data);

                    if ($result) {
                        //if success when inserting data to database
                        echo "Success";
                        die();
                        $data['message_display'] = 'Ticket Ordering Success, Please wait until aproved by admin';
                        $this->load->view('home', $data);
                    }else {
                        //if failed when inserting data to database
                        $data['message_display'] = 'Ticket Ordering Failed';
                        $this->load->view('form_ticket_ordering', $data);
                    }
                }
            } else {
                //if user not logged in
                $this->load->view('header');
                $data['message_display'] = 'Please login first before order the ticket!';
                $this->load->view('form_login');
                $this->load->view('footer');
            }
        }
    }

    //goto performer registration
    public function form_registration_performer() {
        // $this->load->view('test_upphoto'); //pengetesan upload foto
        if ($this->session->userdata('logged_in')) {
            $this->load->view('header');
            $this->load->view('form_registration_performer');
            $this->load->view('footer');
        }else {
            $this->load->view('header');
            $data['message_display'] = 'Please login first before order the ticket!';
            $this->load->view('form_login');
            $this->load->view('footer');
        }
    }

    public function registration_performer() {
        //check if user already login or not
        //if (isset($this->session->userdata('logged_in'))) {
        if ($this->session->userdata('logged_in')) {
            //check if form already filled
            $this->form_validation->set_rules('name', 'Performer', 'required');
            $this->form_validation->set_rules('description', 'Deskripsi Performer', 'required');
    
            if ($this->form_validation->run() == FALSE) {
                //when there are errors reload page
                $this->load->view('form_registration_performer');
            }else {
                //upload the pictures algorithm start here
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
                    //end here
                }

                //input form into $data
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

                //insert data to database
                $result = $this->user_model->registration_performer($data);

                if ($result) {
                    //if success when inserting data to database
                    echo "Success";
                    die();
                    $data['message_display'] = 'Performer Registration Success, Please wait until aproved by admin';
                    $this->load->view('home', $data);
                }else {
                    //if failed when inserting data to database
                    $data['message_display'] = 'Performer Registration Failed';
                    $this->load->view('form_registration_performer', $data);
                }
            }
        } else {
            //if user not logged in
            $this->load->view('header');
            $data['message_display'] = 'Please login first before register the performer!';
            $this->load->view('form_login');
            $this->load->view('footer');
        }
    }

    //goto stand registration
    public function form_registration_stand()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('header');
            $this->load->view('form_registration_stand');
            $this->load->view('footer');
        }else {
            $this->load->view('header');
            $data['message_display'] = 'Please login first before order the ticket!';
            $this->load->view('form_login');
            $this->load->view('footer');
        }
    }

    public function registration_stand()
    {
        //if (isset($this->session->userdata('logged_in'))) {
        if ($this->session->userdata('logged_in')) {
            //check if form already filled
            $this->form_validation->set_rules('name', 'Stand', 'required');
            $this->form_validation->set_rules('description', 'Deskripsi Stand', 'required');
    
            if ($this->form_validation->run() == FALSE) {
                //when there are errors reload page
                $this->load->view('form_registration_stand');
            }else {
                //upload the pictures algorithm start here
                for($i = 1; $i <  3; $i++) {
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
                //end here

                //input form into $data
                $data = array(
                    'name' => $this->input->post('name'),
                    'description'=> $this->input->post('description'),
                    'pic1' => $name_file[0],
                    'pic2' => $nama_file[1],
                    'owner' =>$this->session->userdata('username'), //username yang login
                    'status' => 0
                );

                //insert data to database
                $result = $this->user_model->registration_stand($data);

                if ($result) {
                    //if success when inserting data to database
                    echo "Success";
                    die();
                    $data['message_display'] = 'Stand Registration Success, Please wait until aproved by admin';
                    $this->load->view('home', $data);
                }else {
                    //if failed when inserting data to database
                    $data['message_display'] = 'Stand Registration Failed';
                    $this->load->view('form_registration_stand', $data);
                }
            }
        } else {
            //if user not logged in
            $this->load->view('header');
            $data['message_display'] = 'Please login first before register the stand!';
            $this->load->view('form_login');
            $this->load->view('footer');
        }
    }
}
 ?>