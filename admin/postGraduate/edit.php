<?php  
    if(!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."admin/index.php");
}

  @$id = $_GET['id'];
     if($id==''){
   redirect("index.php");
 }
    $pstStd   =       new postGraduateStd();
    $res      =       $pstStd->single_student($id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Postgraduate student</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
       <table class="table">
            <tr>
                <td><label>First name</label></td>
                <td><input id="FName" name="FName" required="true" class="form-control input-md" type="text" placeholder="first name" value="<?php echo $res->FName ?>"> </td>
                <td><label>Middle name</label></td>
                <td><input id="MName" name="MName" required="true" class="form-control input-md" type="text" placeholder="middle name" value="<?php echo $res->MName ?>"> </td>
                <td><label>Last name</label></td>
                <td><input id="LName" name="LName" required="true" class="form-control input-md" type="text" placeholder="last name" value="<?php echo $res->LName ?>"> </td>
                <td><label>Surname</label></td>
                <td><input id="Surname" name="Surname" required="true" class="form-control input-md" type="text" placeholder="surname" value="<?php echo $res->LName ?>"> </td>
            </tr>
            <tr>
                <td><label>Contact No. </label></td>
                <td colspan="3"><input class="form-control input-md" id="ContactNo" name="ContactNo" placeholder="Contact Number " type="number" maxlength="15" value="<?php echo $res->ContactNo ?>" ></td>
            </tr>
            <tr>
                <td><label>Email </label></td>
                <td colspan="3"><input  class="form-control input-md" id="Email" name="Email" placeholder="Your Email" type="text" value="<?php echo $res->Email ?>" ></td>
            </tr>
            <tr>
                <td><label>Academic Year </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" name="Date_Start"  id="Date_Start"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo $res->Date_Start ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label> Final Deadline </label></td>
                <td colspan="3">
                    <div class="input-group" >
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input class="form-control input-md" name="Final_Deadline"  id="Final_Deadline"  type="date"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo $res->Final_Deadline ?>">
                    </div>  
                </td>
            </tr>
            <tr>
                <td><label>Program Type</label></td>
                <td colspan="3">
                    <select class="form-control input-sm" name="ProgramType">
                        <option value = "<?php echo $res->ProgramType?>"> <?php echo $res->ProgramType?> </option>
                        <option value = "MSC" >MSC</option>
                        <option value = "PHD" >PHD</option>
                    </select>
            </tr>
            <tr>
                <td><label>Course </label></td>
                <td colspan="3">
                    <select class="form-control input-sm" name="Course" >
                        <option value = "<?php echo isset($_POST['Course']) ? $_POST['Course'] : 'Select'?>"> <?php echo $res->Course?> </option>
                        <option value = "Math" >Math</option>
                        <option value = "Chemistry">Chemistry</option>
                        <option value = "Biology">Biology</option>
                        <option value = "Physics">Physics</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td><label>Notes</label></td>
                <td colspan="3"><input class="form-control input-md" id="Note" name="Note" placeholder="Any further important information" type="text" value = "<?php echo $res->Note  ?>"></td>
            </tr>
            <tr>
                <td colspan="5">  
                    <button class="btn btn-success btn-lg" name="submit" type="submit">Save</button>
                </td>
            </tr>

        </table>

               
        
          
        </form>
       
                
                 