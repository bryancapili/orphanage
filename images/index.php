<?php 
include "excess/notice.php";
include "config.php";
include "DAO.php";
session_start();
if ($_SESSION['userlevel']) {
	header('Location:admin.php');
} elseif ($_SESSION['userlevel']) {
	header('Location:users.php');
}	
?>
<!DOCTYPE html>
<html>	
<head>
<title>Login Page</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css">
</head>
<body>
	<div class="login-07">
		<div class="seventh-login">
			<h3>LOGIN </h3>
			<form class="seven" action="login.php" method="POST">
				<ul>
					<li>
						<input type="text"  name="email" placeholder="EMAIL ADDRESS" />
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"  name="password" placeholder="PASSWORD" />
						<div class="clear"> </div>
					</li>
					<input type="submit"  value="Sign in"> <br><br>
			</form>
		</div>
			<center style="margin-top:1%; color:white;">Free Sign up | <button  class=" btn btn-primary show-modal" href="#id"  data-toggle="modal" style="margin-bottom:10px;">Register</button></center>
	</div>
	<div class="modal fade" id="id" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<p style="font-family:Calibri; font-size:30px; ">Fill out the form</p>
				</div>
				<div class="modal-body">
					<form action="register.php" method="POST">
							<label for="exampleInputEmail1">Firstname</label>
							<input  type="text" id="fname" class="form-control"  name="Fname" required>
							<label for="exampleInputEmail1">Lastname</label>
							<input  type="text" id="lname" class="form-control"  name="Lname" required>
							<label for="exampleInputEmail1">Email</label>
							<input  type="email" id="email" class="form-control"  name="Email" required>
							<span class="red" id="PASSWORD"><label for="exampleInputEmail1">Password</label></span>
							<input  type="password" id="Pass" class="form-control"  name="Pass" >
							<span class="red" id="CONFIRM_PASSWORD"><label for="exampleInputEmail1">Confirm Password</label></span>
							<input  type="password" id="Con_pass" class="form-control"  name="Conf">
						</div>
						<div class="modal-footer">		
							<button type="submit" class="btn btn-success"  href="register.php">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
   		<div class="copy-right">
   			<div class="wrap">
				<p>Copyright &copy; 2016  All rights reserved  &nbsp;<a href="https://web.facebook.com/laverdad.apalit/" target="_blank"><br><img src="images/fb.png" style="height:30px; margin-top:10px; width:30px; "></a></p>
		</div>
	</div> 	
</body>
</html>
<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/validate.js"></script>