<?php
	 try {
		 $obtion = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',);
		 $conn = new PDO('mysql:host=localhost;dbname=php_workshop_db', 'root', '',$obtion);
		 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 	// echo "เชื่อมต่อฐาน ztutor_testdb ได้";

		} catch(Exception $e) {
			// echo "ไม่สามารถเชื่อมต่อ db ได้";

		  exit('Unable to connect to database.');

	 }
 ?>

