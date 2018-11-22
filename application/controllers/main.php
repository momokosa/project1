<?php
class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_admin_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index(){
		$data['title'] = 'Main';
		$data['user_role'] = 'N/A';
		$data['user_full_name'] = 'User full name';

    	if($this->session->userdata('user_id')){
			switch ($this->session->userdata('role')) {
				case '1':
					$data['user_role'] = 'Admin';
					redirect('admin', 'refresh');
					break;
				case '2':
					$data['user_role'] = 'Front';
					redirect('front', 'refresh');
					break;
				case '3':
					$data['user_role'] = 'Sell';
					redirect('sell', 'refresh');
					break;
				case '4':
					$data['user_role'] = 'Debt Tracking';
					redirect('debt', 'refresh');
					break;
				default:
					$data['user_role'] = 'N/A';
					$this->session->set_flashdata(array('message'=> 'สิทธิ์ของบัญชีไม่ถูกต้อง'));
					redirect('login', 'refresh');
					break;
			}
			// $data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
			//
    		// $this->load->view('templates/admin_header', $data);
			// $this->load->view('main/admin', $data);
			// $this->load->view('templates/admin_footer', $data);
    	}else{
            redirect('login', 'refresh');
        }
	}

}
