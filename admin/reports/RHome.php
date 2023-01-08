<?php
	if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
    }
?>

<div class="table-responsive">
    <div class="col-md-4"><h2> Post Graduate reports</h2></div>   
    <table class="table ">
        <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Scientific affairs') { ?>
        <!-- adminstrator reports -->
        <tr >
            <td><label>All postgraduate students</label></td>
            <td><label>
                <?php
                	$sql = "SELECT * FROM `pstgraduatestd`";
                    $cur = $mydb->setQuery($sql); 
                    $allpstgrdstd = $mydb->num_rows($cur);
                    echo " = ".$allpstgrdstd.'<br>';
                ?>
            </label></td>
            
            <td><label>All MSC students</label></td>
            <td><label>
                <?php
                	$sqlMsc = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='MSC'";
                    $curMsc = $mydb->setQuery($sqlMsc); 
                    $mscpstgrdstd = $mydb->num_rows($curMsc);
                    echo " = ".$mscpstgrdstd.'<br>';
                ?>
            </label></td>

            <td><label>All PHD students</label></td>
            <td><label>
                <?php
                	$sqlPHD = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='PHD'";
                    $curPHD = $mydb->setQuery($sqlPHD); 
                    $phdpstgrdstd = $mydb->num_rows($curPHD);
                    echo " = ".$phdpstgrdstd.'<br>';
                ?>
            </label></td>
        </tr>
        <!-- Bio  -->
        <tr>
            <td><label>Biology department students</label></td>
            <td><label>
                <?php
			    $sql1 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Biology'";
				$cur1 = $mydb->setQuery($sql1); 
				$Biopstgrdstd = $mydb->num_rows($cur1);
				echo " = ".$Biopstgrdstd.'<br>';
                ?>
            </label></td>
                        
            <td><label>Biology department MSC students</label></td>
            <td><label>
                <?php
                	$sqlMscB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='MSC' AND `Course`='Biology'";
                    $curMscB = $mydb->setQuery($sqlMscB); 
                    $mscpstgrdstdB = $mydb->num_rows($curMscB);
                    echo " = ".$mscpstgrdstdB.'<br>';
                ?>
            </label></td>
            <td><label>Biology department PHD students</label></td>
            <td><label>
                <?php
                	$sqlPHDB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='PHD'AND `Course`='Biology'";
                    $curPHDB = $mydb->setQuery($sqlPHDB); 
                    $phdpstgrdstdB = $mydb->num_rows($curPHDB);
                    echo " = ".$phdpstgrdstdB.'<br>';
                ?>
        </tr>
        <!-- Chemistry  -->
        <tr>
            <td><label>Chemistry department students</label></td>
            <td><label>
                <?php
			    $sql1 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Chemistry'";
				$cur1 = $mydb->setQuery($sql1); 
				$Biopstgrdstd = $mydb->num_rows($cur1);
				echo " = ".$Biopstgrdstd.'<br>';
                ?>
            </label></td>
                        
            <td><label>Chemistry department MSC students</label></td>
            <td><label>
                <?php
                	$sqlMscB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='MSC' AND `Course`='Chemistry'";
                    $curMscB = $mydb->setQuery($sqlMscB); 
                    $mscpstgrdstdB = $mydb->num_rows($curMscB);
                    echo " = ".$mscpstgrdstdB.'<br>';
                ?>
            </label></td>
            <td><label>Chemistry department PHD students</label></td>
            <td><label>
                <?php
                	$sqlPHDB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='PHD'AND `Course`='Chemistry'";
                    $curPHDB = $mydb->setQuery($sqlPHDB); 
                    $phdpstgrdstdB = $mydb->num_rows($curPHDB);
                    echo " = ".$phdpstgrdstdB.'<br>';
                ?>
        </tr>
        <!-- Math -->
        <tr>
            <td><label>Mathematics department students</label></td>
            <td><label>
                <?php
			    $sql1 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Math'";
				$cur1 = $mydb->setQuery($sql1); 
				$Biopstgrdstd = $mydb->num_rows($cur1);
				echo " = ".$Biopstgrdstd.'<br>';
                ?>
            </label></td>
                        
            <td><label>Mathematics department MSC students</label></td>
            <td><label>
                <?php
                	$sqlMscB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='MSC' AND `Course`='Math'";
                    $curMscB = $mydb->setQuery($sqlMscB); 
                    $mscpstgrdstdB = $mydb->num_rows($curMscB);
                    echo " = ".$mscpstgrdstdB.'<br>';
                ?>
            </label></td>
            <td><label>Mathematics department PHD students</label></td>
            <td><label>
                <?php
                	$sqlPHDB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='PHD'AND `Course`='Math'";
                    $curPHDB = $mydb->setQuery($sqlPHDB); 
                    $phdpstgrdstdB = $mydb->num_rows($curPHDB);
                    echo " = ".$phdpstgrdstdB.'<br>';
                ?>
        </tr>
        <!-- Physics -->
        <tr>
            <td><label>Physics department students</label></td>
            <td><label>
                <?php
			    $sql1 = "SELECT * FROM `pstgraduatestd` WHERE `Course`='Physics'";
				$cur1 = $mydb->setQuery($sql1); 
				$Biopstgrdstd = $mydb->num_rows($cur1);
				echo " = ".$Biopstgrdstd.'<br>';
                ?>
            </label></td>
                        
            <td><label>Mathematics department MSC students</label></td>
            <td><label>
                <?php
                	$sqlMscB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='MSC' AND `Course`='Physics'";
                    $curMscB = $mydb->setQuery($sqlMscB); 
                    $mscpstgrdstdB = $mydb->num_rows($curMscB);
                    echo " = ".$mscpstgrdstdB.'<br>';
                ?>
            </label></td>
            <td><label>Mathematics department PHD students</label></td>
            <td><label>
                <?php
                	$sqlPHDB = "SELECT * FROM `pstgraduatestd` WHERE `ProgramType`='PHD'AND `Course`='Physics'";
                    $curPHDB = $mydb->setQuery($sqlPHDB); 
                    $phdpstgrdstdB = $mydb->num_rows($curPHDB);
                    echo " = ".$phdpstgrdstdB.'<br>';
                ?>
        </tr>
    <?PHP }?>
</div>