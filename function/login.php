<?php  
include("../connection/config.php");
include("OrphanDatabase.php");
session_start();
$class = new OrphanDatabase;
if(isset($_POST['login'])) {
	$username = $_POST['email'];
	$password = $_POST['password'];
	if (!empty($username) AND !empty($password)) {
		$result = $class->login($username,$password);
		if($result == true){
			header("Location:dashboard.php");
		} else {
			echo "<script>alert('username or password is incorrect');window.location.href='../index.php';</script>";
		}
	} else {
			echo "<script>alert('Dont leave me as empty');window.location.href='../index.php';</script>";
	}
}

?>