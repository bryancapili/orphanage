<?php  
session_start();
if (!isset($_SESSION['email'])) {
	header('Location:../index.php');
}
?>
<html>
<head>
	<title>Newly Transfer</title>
	<?php include"../include/dependencies1.php"; ?>
	
</head>
	<body>
		<div class="container">
			<h2><p>Register New Person</p></h2>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<li class="active"><a class="navbar-brand" href="../function/dashboard.php">DASHBOARD</a></li>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<!-- <form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" name="post_" class="form-control" placeholder="Search person." onkeyup="search(this.value)" id="text">
							</div>
						</form> -->
						<ul class="nav navbar-nav">
							<li><a href="newlytransfer.php" style="color:yellow;">NEWLY TRANSFER</a></li>
							<li><a href="#search" data-toggle="modal">VIEW PROFILE</a></li>
							<!-- <li><a href="admin/view_all.php">REGISTERED COUNTER <span class="badge" style="background-color: #3a87ad;">2</span> </a></li> -->
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHERS<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<!-- <li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li> -->
									<!-- <li role="separator" class="divider"></li> -->
									<li><a href="#"><p><?php echo $getsession = $_SESSION['email']; ?></p></a></li>
									<!-- <li role="separator" class="divider"></li> -->
									<li><a href="../function/logout.php"><p>Logout</p></a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="modal fade" id="search" style="margin-top:10px; ">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<p>Auto search engine just type by Name</p>
								</div>
								<div class="modal-body">
									<form class="form">
										<div class="form-group">
											<input type="text" name="post_" class="form-control" placeholder="Search person." onkeyup="search(this.value)" id="text">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<a href="#" class="btn btn-success" data-dismiss="modal">close</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav><br>
			<div id="wrap" style="width:95%;margin-left:auto;margin-right:auto;">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<table class="table table-bordered">
							<tr>
								<td><p><b>KAMANGGAGAWA FOUDATION INC.</b></p></td>
								<td><p>Ctrl. No:</p></td>
								<td><p>KFI:001</p></td>
							</tr>
							<tr>
								<td><p>Home for Elderly and Persons with Disabilities</p></td>
								<td><p>Rev. No:</p></td>
								<td><p>001</p></td>
							</tr>
							<tr>
								<td><p><b>Intake Sheet</b></p></td>
								<td><p>Rev. Date:</p></td>
								<td><p>11032014</p></td>
							</tr>
						</table>
					</div>
				</div>
				<b><h3>I. Personal Information</h3></b>
				<p style="color:red;">Type <i>"None"</i> if not applicable.</p>
					<div class="row">			
			    		<form action="../function/newlyprocess.php" method="POST">
						<table class="table table-bordered">
							<tr>
								<td colspan="3"><p>Date of Interview:</p><input required type="date" name="dateofinterview" class="form-control" required></td>
								<td colspan="3"><p>Time:</p><input required type="text" name="post_time" class="form-control" placeholder="Enter time here..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Last Name:</p><input required type="text" name="post_lname" class="form-control" placeholder="Enter lastname here..."></td>
								<td colspan="2"><p>First Name:</p><input required type="text" name="post_fname" class="form-control" placeholder="Enter firstname here..."></td>
								<td colspan="2"><p>Middle Name:</p><input required type="text" name="post_mname" class="form-control" placeholder="Enter middlename here..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Age:</p><input required type="text" name="post_age" class="form-control" placeholder="Enter age here..."></td>
								<td colspan="2"><p>Gender<br><input required type="radio" name="post_gender" value="Male">MALE&nbsp;&nbsp;&nbsp;<input required type="radio" name="post_gender" value="Female">FEMALE</p></td>
								<td colspan="2"><p>Status</p><input required type="text" name="post_status" class="form-control" placeholder="Enter status here..."></td>
							</tr>
							<tr>
								<td colspan="5"><p>City Address:</p><input required type="text" name="post_cityaddress" class="form-control" placeholder="Enter Address here..."></td>
							</tr>
							<tr>
								<td colspan="5"><p>Provincial Address:</p><input required type="text" name="post_provincialaddress" class="form-control" placeholder="Enter Address here..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Contact Nos:</p><input required type="text" name="post_landlineno" class="form-control" placeholder="Enter landline no..."></td>
								<td colspan="2"><p>Mobile Nos:</p><input required type="text" name="post_mobileno" class="form-control" placeholder="Enter Mobile no..."></td>
								<td colspan="2"><p>E-mail:</p><input required type="email" name="post_email" class="form-control" placeholder="Enter e-mail..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Birthday:</p><input required type="date" name="post_birthday" class="form-control"></td>
								<td colspan="2"><p>Birthplace:</p><input required type="text" name="post_birthplace" class="form-control" placeholder="Enter place..."></td>
								<td colspan="2"><p>Birth mark:</p><input required type="text" name="post_birthmark" class="form-control" placeholder="Enter mark..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Religion:</p><input required type="text" name="post_religion" class="form-control" placeholder="Enter religion here..."></td>
								<td colspan="2"><p>Date of Baptized:</p><input required type="text" name="post_dateofbaptized" class="form-control" placeholder="Enter date of baptized here..."></td>
								<td colspan="2"><p>Locale:</p><input required type="text" name="post_locale" class="form-control" placeholder="Enter locale here..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Name of School last attended:</p><input required type="text" name="post_nameofschoollastattended" class="form-control" placeholder="Enter school here..."></td>
								<td colspan="2"><p>Reffering Party:</p><input required type="text" name="post_refferingparty" class="form-control" placeholder="Enter reffering party here..."></td>
								<td colspan="2"><p>Nature of Case:</p><input required type="text" name="post_natureofcase" class="form-control" placeholder="Enter nature of case here..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Gang Club:</p><input required type="text" name="post_gangclub" class="form-control" placeholder="Enter club here..."></td>
								<td colspan="2"><p>Medical problem upon Admission:</p><input required type="text" name="post_medicalproblemuponadmission" class="form-control" placeholder="Enter problem here..."></td>
								<td colspan="2"><p>Guardian if not staying with family:</p><input required type="text" name="post_guardianifnotstayingwwithfamily" class="form-control" placeholder="Enter guardian here..."></td>
							</tr>
							<tr>
								<td colspan="2"><p>Address:</p><input required type="text" name="post_address" class="form-control" placeholder="Enter address here..."></td>
								<td colspan="2"><p>Occupation:</p><input required type="text" name="post_occupation" class="form-control" placeholder="Enter occupation here..."></td>
								<td colspan="2"><p>Contact No:</p><input required type="text" name="post_contactno" class="form-control" placeholder="Enter contact no here..."></td>
							</tr>
						</table>
					</div>		
					<b><h3>A.Educational Background</h3></b>
				    <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					        <h4 class="panel-title">
						        <p style="color:blue;">Fill up all fields for educational background.</p>
						        </a>
					        </h4>
					    </div>
					    <div class="panel-body">
				        	<table class="table table-bordered">
				        		<tr>
				        			<td colspan="6">
				        				<p>Highest Educational Attainment:&nbsp;
				        				<input required type="radio" name="post_highesteducationalattainment" value="GRADE SCHOOL"> GRADE SCHOOL
				        				<input required type="radio" name="post_highesteducationalattainment" value="HIGH SCHOOL"> HIGH SCHOOL
				        				<input required type="radio" name="post_highesteducationalattainment" value="COLLEGE SCHOOL"> COLLEGE SCHOOL
				        				<input required type="radio" name="post_highesteducationalattainment" value="POST GRAD"> POST GRAD
				        				</p>
				        			</td>
				        		</tr>
				        		<tr>
				        			<td><p>School:</p></td>
									<td><input required type="text" name="post_shool" class="form-control" placeholder="Enter school here..."></td>
									<td><p>Course:</p></td>
									<td><input required type="text" name="post_course" class="form-control" placeholder="Enter course here..."></td>
									<td><p>Year Level:</p></td>
									<td><input required type="text" name="post_yearlevel" class="form-control" placeholder="Enter year level here..."></td>
				        		</tr>
				        		<tr>
									<td><p>License No:</p></td>
									<td><input required type="text" name="post_licenseno" class="form-control" placeholder="Enter license no here..."></td>
									<td><p>Skills:</p></td>
									<td  colspan="3"><input required type="text" name="post_skills" class="form-control" placeholder="Enter skills here..."></td>
				        		</tr>
				        	</table>
				        </div>
				    </div>
					<b><h3>B.Employment Record</h3></b>
				    <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					        <h4 class="panel-title">
						        <p style="color:blue;">Fill up all fields for employment record.</p>
						        </a>
					        </h4>
					    </div>
				       <div class="panel-body">
				        	<table class="table table-bordered">
					        	<thead>
					        		<tr>
					        			<td><p>Latest Employer</p></td>
					        			<td><p>Address</p></td>
					        			<td><p>Position</p></td>
					        			<td><p>Inclusive Dates</p></td>
					        			<td><p>Supervisor</p></td>
					        		</tr>
					        	</thead>	
					        	<tbody>
					        		<tr>
					        			<td><input required type="text" name="post_latestemployer" class="form-control" placeholder="Enter latest employer here..."></td>
					        			<td><input required type="text" name="post_address" class="form-control" placeholder="Enter address here..."></td>
					        			<td><input required type="text" name="post_position" class="form-control" placeholder="Enter position here..."></td>
					        			<td><input required type="text" name="post_inclusivesdates" class="form-control" placeholder="Enter inclusive dates here..."></td>
					        			<td><input required type="text" name="post_supervisor" class="form-control" placeholder="Enter supervisor here..."></td>
					        		</tr>
					        		
					        	</tbody>
				        	</table>	
				        </div>
				    </div>
					<b><h3>C.Family Composition</h3></b>
				    <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					        <h4 class="panel-title">
						         <p style="color:blue;">Fill up all fields for family composition.</p>
						        </a>
					        </h4>
					    </div>
				        <div class="panel-body">
				        	<table class="table table-bordered">
					        	<thead>
					        		<tr>
					        			<td><p>Name</p></td>
					        			<td><p>Relationship to the client</p></td>
					        			<td><p>Age</p></td>
					        			<td><p>Educattional attainment</p></td>
					        			<td><p>Occupation</p></td>
					        			<td><p>Income</p></td>
					        		</tr>
					        	</thead>
					        	<tbody>
					        		<tr>
					        			<td><input type="text" name="post_name" class="form-control" placeholder="Enter name here..."></td>
					        			<td><input type="text" name="post_relationship" class="form-control" placeholder="Enter relationship here..."></td>
					        			<td><input type="text" name="post_ages" class="form-control" placeholder="Enter age here..."></td>
					        			<td><input type="text" name="post_educ" class="form-control" placeholder="Enter educational attainment here..."></td>
					        			<td><input type="text" name="post_occupation" class="form-control" placeholder="Enter occupation here..."></td>
					        			<td><input type="text" name="post_income" class="form-control" placeholder="Enter income here..."></td>
					        		</tr>
					        	</tbody>
					        </table>		
				        </div>
				    </div>
				</div>
				<p>All data above are true</p><input type="submit" class="btn btn-primary">&nbsp;&nbsp;<input type="reset" value="Clear" class="btn btn-danger"><br><br><br><br>
						</form>
			</div>
		</div>	
	</body>
</html>
