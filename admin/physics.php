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
		<div class="panel-body" style="color:red ; font-size:18px ">
		   <?php 
                # code...
				$sql1 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Physics' ";
				$cur1 = $mydb->setQuery($sql1); 
				$Mpstgrdstd = $mydb->num_rows($cur1);
				echo "All students = ".$Mpstgrdstd.'<br>';
				
				$sql2 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Physics' && `ProgramType`='MSC'";
				$cur2 = $mydb->setQuery($sql2); 
				$MMsc = $mydb->num_rows($cur2);
				echo "MSC students = ".$MMsc.'<br>';

				$sql3 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Physics' && `ProgramType`='PHD'";
				$cur3 = $mydb->setQuery($sql3); 
				$MPHD = $mydb->num_rows($cur3);
				echo "PHD students = ".$MPHD.'<br>';
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
  