<?php
class Allpage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['title'] = 'All PAGE';

		$this->load->view('allpage/index', $data);
	}

}
