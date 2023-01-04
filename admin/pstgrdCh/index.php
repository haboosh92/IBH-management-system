<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Dean & Assistants"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		if($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Scientific affairs')
		{
			$content    = 'list.php';		
		}
		elseif($_SESSION['ACCOUNT_TYPE']=='Biology dep' )
		{
			$content    = 'listB.php';		
		}
		elseif($_SESSION['ACCOUNT_TYPE']=='Chemistry dep' )
		{
			$content    = 'listCh.php';		
		}
		elseif($_SESSION['ACCOUNT_TYPE']=='Mathematics dep' )
		{
			$content    = 'listM.php';		
			
		}
		else
		{
			$content    = 'listP.php';		
		};
		break;

	case 'add' :
		$content    = 'add.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;

    case 'view' :
		$content    = 'view.php';		
		break;

	default :
		$content    = 'list.php';		
}
require_once ("../theme/templates.php");
?>