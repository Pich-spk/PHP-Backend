<?php 
	include('conndb.php');
	// echo "<pre>";
	// print_r($_REQUEST);

	if(isset($_REQUEST['insert'])){
		$fname = $_REQUEST['fname'];
		$position = $_REQUEST['position'];
		$email = $_REQUEST['email'];
		$sql = " insert into db_contact(fname,position,email) values ('$fname','$position','$email') " ;
		$st = $conn->prepare($sql);
		if($st->execute()){
			echo 1;
		}else{
			echo 0;
		}
	}

