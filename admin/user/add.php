<?php 
 if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
   }

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);

 ?> 
 <?php
   if ($_SESSION['ACCOUNT_TYPE']!='Administrator'){
      redirect(web_root."admin/index.php");
     }

?>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

        <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Add New User</h1>
            </div>
        </div>          
        <div class="form-group">
            <div class="col-md-8">
                  <label class="col-md-4 control-label" for="U_NAME">Name:</label>
                  <div class="col-md-8">
                        <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder="Account Name" type="text" value="">
                  </div>
            </div>
        </div>

          <div class="form-group">
              <div class="col-md-8">
                  <label class="col-md-4 control-label" for="U_USERNAME">Username:</label>
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" value="">
                      </div>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-8">
                  <label class="col-md-4 control-label" for="U_PASS">Password:</label>
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="U_PASS" name="U_PASS" placeholder="Account Password" type="Password" value="" required>
                      </div>
              </div>
          </div>
            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="U_ROLE">Role:</label>
                        <div class="col-md-8">
                            <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                                <option value="Administrator">     Administrator</option>
                                <option value="HR">                HR</option>
                                <option value="Student affairs">   Student affairs </option>
                                <option value="Scientific affairs">Scintific affairs</option>
                                <option value="Computer dep">      Computer dep.</option>
                                <option value="Chemistry dep">     Chemistry dep.</option>
                                <option value="Biology dep">       Biology dep.</option>
                                <option value="Physics dep">       Physics dep.</option>
                                <option value="Mathematics dep">   Mathematics dep.</option>
                            </select> 
                        </div>
                  </div>
              </div>
            
             <div class="form-group">
                  <div class="col-md-8">
                      <label class="col-md-4 control-label"> </label>
                        <div class="col-md-8">
                            <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save </button> 
                        </div>
                    </div>
              </div>

        </form>
       