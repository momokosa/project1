<?php
class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_admin_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	// public function index(){
	// 	$data['title'] = 'Login';
    // 	$this->load->view('login/index', $data);
	// }

	public function index(){
		$data['title'] = 'Admin';

    	if($this->session->userdata('user_id')){
    		$this->load->view('main/index', $data);
    	}else{
            redirect('login', 'refresh');
        }



	}

}
