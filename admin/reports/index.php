<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}
//$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$title =" Report page";
//$header=$view; 

// currently I'm making one report page for postgraduate ... next step it's gonna be report page for students and other stuff ,,, 
$content = 'RHome.php';

require_once ("../theme/templates.php");
?>