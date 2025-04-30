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

			$sql = "SELECT el.*, e.profile_image as profile_image FROM `employees_login` as el, employees as e WHERE el.emp_id = e.id AND el.user_name = '$email' AND el.password = '$password' ";
            $query = $this->db->query($sql);
			//echo $this->db->last_query();
			//$query = $this->db->get_where('employees_login', array('user_name'=>$email, 'password'=>$password));
			if($query->num_rows() > 0 )
                return $query->row_array();
            else
                return false;
		}

	}
?>