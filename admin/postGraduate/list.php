<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
       	<div class="col-lg-6">
               <h2 class="page-header"> List of Postgraduate Students <?php if ($_SESSION['ACCOUNT_TYPE'] =='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Scientific affairs') {?> <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a><?php }?></h2>
          </div>	
               <form  action="controller.php" method="POST">
                    <div class="table-resposive">
                         <table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
                              <thead>
                                   <tr>
                                        <th> ID</th>
                                        <th> Full Name </th>
                                        <th> Surname </th>
                                        <th> Contact No. </th>
                                        <th> Email </th>
                                        <th> Program Type</th>
                                        <th> Department </th>
                                        <th> Accademic Year </th>
                                        <th> Final Deadline</th>
                                        <th> Notes</th>
                                        <th> Action </th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php 
                                    if($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Scientific affairs') // I'm not sure currently if the post graduate students is the same for both Dean and his assistances we might remove this condition later 
                                    {
                                        // $postSql = "SELECT * FROM pst-graduate-std";
                                         $postSql = "SELECT `Id`, `FName`, `MName`, `LName`, `Surname`, `ContactNo`, `Email`, `ProgramType`, `Course`, `Date_Start`, `Final_Deadline`, `Note` FROM `pst-graduate-std` ";
                                         $mydb->setQuery($postSql);
                                         $currentStd = $mydb->loadResultList();
                                         foreach ($currentStd as $result) {
                                             # code...
                                             echo "<tr>
                                                  <td>" .$result->Id."</td>
                                                  <td>" .$result->FName."</td>
                                                  <td>" .$result->Surname."</td>
                                                  <td>" .$result->ContactNo."</td>
                                                  <td>" .$result->Email."</td>
                                                  <td>" .$result->ProgramType."</td>
                                                  <td>" .$result->Course."</td>
                                                  <td>" .$result->Date_Start."</td>
                                                  <td>" .$result->Final_Deadline."</td>
                                                  <td>" .$result->Note."</td>
                                             </tr>";
                                         }
                                    }
                                   ?>
                              </tbody>
                         </table>
                    </div>
               </form>
               
		
       		
