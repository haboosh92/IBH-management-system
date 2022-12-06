                      <?php 
                       if (!isset($_SESSION['ACCOUNT_ID'])){
                          redirect(web_root."admin/index.php");
                         }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatePayment()">

<div class="row">  
   <div class="col-lg-12">
      <h1 class="page-header"> Add New Instructor </h1>
    </div> 
 </div> 
 <div class="col-md-8">
                    
<!--
                   <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "DECRIPTION">First:</label>

                      <div class="col-md-8"> 
                        <select name="DESCRIPTION" id="DESCRIPTION" class="form-control input-sm">
                        <option>Select</option>
                          <?php 
                            $sql = "SELECT * FROM tblexpenses";
                            $mydb->setQuery($sql);
                            $cur = $mydb->loadResultList();
                            foreach ($cur as $row) {
                              echo '<option value='.$row->EXPENSEID.'>'.$row->DESCRIPTION.'</option>';
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "AMOUNT">Amount:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm " id="AMOUNT" name="AMOUNT" placeholder=
                            "Amount" type="text" value="" readonly="true">
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "IDNO">Student ID:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="singlename" name="IDNO" placeholder=
                            "Student ID" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "FEES">Tender Amount:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="FEES" name="FEES" placeholder=
                            "Tender Amount" type="text" value="">
                      </div>
                    </div>
                  </div> 
                   <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "REMARKS">Remarks:</label>

                      <div class="col-md-8">
                        
                         <textarea class="form-control input-sm" id="REMARKS" name="REMARKS" placeholder=
                            "Remarks" type="text" value=""></textarea>  
                      </div>
                    </div>
                  </div>
 
            
             <div class="form-group">
                    <div class="col-md-12">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                       
                       </div>
                    </div>
                  </div>
            </div>
         <div class="col-md-4">
    <div id="loadDetails"></div>
 </div>-->


 
    <table class="table">

      <tr>
        <td><label>FirstName</label></td>
        <td>
          <input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo isset($_POST['FNAME']) ? $_POST['FNAME'] : ''; ?>">
        </td>
        <td><label>MiddleName</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="MNAME" name="MNAME" placeholder="Middle Name" type="text" >
        </td> 
        <td><label>LastName</label></td>
        <td>
          <input required="true"   class="form-control input-md" id="LNAME" name="LNAME" placeholder="Last Name" type="text" >
        </td>
        <td><label>Surname</label></td>
        <td>
          <input required="true"   class="form-control input-md" id="SNAME" name="SNAME" placeholder="SurName" type="text">
        </td>
         
      </tr>
      <tr>
        <td><label>Address</label></td>
        <td colspan="5"  >
        <input required="true"  class="form-control input-md" id="PADDRESS" name="ADR" placeholder="Permanent Address" type="text" value="<?php echo isset($_POST['PADDRESS']) ? $_POST['PADDRESS'] : ''; ?>">
        </td> 
      </tr>
      <tr>
        <td ><label>Sex </label></td> 
        <td colspan="2">
          <label>
            <input checked id="optionsRadios1" name="SEX" type="radio" value="Female">Female 
             <input id="optionsRadios2" name="SEX" type="radio" value="Male"> Male
          </label>
        </td>
        
        <td><label>Civil Status</label></td>
        <td colspan="2">
          <select class="form-control input-sm" name="CIVILS">
            <option value="<?php echo isset($_POST['CIVILSTATUS']) ? $_POST['CIVILSTATUS'] : 'Select'; ?>">Select (* Optional)</option>
             <option value="Single">Single</option>
             <option value="Married">Married</option> 

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

      </tr>
      <tr>
      <td><label>Contact No.</label></td>
        <td colspan="2"><input class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number (* Optional)" type="number" maxlength="11" value="<?php echo isset($_POST['CONTACT']) ? $_POST['CONTACT'] : ''; ?>">
              </td>
              <td><label>Email</label></td>
        <td colspan="2"><input  class="form-control input-md" id="email" name="EmA" placeholder="Your Email" type="text" >
        </td>
        
      </tr>
      <tr>
      <td><label>Course</label></td>
        <td colspan="2">
          
          <select class="form-control input-sm" name="COURSEID">
                <?php 

                            $mydb->setQuery("SELECT * FROM `course`");
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.' </option>';

                            }
                          ?> 
            </select> 


        </td>
        <td ><label>Course Type </label></td> 
        <td colspan="2">
          <label>
            <input id="optionsRadios1" name="CT" type="radio" value="Morning">Morning 
            <input id="optionsRadios2" name="CT" type="radio" value="Evening"> Evening
          </label>
        </td>
        
       
       
      </tr>
          
        </form>
       