<?php
  session_start();

  //check if already logged in
  if($_SESSION["LOGGED_IN"] == true){
    header("location: ./../index.php");
    $_SESSION["Alert_already_logged_in"] = true;
  }

  $title = "Sign Up"; //set page title
  require("../includes/header_no_nav.php");
  //require("includes/header_logged_out.php"); //load page header
  //require("includes/header_logged_in.php"); //load page header
 ?>

  <body style="background-color: #e6e6e6;">

<div class="row">
  <div class="col-md-3"></div><!--off set-->
    <div class="col-md-6">

      <div id="conf-p" class="panel panel-primary" style="min-height: 250px; width: 400px; margin-left: auto; margin-right: auto; margin-top: 300px;">

        <h3 class="panel-heading text-center" style="margin-top: 0px;">Sign Up</h3>

        <div class="panel-body">
          <h3>Please enter the code<br/>
            <small>We just sent a code to your phone, you should get it any moment now</small></h3>
          <p><small>Taking a while? <a href="#">Resend</a></small></p>
          <hr/>

          <form id="" method="post" action="signupscript.php" name="signup-frm" onsubmit="return validateForm()">
            <div class="form-group">

              <div id="fname-div" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                <input type="text" id="fname" class="form-control" name="fname" placeholder="xxx-xxx-xxxx" value="<?php echo $_SESSION["return_fn"];?>">
                  <span id="fname-x" class="glyphicon glyphicon-remove form-control-feedback" style="display: none;"></span>
              </div>

              <br/>

              <!-- php triggered errors -->
              <?php
                if($_SESSION["error_incorrect"] == true){
                  echo "<div class='alert alert-danger'>Username or password is incorrect</div>";
                }

                if($_SESSION["error_missing"] == true){
                  echo "<div class='alert alert-danger'>Please fill in all the fields</div>";
                }

                if($_SESSION["error_nouser"] == true){
                  echo "<div class='alert alert-danger'>Username does not exist</div>";
                }
              ?>

              <!-- js triggered -->
              <div id="alert-invalid-danger" class="alert alert-danger" style="display: none;">
                characters not allowed
              </div>

              <!-- js triggered -->
              <div id="alert-missing-danger" class="alert alert-danger" style="display: none;">
                Please fill in the fields
              </div>

              <div id="alert-text-sent" class="alert alert-success" style="display: block">
                Text sent
              </div>

              <div class="text-center">
                <div class="btn-group">
                  <a class="btn btn-default" href="signup.php">Go Back</a> <!-- back to index.php -->
                  <button type="submit" class="btn btn-primary">Confirm</button>
                </div><!--end btn group-->
              </div><!-- end text center -->
            </div><!-- end form group -->
          </form>

        </div><!-- end panel body-->
      </div><!--end panel-->
    <div><!--end col -->
  </div><!--end row -->


<script src="../js/signup-phone.js"></script>

  </body>
</html>

<?php
  unset($_SESSION["error_incorrect"]);
  unset($_SESSION["error_missing"]);
  unset($_SESSION["error_nouser"]);
  unset($_SESSION["return_un"]);
  unset($_SESSION["return_pw"]);
?>
