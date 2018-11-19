<?php
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_admin_model');
	}

	public function index(){
    	$this->load->view('login/index');
	}

}
