<?php 
 if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
}

if ($_SESSION['ACCOUNT_TYPE']!='Administrator'){
  redirect(web_root."admin/index.php");
 }

?>
 <div class="row">
    <div class="col-lg-12">
       	<div class="col-lg-6">
            <h1 class="page-header">List of Users  <a href="index.php?view=add" class="btn btn-primary btn-xs  "> <i class="fa fa-plus-circle fw-fa"></i> New</a> </h1>
       	</div>
    </div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>Account Name</th>
				  		<th>Username</th>
				  		<th>Role</th>
				  		<th width="20%" >Action</th>
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM  `useraccounts`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td>' . $result->ACCOUNT_NAME.'</a></td>';
				  		echo '<td>'. $result->ACCOUNT_USERNAME.'</td>';
				  		echo '<td>'. $result->ACCOUNT_TYPE.'</td>';
				  		If($result->ACCOUNT_ID==$_SESSION['ACCOUNT_ID'] || $result->ACCOUNT_TYPE=='Administrator') {
				  			$active = "Disabled";

				  		}else{
				  			$active = "";

				  		}

				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->ACCOUNT_ID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->ACCOUNT_ID.'" class="btn btn-danger btn-xs" '.$active.'><span class="fa fa-trash-o fw-fa"></span> </a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>

			</div>
				</form>
	

</div> <!---End of container-->