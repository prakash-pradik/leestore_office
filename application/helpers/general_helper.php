<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

	if ( ! function_exists('get_title'))
	{
		function get_title() {
			$CI =&  get_instance();
			$CI->load->database();
			$sessionUser = $CI->session->userdata('admin_loggedin');

			if(isset($sessionUser) && isset($sessionUser['store_id'])){

				$store_id = $sessionUser['store_id'];
				$data = $CI->admin_model->get_data('stores', array('id'=> $store_id), 'row');
				if ($data) {
					$get_title = $data->store_name;
					if ($get_title) {            
						return $get_title;
					}else{
						return 0;
					}
				}
			} else{
				return "Lee Admin";
			}
		}
	}

?>