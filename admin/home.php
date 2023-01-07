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
  background-color: #39ae86;
  border-color: #39ae86;
	}
	.panel-danger {
	border-color:  #39ae86;
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
		<div class="panel-body"  style="color:#39ae86 ; font-size:20px">
			<?php 
				$sql = "SELECT * FROM `pstgraduatestd`";
				$cur = $mydb->setQuery($sql); 
				$allpstgrdstd = $mydb->num_rows($cur);
				echo "All students = ".$allpstgrdstd.'<br>';

				// $sql1 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Biology'";
				// $cur1 = $mydb->setQuery($sql1); 
				// $Biopstgrdstd = $mydb->num_rows($cur1);
				// echo "Biology dep = ".$Biopstgrdstd.'<br>';

				// $sql2 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Math'";
				// $cur2 = $mydb->setQuery($sql2); 
				// $Mpstgrdstd = $mydb->num_rows($cur2);
				// echo "Mathematics dep = ".$Mpstgrdstd.'<br>';

				// $sql3 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Physics'";
				// $cur3 = $mydb->setQuery($sql3); 
				// $Phpstgrdstd = $mydb->num_rows($cur3);
				// echo "Physics dep = ".$Phpstgrdstd.'<br>';

				// $sql4 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Chemistry'";
				// $cur4 = $mydb->setQuery($sql4); 
				// $Chpstgrdstd = $mydb->num_rows($cur4);
				// echo "Chemistry dep = ".$Chpstgrdstd.'<br>';



			?>
			<a href="reports/index.php" class="btn btn-link" style = "color:#39ae86 ; margin:10px" > View details</a>
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
  