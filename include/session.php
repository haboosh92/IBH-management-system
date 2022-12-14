<?php
session_start(); //before we store information of our member, we need to start first the session
	
	//create a new function to check if the session variable member_id is on set
	function logged_in() {
		return isset($_SESSION['ACCOUNT_ID']);
        
	}
	//this function if session member is not set then it will be redirected to login.php
	function confirm_logged_in() {
		if (!logged_in()) {?>

			<script type="text/javascript">
				window.location = "login.php";
			</script>

		<?php
		}
	}
function admin_confirm_logged_in() {
		if (@!$_SESSION['ACCOUNT_ID']) {?>
			<script type="text/javascript">
				window.location ="login.php";
			</script>

		<?php
		}
	}

	function studlogged_in() {
		return isset($_SESSION['CUSID']);
        
	}
	function studconfirm_logged_in() {
		if (!studlogged_in()) {?>
			<script type="text/javascript">
				window.location = "index.php";
			</script>

		<?php
		}
	}

	function message($msg="", $msgtype="") {
	  if(!empty($msg)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['message'] = $msg;
	    $_SESSION['msgtype'] = $msgtype;
	  } else {
	    // then this is "get message"
			return $message;
	  }
	}
	function check_message(){
	
		if(isset($_SESSION['message'])){
			if(isset($_SESSION['msgtype'])){
				if ($_SESSION['msgtype']=="info"){
	 				echo  '<div class="alert alert-info">'. $_SESSION['message'] . '</div>';
	 				 
				}elseif($_SESSION['msgtype']=="error"){
					echo  '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
									
				}elseif($_SESSION['msgtype']=="success"){
					echo  '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
				}	
				unset($_SESSION['message']);
	 			unset($_SESSION['msgtype']);
	   		}
  
		}	

	}

function cusmsg($num=0){
  if(!empty($num)){
    $_SESSION['gcNotify'] = $num;
  }else{
    return $gcNotify;
  }
}

function notifycheck(){
  if(isset($_SESSION['gcNotify'])){
      echo $_SESSION['gcNotify'];
  }else{
      echo 0;
  }
  unset($_SESSION['gcNotify']);
}


 function keyactive($key=""){
 	 if(!empty($key)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['active'] = $key; 
	  } else {
	    // then this is "get message"
			return $keyactive;
	  }
  
 }

 function check_active(){
 	 if(isset($_SESSION['active'])){
         switch ($_SESSION['active']) {

        case 'basicInfo' :
        $_SESSION['basicInfo']   = "active";
        break;
        case 'otherInfo' :
        $_SESSION['otherInfo']= 'active';
        break;
        
        case 'work' :
        $_SESSION['work'] = 'active' ;
        break;
      }
      }else{

      	  $active = (isset($_GET['active']) && $_GET['active'] != '') ? $_GET['active'] : '';
                 switch ($active) {

                  case 'otherInfo' :
                   $_SESSION['otherInfo']= 'active';
        			break;

                  case 'work' :
                   $_SESSION['work'] = 'active' ;
       				 break;

                  default :

                    $_SESSION['basicInfo']   = "active";
       			 break;





     
        
      }
 }
}


function header_subheader($header,$subheader){

  $setheader = (isset($header) && $header != '') ? $header : '';

switch ($setheader) {
 

  case 'product' :
       echo $title="Products"  . (isset($subheader) ?  '  |  ' .$subheader: '' );   
   
  case 'cart' :
       echo $title="Cart List";   
    break;
  case 'profile' :
      echo  $title="Profile";  
    break;
  case 'orderdetails' : 
    echo $title = "Cart List/Order Details";
 
     break;

  case 'billing' :   
      echo $title = "Cart List/Order Details/Billing Details";
    break;

  case 'contact' :
      echo  $title="Contact Us";   
    break;
  case 'single-item' :
      echo  $ $title="Products"  . (isset($subheader) ?  '  |  ' .$subheader: '' ); 
    break;
  default :
   echo   $title="Home";  
  
}
}

function subject_exist($subjid){
    $subjid=intval($subjid);
    $max=count($_SESSION['gvCart']);
    $flag=0;
    for($i=0;$i<$max;$i++){
      if($subjid==$_SESSION['gvCart'][$i]['subjectid']){
        $flag=1;
        message("Item is already in the cart.","error");
        break;
      }
    }
    return $flag;
  }
 function addtocart($subjid){
    if($subjid<1) return;
    if (!empty($_SESSION['gvCart'])){


    if(is_array($_SESSION['gvCart'])){
      if(subject_exist($subjid)) return;
      $max=count($_SESSION['gvCart']);
      $_SESSION['gvCart'][$max]['subjectid']=$subjid; 
    }
    else{
     $_SESSION['gvCart']=array();
      $_SESSION['gvCart'][0]['subjectid']=$subjid; 
    }
}else{
     $_SESSION['gvCart']=array();
     $_SESSION['gvCart'][0]['subjectid']=$subjid; 
}
  
         message("1 Item added in the cart.","success");
}
  function removetocart($subjid){
    $subjid=intval($subjid);
    $max=count($_SESSION['gvCart']);
    for($i=0;$i<$max;$i++){
      if($subjid==$_SESSION['gvCart'][$i]['subjectid']){
        unset($_SESSION['gvCart'][$i]);
        break;
      }
    }
    $_SESSION['gvCart']=array_values($_SESSION['gvCart']);
  }


function adminsubject_exist($subjid){
    $subjid=intval($subjid);
    $max=count($_SESSION['admingvCart']);
    $flag=0;
    for($i=0;$i<$max;$i++){
      if($subjid==$_SESSION['admingvCart'][$i]['subjectid']){
        $flag=1;
        message("subject is already in the subject to be enrolled.","error");
        break;
      }
    }
    return $flag;
  }
 function adminaddtocart($subjid){
    if($subjid<1) return;
    if (!empty($_SESSION['admingvCart'])){


    if(is_array($_SESSION['admingvCart'])){
      if(adminsubject_exist($subjid)) return;
      $max=count($_SESSION['admingvCart']);
      $_SESSION['admingvCart'][$max]['subjectid']=$subjid; 
    }
    else{
     $_SESSION['admingvCart']=array();
      $_SESSION['admingvCart'][0]['subjectid']=$subjid; 
    }
}else{
     $_SESSION['admingvCart']=array();
     $_SESSION['admingvCart'][0]['subjectid']=$subjid; 
}
  
         message("1 subject added in the subject to be enrolled.","success");
}
  function adminremovetocart($subjid){
    $subjid=intval($subjid);
    $max=count($_SESSION['admingvCart']);
    for($i=0;$i<$max;$i++){
      if($subjid==$_SESSION['admingvCart'][$i]['subjectid']){
        unset($_SESSION['admingvCart'][$i]);
        break;
      }
    }
    $_SESSION['admingvCart']=array_values($_SESSION['admingvCart']);
  }


?>


