<?php
	require('./function.php');
	if(empty($_POST)){
		exit();
	}
	switch ($_POST['operation']) {
		case 'letter_receiving':
			$working = new do_mysql();
			echo $working->insert_data($_POST['order'], $_POST['data']);
			break;
		default:
			# code...
			break;
	}
?>