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
        if($_POST['FName'] == "" || $_POST['MName'] == "" || $_POST['LName'] == "" || $_POST['Surname'] == "" || $_POST['ContactNo'] == "" || $_POST['Email'] == "" || $_POST['Course'] == "" || $_POST['Date_Start'] == "" || $_POST['Date_Deadline'] ){
            $messageStats = false;
            message("full required fields please! ");
            redirect('index.php?view=add');
        }
        else{
           $pstStudent                  =       new postGraduateStd();
           $pstStudent->FName           =       $_POST['FName'];
           $pstStudent->MName           =       $_POST['MName'];
           $pstStudent->LName           =       $_POST['LName'];
           $pstStudent->Surname         =       $_POST['Surname'];
           $pstStudent->ContactNo       =       $_POST['ContactNo'];
           $pstStudent->email           =       $_POST['Email'];
           $pstStudent->ProgramType     =       $_POST['ProgramType'];
           $pstStudent->Course          =       $_POST['Course'];
           $pstStudent->Note            =       $_POST['Note'];
           $pstStudent->DateStart       =       date_format(date_create($_POST['DateStart']),'Y-m-d');
           $pstStudent->FinalDeadline   =       date_format(date_create($_POST['FinalDeadline']),'Y-m-d');
           $pstStudent->create();

           $studAuto = New Autonumber();
           $studAuto->studauto_update();

            message("New student created successfully!", "success");
           redirect("index.php");
        }
    }
}

?> 