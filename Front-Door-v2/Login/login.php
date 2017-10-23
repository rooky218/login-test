<?php
  session_start();

  //check if already logged in
  if($_SESSION["LOGGED_IN"] == true){
    header("location: ./../index.php");
    $_SESSION["Alert_already_logged_in"] = true;
  }

  
  $title = "Log In"; //set page title
  require("../includes/header_no_nav.php");

 ?>

  <body style="background-color: #e6e6e6;">

<div class="row">
  <div class="col-md-3"></div><!--off set-->
    <div class="col-md-6">

      <div id="login" class="panel panel-primary" style="min-height: 250px; width: 400px; margin-left: auto; margin-right: auto; margin-top: 300px;">

        <h3 class="panel-heading text-center" style="margin-top: 0px;">Log In</h3>

        <div class="panel-body">

          <form id="" method="post" action="loginscript.php" name="login-frm" onsubmit="return validateForm()">
            <div class="form-group">

              <div id="uname-div" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" id="username" class="form-control" name="uName" placeholder="Username" value="<?php echo $_SESSION["return_un"];?>">
                  <span id="uname-x" class="glyphicon glyphicon-remove form-control-feedback" style="display: none;"></span>

              </div>

              <br/>

              <div id="pword-div" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" id="password" class="form-control" name="pword" placeholder="Password" value="<?php echo $_SESSION["return_pw"];?>">
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
                  <a class="btn btn-default" href="index.php">Go Back</a> <!-- back to index.php -->
                  <button type="submit" class="btn btn-primary">Log In</button>
                </div><!--end btn group-->
              </div><!-- end text center -->
            </div><!-- end form group -->
          </form>

          <br/>

          <p>Don't have an account? <a href="#">Sign Up</a></p>
          <a href="#">Forgot password?</a><br/>

        </div><!-- end panel body-->
      </div><!--end panel-->
    <div><!--end col -->
  </div><!--end row -->


<script src="../js/login.js"></script>

  </body>
</html>

<?php
  unset($_SESSION["error_incorrect"]);
  unset($_SESSION["error_missing"]);
  unset($_SESSION["error_nouser"]);
  unset($_SESSION["return_un"]);
  unset($_SESSION["return_pw"]);
?>
