<?php 
require_once("../../include/initialize.php");
        if(!isset($_SESSION['ACCOUNT_ID'])){
            redirect(web_root."admin/index.php");
        }
        $action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';       
switch($action) {
    case 'add' : 
    doInsert();
    break;

    case 'edit' :
    doEdit();
    break;
    
    case 'delete' :
    doDelete();
    break;

}

function doInsert(){
    global $mydb;
    if(isset($_POST['submit'])){
                $studAuto = New Autonumber();
                $Id = $studAuto->set_autonumber("Id");

        $FName           =       $_POST['FName'];       //array keys should match the names in the add files not the id's 
        $MName           =       $_POST['MName'];
        $LName           =       $_POST['LName'];
        $Surname         =       $_POST['Surname'];
        $ContactNo       =       $_POST['ContactNo'];
        $Email           =       $_POST['Email'];
        $ProgramType     =       $_POST['ProgramType'];
        $Course          =       $_POST['Course'];
        $Note            =       $_POST['Note'];
        $Date_Start      =       date_format(date_create($_POST['Date_Start']),'Y-m-d');
        $Final_Deadline  =       date_format(date_create($_POST['Final_Deadline']),'Y-m-d');
        $Author          =       $_SESSION['ACCOUNT_NAME'];

         if($_POST['FName'] == "" || $_POST['MName'] == "" || $_POST['LName'] == "" || $_POST['Surname'] == "" ||
          $_POST['ContactNo'] == "" || $_POST['Email'] == "" || $_POST['Course'] == "" || $_POST['Date_Start'] == "" || $_POST['Date_Deadline'] ){
             $messageStats = false;
             message("full required fields please! ");
             redirect('index.php?view=add');
         }
        else{
           $pstStudent                  =       new postGraduateStd();
           $pstStudent->FName           =       $FName;
           $pstStudent->MName           =       $MName;
           $pstStudent->LName           =       $LName;
           $pstStudent->Surname         =       $Surname;
           $pstStudent->ContactNo       =       $ContactNo;
           $pstStudent->Email           =       $Email;
           $pstStudent->ProgramType     =       $ProgramType;
           $pstStudent->Course          =       $Course;
           $pstStudent->Note            =       $Note;
           $pstStudent->Date_Start      =       $Date_Start;
           $pstStudent->Final_Deadline  =       $Final_Deadline ;
           $pstStudent->Author 			=       $Author;
           $pstStudent->create();


           $studAuto = New Autonumber(); 
           $studAuto->auto_update("Id");
          // $studAuto->auto_update($Id); // not sure which one is true
            message("New student created successfully!", "success");
           redirect("index.php");
         }
     }
 }



 function doEdit(){

    global $mydb; 

if(isset($_POST['save'])){  
        $studAuto = New Autonumber();
        $Id = $studAuto->set_autonumber("Id");

        $FName           =       $_POST['FName'];       //array keys should match the names in the add files not the id's 
        $MName           =       $_POST['MName'];
        $LName           =       $_POST['LName'];
        $Surname         =       $_POST['Surname'];
        $ContactNo       =       $_POST['ContactNo'];
        $Email           =       $_POST['Email'];
        $ProgramType     =       $_POST['ProgramType'];
        $Course          =       $_POST['Course'];
        $Note            =       $_POST['Note'];
        $Date_Start      =       date_format(date_create($_POST['Date_Start']),'Y-m-d');
        $Final_Deadline  =       date_format(date_create($_POST['Final_Deadline']),'Y-m-d');
        $Author          =       $_SESSION['ACCOUNT_NAME'];



        if($_POST['FName'] == "" || $_POST['MName'] == "" || $_POST['LName'] == "" || $_POST['Surname'] == "" ||
        $_POST['ContactNo'] == "" || $_POST['Email'] == "" || $_POST['Course'] == "" || $_POST['Date_Start'] == "" || $_POST['Date_Deadline'] ){
           $messageStats = false;
           message("full required fields please! ");
           redirect('index.php?view=add');
       }
      else{
         $pstStudent                  =       new postGraduateStd();
         $pstStudent->FName           =       $FName;
         $pstStudent->MName           =       $MName;
         $pstStudent->LName           =       $LName;
         $pstStudent->Surname         =       $Surname;
         $pstStudent->ContactNo       =       $ContactNo;
         $pstStudent->Email           =       $Email;
         $pstStudent->ProgramType     =       $ProgramType;
         $pstStudent->Course          =       $Course;
         $pstStudent->Note            =       $Note;
         $pstStudent->Date_Start      =       $Date_Start;
         $pstStudent->Final_Deadline  =       $Final_Deadline ;
         $pstStudent->Author 			=       $Author;
         $pstStudent->update($Id);

          message("Student has been updated!", "success");
        redirect("index.php");
         
        }
    }
}

?> 