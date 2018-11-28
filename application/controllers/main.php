<?php
class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_admin_model');
		$this->load->model('customers_model');
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
					$data['title'] = 'Dashboard';
			        $this->load->view('backend/templates/header', $data);
			        $this->load->view('backend/dashboard', $data);
			        $this->load->view('backend/templates/footer', $data);
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
    	}else{
            redirect('login', 'refresh');
        }
	}

	function isRole(){
		if($this->session->userdata('role') != '1'){
			redirect('main', 'refresh');
		}else{
			switch ($this->session->userdata('role')) {
				case '1':
					$data['user_role'] = 'Admin';
					break;
				case '2':
					$data['user_role'] = 'Front';
					break;
				case '3':
					$data['user_role'] = 'Sale';
					break;
				case '4':
					$data['user_role'] = 'Debt Tracking';
					break;
				default:
					$data['user_role'] = 'N/A';
					$this->session->set_flashdata(array('message'=> 'สิทธิ์ของบัญชีไม่ถูกต้อง'));
					redirect('login', 'refresh');
					break;
			}
			$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
			return $data;
		}
    }

	public function dashboard(){
		$data = $this->isRole();
        $data['title'] = 'Dashboard';
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/dashboard', $data);
        $this->load->view('backend/templates/footer', $data);
	}

	public function manage_users(){
		$data = $this->isRole();

		$data['users_data'] = $this->user_admin_model->get_users();

        $data['title'] = 'Manage Users';
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/manage_users', $data);
        $this->load->view('backend/templates/footer', $data);
	}
	
	public function manage_customers(){
		$data = $this->isRole();

		$data['users_data'] = $this->customers_model->get_customers();

        $data['title'] = 'Manage Customers';
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/manage_customers', $data);
        $this->load->view('backend/templates/footer', $data);
	}



}
