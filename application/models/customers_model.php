<?php
class Customers_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_customers($id=null){
		$condition = '';
		if($id != '' || $id != null){
			$condition .= ' AND customers.id = "'.$id.'" ';
		}
		$query = $this->db->query('SELECT customers.id, national_id_card, name_title, first_name, middle_name, last_name, nick_name, 
			gender_id, gender_name, birthdate, religion_id, religion_name, address, 
			status_active, status_blacklist, status_name
			FROM customers
			LEFT JOIN master_religion ON customers.religion_id = master_religion.id
			LEFT JOIN master_gender ON customers.gender_id = master_gender.id
			LEFT JOIN customers_address ON customers.id = customers_address.customer_id
			LEFT JOIN master_blacklist ON customers.status_blacklist = master_blacklist.id
			WHERE 1=1 '.$condition.' ');
			//echo $query; exit;
			return $query;
	}
	
	public function get_customers_as_status_blacklist($status_blacklist=null){
		$condition = '';
		if($status_blacklist != '' || $status_blacklist != null){
			$condition .= ' AND customers.status_blacklist = "'.$status_blacklist.'" ';
		}
		$query = $this->db->query('SELECT customers.id, national_id_card, name_title, first_name, middle_name, last_name, nick_name, 
			gender_id, gender_name, birthdate, religion_id, religion_name, address, 
			status_active, status_blacklist, status_name
			FROM customers
			LEFT JOIN master_religion ON customers.religion_id = master_religion.id
			LEFT JOIN master_gender ON customers.gender_id = master_gender.id
			LEFT JOIN customers_address ON customers.id = customers_address.customer_id
			LEFT JOIN master_blacklist ON customers.status_blacklist = master_blacklist.id
			WHERE 1=1 '.$condition.' ');
			// echo $query; exit;
			return $query;
	}
	
	public function create_customer(){
		$this->load->helper('url');

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
			"status_blacklist" => $BW
		);

		$query = $this->db->get_where('customers', array('national_id_card' => $idcard));
		if($query->num_rows()>0){
			echo '<script>alert("มีเลขบัตรประชาชนนี้ในระบบอยู่แล้ว"); window.location.href = "'.base_url().'main/new_customer"</script>';
		}else{
			$this->db->insert('customers', $data);
			$insert_id = $this->db->insert_id();
			
			$data_address = array (
				"address" => $address,
				"customer_id" => $insert_id
			);
			$this->db->insert('customers_address', $data_address);

			echo '<script>alert("บันทึกสำเส็จ"); window.location.href = "'.base_url().'main/customers_edit/'.$insert_id.'"</script>';
		}

	}
}
