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

      <div id="signup" class="panel panel-primary" style="min-height: 250px; width: 400px; margin-left: auto; margin-right: auto; margin-top: 300px;">

        <h3 class="panel-heading text-center" style="margin-top: 0px;">Sign Up</h3>

        <div class="panel-body">

          <form id="" method="post" action="signup-phone.php" name="signup-frm" onsubmit="return validateForm()">
            <div class="form-group">

              <div id="fname-div" class="form-group">
                <label for="FName">First Name</label>
                <input type="text" id="fname" class="form-control" name="fname" value="<?php echo $_SESSION["return_fn"];?>">
                  <span id="fname-x" class="glyphicon glyphicon-remove form-control-feedback" style="display: none;"></span>
              </div>

              <div id="lname-div" class="form-group">
                <label for="LName">Last Name</label>
                <input type="text" id="lname" class="form-control" name="lname" value="<?php echo $_SESSION["return_ln"];?>">
                  <span id="lname-x" class="glyphicon glyphicon-remove form-control-feedback" style="display: none;"></span>
              </div>

              <div id="email-div" class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="email" class="form-control" name="email" value="<?php echo $_SESSION["return_em"];?>">
                  <span id="email-x" class="glyphicon glyphicon-remove form-control-feedback" style="display: none;"></span>
              </div>

              <div id="pword-div" class="form-group">
                <label for="Password">Password</label>
                <input type="pword" id="pword" class="form-control" name="pword" value="<?php echo $_SESSION["return_pw"];?>">
                  <span id="pword-x" class="glyphicon glyphicon-remove form-control-feedback" style="display: none;"></span>
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
                Please fill in all the fields
              </div>

              <!-- js triggered -->
              <div id="alert-block-danger" class="alert alert-danger" style="display: none;">
                Too many logins attempted, please try again later
              </div>

              <div class="text-center">
                <div class="btn-group">
                  <a class="btn btn-default" href="../index.php">Go Back</a> <!-- back to index.php -->
                  <button type="submit" class="btn btn-primary">Next</button>
                </div><!--end btn group-->
              </div><!-- end text center -->
            </div><!-- end form group -->
          </form>

          <br/>

        </div><!-- end panel body-->
      </div><!--end panel-->
    <div><!--end col -->
  </div><!--end row -->


<script src="../js/signup.js"></script>

  </body>
</html>

<?php
  unset($_SESSION["error_incorrect"]);
  unset($_SESSION["error_missing"]);
  unset($_SESSION["error_nouser"]);
  unset($_SESSION["return_un"]);
  unset($_SESSION["return_pw"]);
?>
