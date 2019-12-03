<?php
class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_admin_model');
		$this->load->model('customers_model');
		$this->load->model('main_function');
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
					$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
			        $this->load->view('backend/templates/header', $data);
			        $this->load->view('backend/dashboard', $data);
			        $this->load->view('backend/templates/footer', $data);
					break;
				case '2':
					$data['user_role'] = 'Front';
					$data['title'] = 'Manage Customers';
					$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
					// redirect('front', 'refresh');
					redirect('main/manage_customers_search', 'refresh');
					break;
				case '3':
					$data['user_role'] = 'Sale';
					redirect('main/manage_customers_search', 'refresh');
					break;
				case '4':
					$data['user_role'] = 'Debt Tracking';
					$data['title'] = 'Dashboard';
					$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
			        $this->load->view('backend/templates/header', $data);
			        $this->load->view('backend/dashboard', $data);
			        $this->load->view('backend/templates/footer', $data);
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
		switch ($this->session->userdata('role')) {
			case '1':
				$data['user_role'] = 'Admin';
				$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
				break;
			case '2':
				$data['user_role'] = 'Front';
				$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
				break;
			case '3':
				$data['user_role'] = 'Sale';
				$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
				break;
			case '4':
				$data['user_role'] = 'Debt Tracking';
				$data['user_full_name'] = $this->session->userdata('first_name')." ".$this->session->userdata('last_name');
				break;
			default:
				$data['user_role'] = 'N/A';
				$this->session->set_flashdata(array('message'=> 'สิทธิ์ของบัญชีไม่ถูกต้อง'));
				redirect('login', 'refresh');
				break;
		}
		return $data;
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

	public function users_edit($id=null){
		$data = $this->isRole();
		$data['users_data'] = $this->user_admin_model->get_users($id)->result_array();
		$data['selectRole'] = $this->main_function->get_role()->result_array();
		$data['title'] = 'Edit Customers';
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/users_edit', $data);
		$this->load->view('backend/templates/footer', $data);
	}

	public function users_update(){
		$id = $this->input->post('id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$role = $this->input->post('role');
		$data = array (
			"first_name" => $fname,
			"last_name" => $lname,
			"role" => $role
		);
		$this->db->where('id', $id);
		if($this->db->update('user_admin', $data)){
			echo '<script>alert("บันทึกสำเส็จ"); window.location.href = "'.base_url().'main/users_edit/'.$id.'"</script>';
		}
	}
	
	public function manage_customers($status_blacklist=null){
		$data = $this->isRole();

		if($status_blacklist == null || $status_blacklist == ''){
			$data['title_status_blacklist'] = 'All';
		}else if($status_blacklist == '3'){
			$data['title_status_blacklist'] = 'VIPlist';
		}else if($status_blacklist == '2'){
			$data['title_status_blacklist'] = 'Blacklist';
		}else if($status_blacklist == '1'){
			$data['title_status_blacklist'] = 'Whitelist';
		}

		// $data['users_data'] = $this->customers_model->get_customers();
		$data['users_data'] = $this->customers_model->get_customers_as_status_blacklist($status_blacklist);		
        $data['title'] = 'Manage Customers';
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/manage_customers', $data);
        $this->load->view('backend/templates/footer', $data);
	}

	public function manage_customers_search(){
		$data = $this->isRole();

		$search_type = $this->input->post('search_type');
		$search_input = $this->input->post('search_input');
		$data['search_input'] = $search_input;

		if($search_type == null || $search_type == ''){
			$search_type = '1';
			$data['search_type'] = '1';
		}else{
			$data['search_type'] = $search_type;
		}
		
		$data['users_data'] = $this->customers_model->get_customers_as_search($search_type, $search_input);
		$data['title'] = 'Manage Customers';
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/manage_customers_search', $data);
        $this->load->view('backend/templates/footer', $data);
	}

	public function customers_edit($id=null){
		$data = $this->isRole();
		$data['users_data'] = $this->customers_model->get_customers($id)->result_array();
		$data['selectGender'] = $this->main_function->get_gender()->result_array();
		$data['selectBlacklist'] = $this->main_function->get_blacklist()->result_array();
		$data['selectReligion'] = $this->main_function->get_religion()->result_array();
		$data['title'] = 'Edit Customers';
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/customers_edit', $data);
		$this->load->view('backend/templates/footer', $data);
	}

	public function customers_update(){
		$id = $this->input->post('id');
		$titlename = $this->input->post('titlename');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$nname = $this->input->post('nname');
		$idcard = $this->input->post('idcard');
		$birthday = $this->input->post('birthday');
		$gender = $this->input->post('gender');
		$religion = $this->input->post('religion');
		$address = $this->input->post('address');
		$BW = $this->input->post('BW');
		$data = array (
			"national_id_card" => $idcard,
			"name_title" => $titlename,
			"first_name" => $fname,
			"last_name" => $lname,
			"nick_name" => $nname,
			"gender_id" => $gender,
			"birthdate" => $birthday,
			"religion_id" => $religion,
			"cust_address" => $address,
			"status_blacklist" => $BW
		);
		// $data_address = array (
		// 	"address" => $address,
		// 	"customer_id" => $id
		// );
		$this->db->where('id', $id);
		if($this->db->update('customers', $data)){

			// $query = $this->db->get_where('customers_address', array('customer_id' => $id));
			// if($query->num_rows()>0){
			// 	$this->db->update('customers_address', $data_address, array('customer_id' => $id));
			// }else{
			// 	$this->db->insert('customers_address', $data_address);
			// }
			echo '<script>alert("บันทึกสำเส็จ"); window.location.href = "'.base_url().'main/customers_edit/'.$id.'"</script>';
		}
	}
	
	public function new_customer(){
		$data = $this->isRole();
		$data['selectGender'] = $this->main_function->get_gender()->result_array();
		$data['selectBlacklist'] = $this->main_function->get_blacklist()->result_array();
		$data['selectReligion'] = $this->main_function->get_religion()->result_array();
		$data['title'] = 'New Customer';
		$this->load->view('backend/templates/header', $data);
        $this->load->view('backend/new_customer', $data);
        $this->load->view('backend/templates/footer', $data);
	}

	public function add_customer(){
		$this->load->helper('url');
		$this->load->helper('form');

		$this->customers_model->create_customer();

	}

	public function customers_profile(){
		$data = $this->isRole();

		$data['users_data'] = $this->customers_model->get_customers();

        $data['title'] = 'Manage Customers';
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/manage_customers', $data);
        $this->load->view('backend/templates/footer', $data);
	}

	/* test user git with Branch
	    public function customers_profile(){
    		$data = $this->isRole();

    		$data['users_data'] = $this->customers_model->get_customers();

            $data['title'] = 'Manage Customers';
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/manage_customers', $data);
            $this->load->view('backend/templates/footer', $data);
    	}
	*/
}
