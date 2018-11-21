<?php
class Login extends CI_Controller {

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
		$data['title'] = 'Sign In';

		$this->load->view('login/index', $data);
	}

	public function signin(){
		$data['title'] = 'Sign In';

	    $username = $this->input->post('username');
		$pass = $this->input->post('pass');
		if($username != '' && $pass != ''){
			$query = $this->user_admin_model->get_user($username, $pass);

			if ($query->num_rows() > 0){
				$row = $query->row();
				$this->session->set_userdata(array(
					'user_id'=>$row->id,
					'username'=>$row->username,
					'employee_id'=>$row->employee_id,
					'first_name'=>$row->first_name,
					'last_name'=>$row->last_name,
					'role'=>$row->role));

				redirect('main', 'refresh');
			}else{
				$this->session->set_flashdata(array('message'=> 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'));
				redirect(base_url(), 'refresh');
			}
		}else{
			$this->session->set_flashdata(array('message'=> 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'));
			redirect('login', 'refresh');
		}
	}

	public function signout(){
		$data['title'] = 'Sign In';

		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}

}
