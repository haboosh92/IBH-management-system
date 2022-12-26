<?php 
require_once("../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/login.php");
     } 

$content='home.php';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) {
	// case 'grades' :
    //     $title="Home page";	
	// 	$content = 'studentgrades.php';		
	// 	break;	
	default :
	  $title="Home";	
	    if ($_SESSION['ACCOUNT_TYPE'] =='Administrator') {
	    	$content ='home.php';	
	    }
		elseif ($_SESSION['ACCOUNT_TYPE'] =='Student affairs'){
	    	$content = 'StdHome.php';
	    }
		elseif ($_SESSION['ACCOUNT_TYPE'] =='Scientific affairs'){
	    	$content ='SciHome.php';
		}
		elseif ($_SESSION['ACCOUNT_TYPE'] =='HR'){
			$content ='HRhome.php';
		}
		elseif ($_SESSION['ACCOUNT_TYPE'] =='Chemistry dep'){
			$content ='Chemistry.php';
		}
		elseif ($_SESSION['ACCOUNT_TYPE'] =='Computer dep'){
			$content ='Computer.php';
		}
		elseif ($_SESSION['ACCOUNT_TYPE'] =='Biology dep'){
			$content ='bio.php';
		}
		elseif ($_SESSION['ACCOUNT_TYPE'] =='Mathematics dep'){
			$content = 'math.php';
		}
	    else{
	     $content = 'physics.php';
	    }
			
}

require_once("theme/templates.php");
?>