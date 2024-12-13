<?php
	class Login_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function login($email, $password)
		{
			$query = $this->db->get_where('admin', array('name'=>$email, 'password'=>$password));
			return $query->row_array();
		}

		public function login_staff($email, $password)
		{
			$query = $this->db->get_where('employees_login', array('user_name'=>$email, 'password'=>$password));
			return $query->row_array();
		}

	}
?>