<?php
if(!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
}
?>
<form action="controller.php?action=add" class="form-horizontal well" method="POST">
    <div class="table-responsive">
        <div>
            
        </div>
    </div>
</form>