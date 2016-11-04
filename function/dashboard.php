<?php 
include("../connection/config.php");
include"OrphanDatabase.php";
session_start();
if (!isset($_SESSION['email'])) {
	header('Location:../index.php');
}
?>
<html>
<head>
	<title>Dashboard</title>
	<?php include"../include/dependencies1.php"; ?>
</head>
	<body>
		<div class="container">
			<h2><p>Welcome to profile system database</p></h2>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<li class="active"><a class="navbar-brand" href="dashboard.php" style="color:yellow;">DASHBOARD</a></li>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="../pages/newlytransfer.php">NEWLY TRANSFER</a></li>
							<!-- <li><a href="#search" data-toggle="modal">SEARCH PERSON</a></li> -->
							<!-- <li><a href="admin/view_all.php">REGISTERED COUNTER <span class="badge" style="background-color: #3a87ad;">2</span> </a></li> -->
						</ul>
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search person." onkeyup="search(this.value)" id="text">
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHERS <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#"><p><?php echo $getsession = $_SESSION['email']; ?></p></a></li>
									<li><a href="logout.php"><p>Logout</p></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav><br>
			<div id="wrap" style="width:90%;margin-left:auto;margin-right:auto;">
				<div class="row">
					<div class="col-md-8">
						<div class="section"> 
							<div class="container"> 
								<div class="row"> 
									<div class="col-md-7">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Gender</th>
											</tr>
										</thead>
											<tbody>
												<tr>
													<td>1.</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td></tr><tr>
													<td>2</td>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td></tr><tr>
													<td>3</td>
													<td>Larry</td>
													<td>the Bird</td>
													<td>@twitter</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<?php 
						$count = new OrphanDatabase;
						$getgenderforMale = $count->countMale();
						$getgenderforFemale = $count->countFemale();
						$getgenderforTotal = $count->countTotalGender();
						 ?>
						<p>Number of registered orphan</p>
						<table cellborder="2" class="table ">
							<tr>
								<td><p>Male:</p></td>
								<td><p style="color:blue;"><?php echo $getgenderforMale['totalMale']; ?></p></td>
							</tr>
							<tr>
								<td><p>Female:</p></td>
								<td><p style="color:green;"><?php echo $getgenderforFemale['totalFemale']; ?></p></td>
							</tr>
							<tr>
								<td><p>Total Count:</p></td>
								<td><p style="color:red;"><?php echo $getgenderforTotal['total']; ?></p></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>