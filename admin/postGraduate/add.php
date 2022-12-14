<?php
if(!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
}
?>
<form action="controller.php?action=add" class="form-horizontal well" method="POST">
    <div class="table-responsive">
        <div class="col-md-4"><h2>Add New Student</h2></div>   
        <table class="table">
            <tr>
                <td><label>First name</label></td>
                <td><input id="FName" name="FName" required="true" class="form-control input-md" type="text" placeholder="first name"> </td>
                <td><label>Middle name</label></td>
                <td><input id="MName" name="MName" required="true" class="form-control input-md" type="text" placeholder="middle name"> </td>
                <td><label>Last name</label></td>
                <td><input id="LName" name="LName" required="true" class="form-control input-md" type="text" placeholder="last name"> </td>
                <td><label>Surname</label></td>
                <td><input id="Surname" name="Surname" required="true" class="form-control input-md" type="text" placeholder="surname"> </td>
            </tr>
            <tr>
                <td><label>Contact No. </label></td>
                <td colspan="3"><input class="form-control input-md" id="ContactNo" name="ContactNo" placeholder="Contact Number " type="number" maxlength="18" ></td>
            </tr>
            <tr>
                <td><label>Email </label></td>
                <td colspan="3"><input  class="form-control input-md" id="Email" name="Email" placeholder="Your Email" type="text" ></td>
            </tr>
            <tr>
                <td><label>Academic Year </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" name="Date_Start"  id="Date_Start"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['Date_Start']) ? $_POST['Date_Start'] : ''; ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label> Final Deadline </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" name="Final_Deadline"  id="Final_Deadline"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['Final_Deadline']) ? $_POST['Final_Deadline'] : ''; ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label>Program Type</label></td>
                <td colspan="3">
                    <select class="form-control input-sm" name="ProgramType">
                        <option value = "<?php echo isset($_POST['ProgramType']) ? $_POST['ProgramType'] : 'Select'?>">Select</option>
                        <option value = "MSC" >MSC</option>
                        <option value = "PHD" >PHD</option>
                    </select>
            </tr>
            <tr>
                <td><label>Course </label></td>
                <td colspan="3">
                    <select class="form-control input-sm" name="Course">
                        <option value = "<?php echo isset($_POST['Course']) ? $_POST['Course'] : 'Select'?>">Select</option>
                        <option value = "Math" >Math</option>
                        <option value = "Chemistry">Chemistry</option>
                        <option value = "Biology">Biology</option>
                        <option value = "Physics">Physics</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td><label>Level </label></td>
                <td colspan="3">
                    <select class="form-control input-sm" name="level">
                        <option value = "<?php echo isset($_POST['level']) ? $_POST['level'] : 'Select'?>">Select</option>
                        <option value = "First level" >First level</option>
                        <option value = "research level ">research level</option>
                    </select> 
                </td>
            </tr>
            <!-- <tr>
                <td><label>First extend</label></td>
                <td colspan="2">
                <select class="form-control input-sm" name="extend1">
                    <option value="<?php ?>">Select (* Optional)</option>
                    <option value="Yes">Single</option>
                    <option value="No">Married</option> 
                </select>
                </td>
            </tr> -->
            <tr>
                <td><label> Extend 1 deadline </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" name="extend1"  id="extend1"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['extend1']) ? $_POST['extend1'] : ''; ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label> Extend 2 deadline </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" name="extend2"  id="extend2"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['extend2']) ? $_POST['extend2'] : ''; ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label>Notes</label></td>
                <td colspan="3"><input class="form-control input-md" id="Note" name="Note" placeholder="Any further important information" type="text"></td>
            </tr>
            <tr>
                <td colspan="5">  
                    <button class="btn btn-success btn-lg" name="submit" type="submit">Save</button>
                </td>
            </tr>

        </table>    
    </div>
</form>