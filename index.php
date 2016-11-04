<?php 
session_start();
if (isset($_SESSION['email'])) {
	header('Location:function/dashboard.php');
}
?>
<html>
	<head>
		<meta charset="UTF-8">
			<title>Login</title>
			<script src="js/prefixfree.min.js"></script>
			<link href="css/style.css" rel='stylesheet' type='text/css'/>
			<?php include"include/dependencies.php";?>
	</head>
	<body>	
		<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><span>KAMANGGAGAWA FOUNDATION INC.</span></div>
		</div>
			<br>
		<div class="login">
			<form action="function/login.php" method="POST">
				<h5 style="font-family:Calibri; color:white;" id="login">Home for Ederly and Persons with Disabilities</h5>
				<h2 style="font-family:Calibri; color:white;" id="login">Login</h2>
				<input id="login1" type="text" placeholder="Email Address" name="email"><br>
				<input id="login2" type="password" placeholder="Password" name="password"><br>
				<input id="login3" type="submit" name="login"><br><br>
			</form>	
			<p id="cap" style="font-family:Calibri; color:white;" >Free sign up for co-Admin&nbsp;<button id="toggle" type="submit" data-toggle="modal" href="#idko">Register</button>
			</form>
		</div>
		<div class="modal fade" id="idko" style="margin-top:10px; ">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2>Registered for new Admin&nbsp;
							<span>
								<img src="images/add.png" style="height:50px; width:50px;">
							</span>
					</h2>
					</div>
					<div class="modal-body">
						<form class="form">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-success" data-dismiss="modal">close</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

