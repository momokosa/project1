<?php
class Customers_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_customers(){
    	$query = $this->db->query('SELECT customers.id, national_id_card, name_title, first_name, middle_name, last_name, nick_name, 
		gender_id, gender_name, birthdate, religion_id, religion_name, address, 
		status_active, status_blacklist, status_name
		FROM customers
		LEFT JOIN master_religion ON customers.religion_id = master_religion.id
		LEFT JOIN master_gender ON customers.gender_id = master_gender.id
		LEFT JOIN customers_address ON customers.id = customers_address.customer_id
		LEFT JOIN master_blacklist ON customers.status_blacklist = master_blacklist.id');

		return $query;
    }
}
