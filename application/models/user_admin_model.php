<?php
class User_admin_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_user($username, $pass){
    	$query = $this->db->get_where('user_admin', array('username' => $username, 'password' => $pass));
		return $query;
    }
}
