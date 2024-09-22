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

?>