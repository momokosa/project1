<?php
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_admin_model');
		$this->load->helper('url');
	}

	public function index(){
		$data['title'] = 'Login';
    	$this->load->view('login/index', $data);
	}

}
