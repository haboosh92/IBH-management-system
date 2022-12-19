<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Calendar"; 
 $header=$view; 
switch ($view) {

	default :
		$content    = 'calendar.php';		
}
require_once ("../theme/templates.php");
?>
  
