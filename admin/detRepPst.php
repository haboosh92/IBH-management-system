<?php
require_once("../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}
$title =" Report page";


require_once ("theme/templates.php");
?>