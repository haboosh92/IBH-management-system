<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
       	<div class="col-lg-6">
               <h2 class="page-header"> List of Postgraduate Students <?php if ($_SESSION['ACCOUNT_TYPE'] =='Administrator') {?> <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a><?php }?></h2>
          </div>	
               <form  action="controller.php" method="POST">
                    <div class="table-resposive">
                         <table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
                              <thead>
                                   <tr>
                                        <th> ID</th>
                                        <th> Full Name </th>
                                        <th> Surname </th>
                                        <th> DOB </th>
                                        <th> Department </th>
                                        <th> Study year </th>
                                        <th> Date of join </th>
                                        <th> First extend</th>
                                        <th> Second extend</th>
                                        <th> Disscusion deadline</th>
                                        <th> Action </th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php 
                                   
                                   ?>
                              </tbody>
                         </table>
                    </div>
               </form>
               
		
       		
