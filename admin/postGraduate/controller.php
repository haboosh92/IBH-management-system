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
    }
}

?> 