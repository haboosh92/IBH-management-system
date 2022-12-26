<style type="text/css">
	.panel-body{
		min-height: 150px;
		text-align: center;
		font-size: 25px; 
	}
	.panel-heading{
		min-height: 60px;
		text-align: center;
		font-size: 20px; 
	}
	.panel-info > .panel-heading {
  color: #fff;
  background-color: #663399;
  border-color: #663399;
	}
  .panel-info {
	border-color:  #663399;
  }

	.panel-danger > .panel-heading {
  color: #fff;
  background-color: #66CDAA;
  border-color: #66CDAA;
	}
	.panel-danger {
	border-color:  #66CDAA;
  }
</style> 


<h1>Admin Cpanel</h1>
<div class="col-md-4">
	<div class="panel panel-green">
		<div class="panel-heading" >
			Undergraduate students
		</div>
		<div class="panel-body" style="color:green">
			<?php 
				$sql ="SELECT * FROM `tblstudent`";
				$cur =  $mydb->setQuery($sql); 
				$allstudent = $mydb->num_rows($cur);
				echo $allstudent;
			?>
		</div>
	</div>
</div>
 
<div class="col-md-4">
	<div class="panel panel-red">
		<div class="panel-heading">
			HR Inbox
		</div>
		<div class="panel-body" style="color:red">
		   <?php 
				// $sql ="SELECT * FROM `tblstudent` WHERE ACCOUNTTYPE='Officer'";
				// $cur = $mydb->setQuery($sql); 
				// $allofficer = $mydb->num_rows($cur);
				// echo $allofficer;
			?>
		</div>
	</div>
</div>
  
<div class="col-md-4">
	<div class="panel panel-info">
		<div class="panel-heading">
			HR Outbox
		</div>
		<div class="panel-body" style="color:#663399">
		   <?php 
				// $sql ="SELECT * FROM `tblstudent` WHERE ACCOUNTTYPE=''";
				// 	$cur = $mydb->setQuery($sql); 
				// $allofficer = $mydb->num_rows($cur);
				// echo $allofficer;
			?>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Calendar 
		</div>
		<div class="panel-body" style="color:#007bff">
		   <?php 
			/*	$sql ="SELECT * FROM `tblstudent`";
					$cur = $mydb->setQuery($sql); 
				$allofficer = $mydb->num_rows($cur);	*/
				echo "Upcoming events";
			?>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-danger">
		<div class="panel-heading">
			 Post Graduate students
		</div>
		<div class="panel-body"  style="color:#66CDAA">
			<?php 

			 $sql = "SELECT * FROM `pstgraduatestd`";
			 $cur = $mydb->setQuery($sql); 
			 $allpstgrdstd = $mydb->num_rows($cur);
			 echo $allpstgrdstd;

			?>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-yellow">
		<div class="panel-heading">
			Users 
		</div>
		<div class="panel-body" style="color:#ffcc66">
			<?php 
				$sql ="SELECT * FROM `useraccounts`";
				$cur = $mydb->setQuery($sql); 
				$alluser = $mydb->num_rows($cur);
				echo $alluser;
			?>
		</div>
	</div>
</div>
  