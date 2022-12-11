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
                <td><input id="FName" required="true" class="form-control input-md" type="text" placeholder="first name"> </td>
                <td><label>Middle name</label></td>
                <td><input id="MName" required="true" class="form-control input-md" type="text" placeholder="middle name"> </td>
                <td><label>Last name</label></td>
                <td><input id="LName" required="true" class="form-control input-md" type="text" placeholder="last name"> </td>
                <td><label>Surname</label></td>
                <td><input id="Surname" required="true" class="form-control input-md" type="text" placeholder="surname"> </td>
            </tr>
            <tr>
                <td><label>Contact No. </label></td>
                <td colspan="3"><input class="form-control input-md" id="ContactNo" name="CONTACT" placeholder="Contact Number " type="number" maxlength="11" ></td>
            </tr>
            <tr>
                <td><label>Email </label></td>
                <td colspan="3"><input  class="form-control input-md" id="email" name="EmA" placeholder="Your Email" type="text" ></td>
            </tr>
            <tr>
                <td><label>Academic Year </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" required="true" name="Date_Start"  id="Date_Start"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['Date_Start']) ? $_POST['Date_Start'] : ''; ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label> Final Deadline </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" required="true" name="Final_Deadline"  id="Final_Deadline"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['Final_Deadline']) ? $_POST['Final_Deadline'] : ''; ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label>Program Type</label></td>
                <td colspan="3">
                    <select class="form-control input-sm" name="ProgramType">
                        <option value = "<?php echo isset($_POST['ProgramType']) ? $_POST['ProgramType'] : 'Select'?>">Select</option>
                        <option value = "MSC" >MSC</option>
                        <option value = "PHD">PHD</option>
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
                <td><label>Notes</label></td>
                <td colspan="3"><input class="form-control input-md" id="note" placeholder="Any further important information" type="text"></td>
            </tr>
            <tr>
                <td colspan="5">  
                    <button class="btn btn-success btn-lg" name="submit" type="submit">Save</button>
                </td>
            </tr>

        </table>    
    </div>
</form>