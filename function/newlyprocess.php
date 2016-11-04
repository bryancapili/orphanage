<?php 
include"../connection/config.php";
include"OrphanDatabase.php";

$dateofinterview = $_POST['dateofinterview'];
$post_time = $_POST['post_time'];
$post_lname = $_POST['post_lname'];
$post_fname = $_POST['post_fname'];
$post_mname = $_POST['post_mname'];
$post_age = $_POST['post_age'];
$post_gender = $_POST['post_gender'];
$post_status = $_POST['post_status'];
$post_cityaddress = $_POST['post_cityaddress'];
$post_provincialaddress = $_POST['post_provincialaddress'];
$post_landlineno = $_POST['post_landlineno'];
$post_mobileno = $_POST['post_mobileno'];
$post_email = $_POST['post_email'];
$post_birthday = $_POST['post_birthday'];
$post_birthplace = $_POST['post_birthplace'];
$post_birthmark = $_POST['post_birthmark'];
$post_religion = $_POST['post_religion'];
$post_dateofbaptized = $_POST['post_dateofbaptized'];
$post_locale = $_POST['post_locale'];
$post_nameofschoollastattended = $_POST['post_nameofschoollastattended'];
$post_refferingparty = $_POST['post_refferingparty'];
$post_natureofcase = $_POST['post_natureofcase'];
$post_gangclub = $_POST['post_gangclub'];
$post_medicalproblemuponadmission = $_POST['post_medicalproblemuponadmission'];
$post_guardianifnotstayingwwithfamily = $_POST['post_guardianifnotstayingwwithfamily'];
$post_address = $_POST['post_address'];
$post_occupation = $_POST['post_occupation'];
$post_contactno = $_POST['post_contactno'];
$post_highesteducationalattainment = $_POST['post_highesteducationalattainment'];
$post_shool = $_POST['post_shool'];
$post_course = $_POST['post_course'];
$post_yearlevel = $_POST['post_yearlevel'];
$post_licenseno = $_POST['post_licenseno'];
$post_skills = $_POST['post_skills'];
$post_latestemployer = $_POST['post_latestemployer'];
$post_address = $_POST['post_address'];
$post_position = $_POST['post_position'];
$post_inclusivesdates = $_POST['post_inclusivesdates'];
$post_supervisor = $_POST['post_supervisor'];
// $post_name = $_POST['post_name'];
// $post_relationship = $_POST['post_relationship'];
// $post_ages = $_POST['post_ages'];
// $post_educ = $_POST['post_educ'];
// $post_occupation = $_POST['post_occupation'];
// $post_income = $_POST['post_income'];
$instance = new OrphanDatabase;
$result = $instance->insertdata(
		$dateofinterview,
		$post_time,
		$post_lname,
		$post_fname,
		$post_mname,
		$post_age,
		$post_gender,
		$post_status,
		$post_cityaddress,
		$post_provincialaddress,
		$post_landlineno,
		$post_mobileno,
		$post_email,
		$post_birthday,
		$post_birthplace,
		$post_birthmark,
		$post_religion,
		$post_dateofbaptized,
		$post_locale,
		$post_nameofschoollastattended,
		$post_refferingparty,
		$post_natureofcase,
		$post_gangclub,
		$post_medicalproblemuponadmission,
		$post_guardianifnotstayingwwithfamily,
		$post_address,
		$post_occupation,
		$post_contactno
		// $post_name,
		// $post_relationship,
		// $post_ages,
		// $post_educ,
		// $post_occupation,
		// $post_income	
	);
	if ($result == true) {
		$result1 = $instance->inserteducationalbackground(
		$post_highesteducationalattainment,
		$post_shool,
		$post_course,
		$post_yearlevel,
		$post_licenseno,
		$post_skills
			);
		if($result1 == true);
			$result2 = $instance->insertemployementrecord(
			$post_latestemployer,
			$post_address,
			$post_position,
			$post_inclusivesdates,
			$post_supervisor
				);
				if($result2 == true){
					echo "<script>alert('successfully inserted');window.location.href='../pages/newlytransfer.php';</script>";
				}
	} else {
		echo "no";
	}
?>