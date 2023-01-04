<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title;?></title>

     <!-- Bootstrap Core CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">
<script src="<?php echo web_root; ?>admin/select2/select2.min.css"></script>  
<link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet"> 
<!-- Custom Fonts -->
<link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> 
<link rel="stylesheet" href="<?php echo web_root; ?>admin/css/jquery-ui.css"> 
<link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
<style type="text/css">
    #imglogo{
        width: 100px;
    }

 
</style>
</head>


<?php


admin_confirm_logged_in();

  
?>
      
<body >
 
   <div id="wrapper"> 
        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-static-top  " role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="<?php echo web_root; ?>admin/index.php" >IBH College Management Admin Portal</a>
            </div> 

            <ul class="nav navbar-nav  navbar-top-links navbar-right"> 
                <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') { ?>
                 
                <?php }?>
                <?php
                 $user = New User();
                 $singleuser = $user->single_user($_SESSION['ACCOUNT_ID']);
                 $sql = "SELECT * FROM `tblstudent` , `useraccounts` WHERE IDNO = `EMPID` AND ACCOUNT_ID = ".$_SESSION['ACCOUNT_ID'];
                 $mydb->setQuery($sql);  
                 $res = $mydb->loadSingleResult(); 
                ?>  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        Hi, <?php echo $singleuser->ACCOUNT_NAME; ?> <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-acnt">
                    
                      <?php if ($_SESSION['ACCOUNT_TYPE']=='Student affairs') { ?>
                        <div class="divtxt">
                          <li><a href="<?php echo web_root; ?>index.php?q=profile"> <?php echo $singleuser->ACCOUNT_NAME; ?> </a> 
                          <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a></li> 
                        </div>
                     <?php }else{  ?>
                         <div class="divtxt">
                          <li><a href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"> <?php echo $singleuser->ACCOUNT_NAME; ?> </a>
                          <li><a title="Edit" href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"  >Edit My Profile</a></li> 
                          <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a></li> 
                        </div>
                       <?php   } ?>  
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul> 
            <!-- /.navbar-top-links --> 
            <div class="sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu">
                        <li class="logohead">  
                                <?php if ($_SESSION['ACCOUNT_TYPE']=='Officer') {
                              # code...
                              echo '<img   data-target="#usermodal"  data-toggle="modal" src="'.web_root.'/student/'.$res->STUDPHOTO.'" />';
                            }else{ ?>  
                                <img data-target="#usermodal"  data-toggle="modal" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>" /> 
                          <?php   } ?>  
                          
                            <br/>
                            <br/> 
                          <div ></div>   
                        </li> 
                        <li>
                            <a href="<?php echo web_root; ?>admin/index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>  
   
                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Student affairs' ) {  ?>
                        <li>
                             <a href="<?php echo web_root; ?>admin/student/index.php" ><i class="fa fa-group fa-fw"></i>  Students <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>  <a href="<?php echo web_root; ?>admin/student/index.php" ><i class="fa fa-circle-o fa-fw"></i>  Computer Science </a></li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/student/index.php"><i class="fa fa-circle-o fa-fw"></i> Math </a>
                                </li> 
                                <li>  <a href="<?php echo web_root; ?>admin/student/index.php" ><i class="fa fa-circle-o fa-fw"></i>  Chemistry </a></li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/student/index.php"><i class="fa fa-circle-o fa-fw"></i> Biology </a>
                                </li> 
                                <li>  <a href="<?php echo web_root; ?>admin/student/index.php" ><i class="fa fa-circle-o fa-fw"></i>  Physics </a></li> 
                         </ul>
                        </li> 
                        <?php } ?>
                        <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='HR'  ) {  ?>
                        <li>
                             <a href="#" ><i class="fa fa-user fa-fw"></i>  Documents workflow  <span class="fa arrow"></span> </a>
                             <ul class="nav nav-second-level">
                                <li>  <a href="<?php echo web_root; ?>admin/HRInbox/index.php" ><i class="fa fa-circle-o fa-fw"></i>  Inbox </a></li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/HROutbox/index.php"><i class="fa fa-circle-o fa-fw"></i> Outbox </a>
                                </li> 
                             </ul>
                        </li> 
                        <li>
                             <a href="<?php echo web_root; ?>admin/announcement/index.php" ><i class="fa fa-microphone fa-fw"></i>  Announcement </a>
                    
                        </li> 
                      <?php } ?>
                      <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Scientific affairs' || $_SESSION['ACCOUNT_TYPE']=='Student affairs' ) {  ?>
                        <li>
                             <a href="<?php echo web_root; ?>admin/calendar/index.php" ><i class="fa fa-calendar fa-fw"></i> Calender  </a>
                    
                        </li> 
                        <?php }  ?>
                        <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Scientific affairs' || $_SESSION['ACCOUNT_TYPE']=='Mathematics dep' || $_SESSION['ACCOUNT_TYPE']=='Biology dep' || $_SESSION['ACCOUNT_TYPE']=='Chemistry dep' || $_SESSION['ACCOUNT_TYPE']=='Physics dep') {  ?>
                        <li>
                            <a href="<?php echo web_root; ?>admin/postGraduate/index.php" ><i class="fa fa-graduation-cap fa-fw"></i> Post Graduate <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li><a href="<?php echo web_root; ?>admin/postGraduate/index.php" ><i class="fa fa-circle-o fa-fw"></i> Math </a></li> 
                                <li><a href="<?php echo web_root; ?>admin/postGraduate/index.php" ><i class="fa fa-circle-o fa-fw"></i> Chemistry </a></li> 
                                <li><a href="<?php echo web_root; ?>admin/postGraduate/index.php" ><i class="fa fa-circle-o fa-fw"></i> Biology </a></li> 
                                <li><a href="<?php echo web_root; ?>admin/postGraduate/index.php" ><i class="fa fa-circle-o fa-fw"></i> Physics </a></li>
                             </ul>
                        </li>

                        <li>
                            <a href="<?php echo web_root; ?>admin/user/index.php" ><i class="fa fa-user fa-fw"></i> Users </a> 
                        </li> 
                         <?php }  ?>
                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator'  ) {  ?>
                        <li>
                            <a href="<?php echo web_root; ?>admin/report/index.php" ><i class="fa fa-info fa-fw"></i> Report </a> 
                        </li>
                        <?php } ?>
 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

        

           <div id="page-wrapper">
            <div class="row" > 
                <div class="col-lg-12"> 
                   <?php   check_message();  ?>  
                    <?php 
                    if ($title<>'Home'){
                       echo   '  <p>  <a href="'. web_root.'admin/index.php" title="Home" >Home</a>  / 
                        <a href="index.php" title="'. $title.'" >'. $title.'</a> 
                        '.(isset($header) ? ' / '. $header : '') .'</p>'  ;
                    } ?>
 
                  <?php require_once $content; ?> 
                  </div>
                         <!-- /.col-lg-12 --> 
              </div>
              <!-- /.row --> 
          </div>
          <!-- /#page-wrapper --> 


    </div>
    <!-- /#wrapper --> 
 

    <!-- Modal -->
        <div class="modal fade" id="usermodal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                    </div>

                    <form action="<?php echo web_root; ?>admin/user/controller.php?action=photos" enctype="multipart/form-data" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="rows">
                                    <div class="col-md-12">
                                                <div class="rows">
                                                    <img title="profile image" width="500" height="360" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                                                </div>
                                            </div><br/>
                                            <div class="col-md-12">
                                                <div class="rows">
                                                    <div class="col-md-8">
                                                        <input type="hidden" name="MIDNO" id="MIDNO" value="<?php echo $_SESSION['ACCOUNT_ID']; ?>">
                                                        <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> <input id="photo" name="photo" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> <button class="btn btn-primary" name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
  
<!-- jQuery -->
<script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script> 
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo web_root; ?>admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo web_root; ?>admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo web_root; ?>admin/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo web_root; ?>admin/select2/select2.full.min.js"></script>
<script src="<?php echo web_root; ?>admin/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script> 



<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 
 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/meiomask.min.js"></script> 
<script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>


<!-- Custom Theme JavaScript -->
<script src="<?php echo web_root; ?>admin/js/sb-admin-2.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/janobe.js"></script> 

<script src="<?php echo web_root;?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/jquery-ui.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/autofunc.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/singleAutoFunc.js"></script> 
 

</body>
</html>