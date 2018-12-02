<?php
class User_admin_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_user($username, $pass){
    	$query = $this->db->get_where('user_admin', array('username' => $username, 'password' => $pass));
		return $query;
    }

	public function get_users($id=null){
			$condition = '';
			if($id != '' || $id != null){
				$condition .= ' AND user_admin.id = "'.$id.'" ';
			}
    	$query = $this->db->query('SELECT user_admin.id, username, first_name, last_name, employee_id, m_role.id AS role_id, role_name
			FROM user_admin
			LEFT JOIN m_role ON user_admin.role = m_role.id
			WHERE 1=1 '.$condition.'');
		return $query;
    }
}
