<?php 

	function mymessage($message)
	{
		echo '
		<div class="alert alert-danger">
			<button data-dismiss="alert" class="close" type="button">×</button> '.$message.'
		</div>
		';
	}

	function successmessage($message)
	{
		echo '
		<div class="alert alert-success">
			<button data-dismiss="alert" class="close" type="button">×</button> '.$message.'
		</div>
		';
	}

	if ( ! function_exists('get_notes'))
	{
		function get_notes() {
			$CI =&  get_instance();
			$CI->load->database();
			$sessionUser = $CI->session->userdata('user_loggedin');

			$data = $CI->admin_model->get_daily_notes();
			if ($data) {
				return $data;
			} else
				return false;
			
		}
	}
	
	if ( ! function_exists('get_booking'))
	{
		function get_booking() {
			$CI =&  get_instance();
			$CI->load->database();
			$sessionUser = $CI->session->userdata('user_loggedin');

			$data = $CI->admin_model->get_yesterday_booking();
			if ($data) {
				return $data;
			} else
				return false;
			
		}
	}

?>