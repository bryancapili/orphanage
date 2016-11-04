<?php 
	$host = "localhost";
	$db = "orphanage";
	$root = "root";	
	try {
		$handler = new PDO("mysql:host=".$host.";dbname=".$db."","".$root."","");
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}

?>