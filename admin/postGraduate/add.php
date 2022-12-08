<?php
if(!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
}
?>
<form action="controller.php?action=add" class="form-horizontal well" method="POST">
    <div class="table-responsive">
        <div class="col-md-7"><h2>Add New Student</h2></div> 
            <label class="col-md-2">Academic Year: </label>
            <div class="col-md-3">
                <select class="form-control input-sm" name="SY">
                <option>Select</option>
                <?php 

                ?>
                </select> 
            </div> 
    <table class="table">
        <tr>
            <td><label>First name</label></td>
            <td><input id="" required="true" class="form-control input-md" type="text" placeholder="first name"> </td>
            <td><label>Middle name</label></td>
            <td><input id="" required="true" class="form-control input-md" type="text" placeholder="middle name"> </td>
            <td><label>Last name</label></td>
            <td><input id="" required="true" class="form-control input-md" type="text" placeholder="last name"> </td>
            <td><label>Surname</label></td>
            <td><input id="" required="true" class="form-control input-md" type="text" placeholder="surname"> </td>
        </tr>
        <tr >
            <td><label>Address</label></td>
            <td colspan="5"><input required="true" class="form-control input-md" type="text" placeholder="full address"> </td>
        </tr>
        <tr>
            <td><label>sex</label></td>
            <td>
                <label>
                    <input checked id="optionsRadios1" name="SEX" type="radio" value="Female">Female 
                    <input id="optionsRadios2" name="SEX" type="radio" value="Male"> Male
                </label>
            </td>
            <td><label>civil status</label></td>
            <td colspan="2">       
                <select class="form-control input-sm" name="CIVILS">
                    <option value="<?php ?>">Select (* Optional)</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option> 
                    <option value="Widow">Widow</option>
                </select>
            </td>
        </tr>
        <tr>
        <td><label>Place of Birth</label></td>
        <td colspan="2">
        <input class="form-control input-md" id="BIRTHPLACE" name="POB" placeholder="Place of Birth (* Optional)" type="text" value="<?php echo isset($_POST['BIRTHPLACE']) ? $_POST['BIRTHPLACE'] : ''; ?>">
         </td>
         <td ><label>Date of birth</label></td>
        <td colspan="2"> 
        <div class="input-group" >
                  <div class="input-group-addon"> 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  required="true" name="DOB"  id="BIRTHDATE"  type="text" class="form-control input-md"  placeholder="mm/dd/yyyy"  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_POST['BIRTHDATE']) ? $_POST['BIRTHDATE'] : ''; ?>">
           </div>             
        </td>
      </tr>
      <tr>
        <td><label>Nationality</label></td>
        <td colspan="2"><input class="form-control input-md" id="NATIONALITY" name="NATIONALITY" placeholder="Nationality (* Optional)" type="text" value="<?php echo isset($_POST['CONTACT']) ? $_POST['CONTACT'] : ''; ?>">
              </td>
        <td><label>Religion</label></td>
        <td colspan="2"><input  class="form-control input-md" id="RELIGION" name="RELIGION" placeholder="Religion (* Optional)" type="text" value="<?php echo isset($_POST['RELIGION']) ? $_POST['RELIGION'] : ''; ?>">
        </td>

      </tr>
      <tr>
      <td><label>Contact No.</label></td>
        <td colspan="2"><input class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number (* Optional)" type="number" maxlength="11" value="<?php echo isset($_POST['CONTACT']) ? $_POST['CONTACT'] : ''; ?>">
              </td>
              <td><label>Email</label></td>
        <td colspan="2"><input  class="form-control input-md" id="email" name="EmA" placeholder="Your Email" type="text" >
        </td>
        
      </tr>
    </table>    
    </div>
</form>