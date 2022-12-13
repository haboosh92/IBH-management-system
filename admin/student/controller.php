<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;

	case 'addgrade' :
	doUpdateGrades();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

	case 'setofficer' :
	doSetOfficer();
	break;

    case 'resetpassword' :
	doResetPassword();
	break;
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['submit'])){ 
			if ($_POST['FNAME'] == "" OR $_POST['MNAME'] == "" OR $_POST['LNAME'] == ""
				OR $_POST['SNAME'] =="" OR $_POST['optionsRadios'] == ""  OR $_POST['CIVILS'] == "" OR $_POST['DOB'] == "" OR $_POST['ADR'] == ""
				OR $_POST['RELIGION'] == "" OR $_POST['NATIONALTY'] == "" OR $_POST['EmA'] == "" OR $_POST['CONTACT'] == "" OR $_POST[''] == ""
				OR $_POST['COURSEID'] == ""  OR $_POST['CT'] == "" OR $_POST['NOTE'] == "") {
				$messageStats = false;
				message("All field is required!","error");
				redirect('index.php?view=add');
			}else{	

					$age = date_diff(date_create($_POST['DOB']),date_create('today'))->y;
					 if ($age < 15){
					       message("Invalid age. 15 years old and above is allowed.", "error");
					       redirect("index.php?view=view&id=".$_POST['IDNO']);

					    }else{

							
							$student = New Student(); 
							$student->FName 		= $_POST['FNAME'];
							$student->MName 		= $_POST['MNAME'];
							$student->LName 		= $_POST['LNAME'];
							$student->Surname 		= $_POST['SNAME'];
							$student->Address 		= $_POST['ADR'];
							$student->Sex 			= $_POST['optionsRadios'];
							$student->CivilS 		= $_POST['CIVILS'];
							$student->DOB 			= date_format(date_create($_POST['DOB']),'Y-m-d');
							$student->POB 			= $_POST['POB'];
							$student->NATIONALITY 	= $_POST['NATIONALITY'];
							$student->RELIGION 		= $_POST['RELIGION'];
							$student->CONTACT_NO	= $_POST['CONTACT'];
							$student->Email 		= $_POST['EmA'];
							$student->COURSE_NAME   = $_POST['COURSEID'];
							$student->Course_type 	= $_POST['CT'];
							$student->HOME_ADD 		= $_POST['PADDRESS'];
							$student->Note	 		= $_POST['NOTE'];
							$student->create();


							$studetails = New StudentDetails();
							$studetails->IDNO 				= $_POST['STUDID'];
							$studetails->GUARDIAN	 	= $_POST['GUARDIAN'];
							$studetails->GCONTACT 		= $_POST['GCONTACT'];
							$studetails->create();
				  
							$sql= "SELECT * FROM `subject` s, `course` c WHERE s.`COURSE_ID`=c.`COURSE_ID` AND CURRICULUM='New Curriculum' AND c.`COURSE_ID`=".$_POST['COURSEID'];
							$mydb->setQuery($sql);
							$res = $mydb->loadResultList();
							foreach ($res as $row) {
								# code...
								$studentsubject = New StudentSubjects();
								$studentsubject->IDNO 		= $_POST['STUDID'];
								$studentsubject->SUBJ_ID	= $row->SUBJ_ID;
								$studentsubject->LEVEL 		= $row->YEARLEVEL;
								$studentsubject->SEMESTER 	= $row->SEMESTER;
								$studentsubject->SY 		= $_POST['SY'];
								$studentsubject->ATTEMP 	= 1; 
								$studentsubject->create();

								$grade = New Grade();
								$grade->IDNO = $_POST['STUDID'];
								$grade->SUBJ_ID	 = $row->SUBJ_ID;
								$grade->SEMS     = $row->SEMESTER;
								$grade->create();
							}

							$studAuto = New Autonumber();
							$studAuto->studauto_update();

							 message("New student created successfully!", "success");
							redirect("index.php");
						}
				
			}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

// $sql="SELECT * FROM tblstudent WHERE ACC_USERNAME='" . $_POST['USER_NAME'] . "'";
// $userresult = mysql_query($sql) or die(mysql_error());
// $userStud  = mysql_fetch_assoc($userresult);

// if($userStud){
// 	message("Username is already in used.", "error");
//     redirect(web_root."admin/student/index.php?view=view&id=".$_POST['IDNO']);
// }else{
	$age = date_diff(date_create($_POST['BIRTHDATE']),date_create('today'))->y;
 if ($age < 15){
       message("Invalid age. 15 years old and above is allowed.", "error");
       redirect("index.php?view=view&id=".$_POST['IDNO']);

    }else{
    	$stud = New Student();
		$stud->FNAME 				= $_POST['FNAME'];
		$stud->LNAME 				= $_POST['LNAME'];
		$stud->MNAME 				= $_POST['MI'];
		$stud->SEX 					= $_POST['optionsRadios'];
		$stud->BDAY 				= date_format(date_create($_POST['BIRTHDATE']),'Y-m-d');
		$stud->BPLACE 				= $_POST['BIRTHPLACE'];
		$stud->STATUS 				= $_POST['CIVILSTATUS'];
		$stud->NATIONALITY			= $_POST['NATIONALITY'];
		$stud->RELIGION 			= $_POST['RELIGION'];
		$stud->CONTACT_NO 			= $_POST['CONTACT'];
		$stud->HOME_ADD 			= $_POST['PADDRESS'];
		// $stud->ACC_USERNAME 		= $_POST['USER_NAME']; 
		$stud->update($_POST['IDNO']);


		$studetails = New StudentDetails();
		$studetails->GUARDIAN	 	= $_POST['GUARDIAN'];
		$studetails->GCONTACT 		= $_POST['GCONTACT'];
		$studetails->update($_POST['IDNO']);

		message("Student has been updated!", "success");
		redirect("index.php?view=view&id=".$_POST['IDNO']);
    }
			
	 
// }

		}
	}


	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$subj = New User();
		// 	$subj->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$subj = New Subject();
	 		 	$subj->delete($id);
			 
			message("User already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}

	function doUpdateGrades(){
		global $mydb;


		if(isset($_POST['save'])){ 
			$idno = $_POST['IDNO'];
			$subid =$_POST['SUBJ_ID'];

				$pre="";
				$idno = $_POST['IDNO'];
				// echo $prerequisite = $_POST['PRE_REQUISITE'];


				// // echo $array_subjcode = explode(',',$prerequisite);
		 
			 //   //  foreach ($array_subjcode as $subjcode) {
				// 	 // echo   $subjcode;
				 
				// 	$sql = "SELECT * FROM subject s,grades g WHERE s.`SUBJ_ID`=g.`SUBJ_ID` AND s.`SUBJ_CODE` in ('{$prerequisite}') AND IDNO='{$idno}'";
				// 	$mydb->setQuery($sql);
				// 	$pre = $mydb->loadSingleResult(); 
		 
				// 	if ($pre->AVE < 75) {
				// 		# code...
				// 		echo "Cannot take this subject";
				// 	}else{
				// 		echo "Save";
				// 	}
				// }
 
			// $remark = '';
			// if($_POST['AVERAGE']>=75){
			// 	$remark = 'Passed';
			// }else{
			// 	$remark = 'Failed';
			// }

			// $grade = New Grade();  
			// $grade->AVE					= $_POST['AVERAGE']; 
			// $grade->REMARKS				= $remark;  
			// $grade->update($_POST['GRADEID']);


			// $studentsubject = New StudentSubjects(); 
			// $studentsubject->AVERAGE	= $_POST['AVERAGE'];
			// $studentsubject->OUTCOME 	=  $remark; 
			// $studentsubject->updateSubject($_POST['SUBJ_ID'],$_POST['IDNO']);

 
			// message("[". $_POST['SUBJ_CODE'] ."] has been updated!", "success");
			//  redirect("index.php?view=grades&id=".$_POST['IDNO']);
		}
	} 
 
 function doSetOfficer(){
 	global $mydb;

 	if ($_GET['status']=='Set Officer') {
 		# code...

 		$status = 'Officer';
 		$ID = $_POST['ID'];
 		message("A new officer has been added!", "success");

 		$sql= "SELECT * FROM tblstudent WHERE IDNO='".$ID."'";
 		$mydb->setQuery($sql);
 		$stud = $mydb->loadSingleResult();


		$user = New User();
		$user->EMPID 				= $stud->IDNO;
		$user->POSITION 			= $_POST['POSITION'];
		$user->ACCOUNT_NAME 		= $stud->FNAME . ' '. $stud->LNAME;
		$user->ACCOUNT_USERNAME		= $stud->ACC_USERNAME;
		$user->ACCOUNT_PASSWORD		= $stud->ACC_PASSWORD;
		$user->ACCOUNT_TYPE			= 'Officer';
		$user->create();

 	}else{

 		$status = 'Student';
 		$ID = $_GET['id'];
 		message("Officer has been deactivated!", "success");

		$sql= "DELETE FROM useraccounts WHERE EMPID='".$_GET['id']."'";
 		$mydb->setQuery($sql); 
 	}

    $sql ="UPDATE `tblstudent` SET `ACCOUNTTYPE` ='".$status."' WHERE `IDNO`='".$ID."'";
 	$mydb->setQuery($sql); 

	
	redirect("index.php");
 }

 function doResetPassword()
{
	global $mydb;

	$sql = "SELECT * FROM `tblstudent` WHERE `IDNO`='".$_GET['id']."'";
	$mydb->setQuery($sql);
	$res  = $mydb->loadSingleResult();

			$stud = New Student(); 
			$stud->ACC_PASSWORD = sha1($res->IDNO);
			$stud->update($res->IDNO);
	# code...
	
		if ($res->ACCOUNTTYPE=='Officer') {
			# code...
				$user = New User();
				$user->ACCOUNT_PASSWORD =  sha1($res->IDNO);
				$user->update_officer($res->IDNO);

		
		}
		redirect("index.php");
		message("Password has been reset!","info");
}
?>