<style type="text/css">
	.panel-body{
		min-height: 150px;
		text-align: center;
		font-size: 75px; 
	}
</style> 

<h1>Dashboard</h1>
<div class="col-md-3">
	<div class="panel panel-green">
		<div class="panel-heading" >
			Undergraduate Students
		</div>
		<div class="panel-body" style="color:green">
			<?php 
				# code...
				echo " " ."<br>";	
			?>
		</div>
	</div>
</div>
 
<div class="col-md-3">
	<div class="panel panel-red">
		<div class="panel-heading">
			Postgraduate Students
		</div>
		<div class="panel-body" style="color:red ; font-size:18px">
		   <?php 
                # code...
				$sql = "SELECT * FROM `pstgraduatestd`";
				$cur = $mydb->setQuery($sql); 
				$allpstgrdstd = $mydb->num_rows($cur);
				echo "All students ".$allpstgrdstd.'<br>';
				
				$sql1 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Biology'";
				$cur1 = $mydb->setQuery($sql1); 
				$Biopstgrdstd = $mydb->num_rows($cur1);
				echo "Biology dep ".$Biopstgrdstd.'<br>';

				$sql2 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Math'";
				$cur2 = $mydb->setQuery($sql2); 
				$Mpstgrdstd = $mydb->num_rows($cur2);
				echo "Mathematics dep ".$Mpstgrdstd.'<br>';

				$sql3 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Physics'";
				$cur3 = $mydb->setQuery($sql3); 
				$Phpstgrdstd = $mydb->num_rows($cur3);
				echo "Physics dep ".$Phpstgrdstd.'<br>';

				$sql4 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Chemistry'";
				$cur4 = $mydb->setQuery($sql4); 
				$Chpstgrdstd = $mydb->num_rows($cur4);
				echo "Chemistry dep ".$Chpstgrdstd.'<br>';
			?>
		</div>
	</div>
</div>
<div class="col-md-3">
	<div class="panel panel-yellow">
		<div class="panel-heading">
			Upcoming Events
		</div>
		<div class="panel-body" style="color:yellow">
			<?php 
				# code...
				echo " " ."<br>";	
			?>
		</div>
	</div>
</div>  
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Documents Workflow
		</div>
		<div class="panel-body"  style="color:blue">
			<?php 
				# code...
				echo " " ."<br>";	
			?>
		</div>
	</div>
</div>
  