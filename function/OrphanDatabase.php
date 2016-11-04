<?php  

class OrphanDatabase {

	public function login($username,$password) {
		try {
			global $handler;
			$sql = "select * from login_table where username =:uname and password =:pass";
			$query = $handler->prepare($sql);
			$query->execute(array(':uname'=>$username,':pass' => $password));
			$result = $query->fetch(PDO::FETCH_ASSOC);
			$_SESSION['email'] = $result['username'];
			if ($result) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function insertdata(
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
		){
		try {
			global $handler;
			$sql = "insert into personalinformation(
					dateofinterview,
					timeofinterview,
					lname,
					fname,
					mname,
					p_age,
					p_gender,
					p_status,
					p_cityaddress,
					p_provincialaddress,
					p_landline,
					p_mobile,
					p_email,
					p_birthday,
					p_birthplace,
					p_birthmark,
					p_religion,
					p_dateofbaptized,
					p_locale,
					p_nameofschoollastattended,
					p_refferingparty,
					p_natureofcase,
					p_gangclub,
					p_medicalproblemuponadmission,
					p_guardianifnotstayingwwithfamily,
					p_address,
					p_occupation,
					p_contactno
				)values(
					'{$dateofinterview}',
					'{$post_time}',
					'{$post_lname}',
					'{$post_fname}',
					'{$post_mname}',
					'{$post_age}',
					'{$post_gender}',
					'{$post_status}',
					'{$post_cityaddress}',
					'{$post_provincialaddress}',
					'{$post_landlineno}',
					'{$post_mobileno}',
					'{$post_email}',
					'{$post_birthday}',
					'{$post_birthplace}',
					'{$post_birthmark}',
					'{$post_religion}',
					'{$post_dateofbaptized}',
					'{$post_locale}',
					'{$post_nameofschoollastattended}',
					'{$post_refferingparty}',
					'{$post_natureofcase}',
					'{$post_gangclub}',
					'{$post_medicalproblemuponadmission}',
					'{$post_guardianifnotstayingwwithfamily}',
					'{$post_address}',
					'{$post_occupation}',
					'{$post_contactno}'
				)";
			$query=$handler->query($sql);
			// $query->execute(array(
			// 		':key_dateofinterview'=>$dateofinterview,
			// 		':key_time'=>$post_time,
			// 		':key_lname'=>$post_lname,
			// 		':key_fname'=>$post_fname,
			// 		':key_mname'=>$post_mname,
			// 		':key_age'=>$post_age,
			// 		':key_gender'=>$post_gender,
			// 		':key_status'=>$post_status,
			// 		':key_cityaddress'=>$post_cityaddress,
			// 		':key_provincialaddress'=>$post_provincialaddress,
			// 		':key_landlineno'=>$post_landlineno,
			// 		':key_mobileno'=>$post_mobileno,
			// 		':key_email'=>$post_email,
			// 		':key_birthday'=>$post_birthday,
			// 		':key_birthplace,'=>$post_birthplace,
			// 		':key_birthmark'=>$post_birthmark,
			// 		':key_religion'=>$post_religion,
			// 		':key_dateofbaptized'=>$post_dateofbaptized,
			// 		':key_locale'=>$post_locale,
			// 		':key_nameofschoollastattended'=>$post_nameofschoollastattended,
			// 		':key_refferingparty'=>$post_refferingparty,
			// 		':key_natureofcase'=>$post_natureofcase,
			// 		':key_gangclub'=>$post_gangclub,
			// 		':key_medicalproblemuponadmission'=>$post_medicalproblemuponadmission,
			// 		':key_guardianifnotstayingwwithfamily'=>$post_guardianifnotstayingwwithfamily,
			// 		':key_address'=>$post_address,
			// 		':key_occupation'=>$post_occupation,
			// 		':key_contactno'=>$post_contactno
			// 	));
			if ($query) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function countMale() {
		try {
			global $handler;
			$sql = "select count(p_gender) as totalMale from personalinformation where p_gender = :male";
			$query = $handler->prepare($sql);	
			$query->execute(array(':male'=>'Male'));
			$result = $query->fetch();
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}	

	public function countFemale() {
		try {
			global $handler;
			$sql = "select count(p_gender) as totalFemale from personalinformation where p_gender = :female";
			$query = $handler->prepare($sql);	
			$query->execute(array(':female'=>'Female'));
			$result = $query->fetch();
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function countTotalGender() {
		try {
			global $handler;
			$sql = "select count(p_gender) as total from personalinformation";
			$query = $handler->query($sql);	
			$result = $query->fetch();
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}	

	public function inserteducationalbackground(
		$post_highesteducationalattainment,
		$post_shool,
		$post_course,
		$post_yearlevel,
		$post_licenseno,
		$post_skills){
		try {
			global $handler;
			$sql = "insert into educationalbackground(
				e_highesteducationalattainment,
				e_school,
				e_course,
				e_yearlevel,
				e_licenseno,
				e_skills
				)values(
				'{$post_highesteducationalattainment}',
				'{$post_shool}',
				'{$post_course}',
				'{$post_yearlevel}',
				'{$post_licenseno}',
				'{$post_skills}'
				)";
			$query = $handler->query($sql);
			if($query == true){
				return true;
			} else {
				return false;
			}
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
	
	public function insertemployementrecord($post_latestemployer,$post_address,$post_position,$post_inclusivesdates,$post_supervisor){
		try{
			global $handler;
			$sql ="insert into employementrecord(latestemployer,address,position,inclusivesdates,supervisor)
			values(
				'{$post_latestemployer}',
				'{$post_address}',
				'{$post_position}',
				'{$post_inclusivesdates}',
				'{$post_supervisor}'
				)";
			$query = $handler->query($sql);
			if($query == true){
				return true;
			} else {
				return false;
			}
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}



?>