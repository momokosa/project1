<?php
class Main_function extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_gender(){
   	$query = $this->db->query('SELECT * FROM master_gender');
		return $query;
  }

	public function get_blacklist(){
   	$query = $this->db->query('SELECT * FROM master_blacklist');
		return $query;
  }

	public function get_religion(){
   	$query = $this->db->query('SELECT * FROM master_religion');
		return $query;
  }

	public function get_role(){
   	$query = $this->db->query('SELECT * FROM m_role');
		return $query;
  }
}
