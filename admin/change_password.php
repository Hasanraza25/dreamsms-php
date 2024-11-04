<?php require 'config/guard.php'; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>
 
    <!-- BEGIN PAGE CONTAINER-->
    <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Change Password</h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <form name="formChangePassword" id="formChangePassword" method="POST" action="update_password.php">
        <div class="col-md-14">
            <div class="grid simple">
                <div class="grid-body no-border">
                    <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              &nbsp;
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
                <div class="col-md-6">
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Old Password">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="New Password">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="password" name="retype_password" id="retype_password" class="form-control" placeholder="Again Password">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Update Password </button>
          <a href="member.html" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
                </div>
            </div>
        </div>
        </form>
        <script>
        var frmvalidator = new Validator("formChangePassword");
        function DoCustomValidation() 
        {
          var frm = document.forms["formChangePassword"];
          if (frm.new_password.value !== frm.retype_password.value)
          {
            sfm_show_error_msg('The Password and verified password do not match!', frm.new_password);
            return false;
          } else {
            return true;
          }
        }

        frmvalidator.setAddnlValidationFunction(DoCustomValidation);
      </script>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>

     <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 
</body>
</html>

