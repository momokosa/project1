<?php
class Front extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_admin_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index(){
        $this->isRole();
		redirect('front/manageCustomer', 'refresh');
	}

    function isRole(){
    	if($this->session->userdata('user_id')){
			if($this->session->userdata('role') != '2'){
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
    					$data['user_role'] = 'Sell';
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
    	}else{
            redirect('main', 'refresh');
        }
    }

    public function manageCustomer(){
		$data = $this->isRole();
        $data['title'] = 'Manage Customer';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('main/admin/front_manage_customer', $data);
        $this->load->view('templates/admin_footer', $data);
	}

}
