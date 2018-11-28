<?php
class User_admin_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_user($username, $pass){
    	$query = $this->db->get_where('user_admin', array('username' => $username, 'password' => $pass));
		return $query;
    }

	public function get_users(){
    	$query = $this->db->query('SELECT user_admin.id, username, first_name, last_name, employee_id, role_name
			FROM user_admin
			LEFT JOIN m_role ON user_admin.role = m_role.id');
		return $query;
    }
}
