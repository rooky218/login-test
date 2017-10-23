<?php
  session_start();

  //check if already logged in
  if($_SESSION["LOGGED_IN"] == true){
    header("location: ./../index.php");
    $_SESSION["Alert_already_logged_in"] = true;
  }

  $title = "Sign Up"; //set page title
  require("../includes/header_no_nav.php");
  require("../includes/functions.php");

  if(myisset($_POST["phone"])){
    echo "Phone has been set <br />";
    //generate codes
    $rand_tmo = rand(100000, 999999); //rand number generator
    $rand_sprint = rand(100000, 999999); //rand number generator
    $rand1_ver = rand(100000, 999999); //rand number generator
    $rand1_att = rand(100000, 999999); //rand number generator

    //create subject
    $sub = "Phone Verification";

    //create message
    $mes_tmo = "Your code is: " . $rand_tmo . " \nPlease enter this to continue signup.";

    //create header
    $header = "From: Frontdoor < system@frontdoor.design > \n";

    //send T-Mobile text
    echo $mes_tmo;

    if(mail($_POST["phone"] . "@tmomail.net", $sub, $mes_tmo, $header)){
      echo "<br/> Message was sent";
    } else {
      echo "<br/> Message failed to send";
    }

}

 ?>

  <body style="background-color: #e6e6e6;">

<div class="row">
  <div class="col-md-3"></div><!--off set-->
    <div class="col-md-6">

      <div id="conf-p" class="panel panel-primary" style="min-height: 250px; width: 400px; margin-left: auto; margin-right: auto; margin-top: 300px;">

        <h3 class="panel-heading text-center" style="margin-top: 0px;">Sign Up</h3>

        <div class="panel-body">
          <h3>Please enter phone number<br/>
            <small>We will only use this in case you get locked out of your account</small></h3>
          <p><small>Learn more about <a href="#">Two Factor Authentication</a></small></p>
          <hr/>

          <form id="" method="post" action="signup-phone.php" name="signup-frm" onsubmit="return validateForm()">
            <div class="form-group">

              <div id="phone-div" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="xxx-xxx-xxxx" value="<?php echo $_SESSION["return_fn"];?>">
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
                Text sent - add a 3 second delay before changing page
              </div>

              <div class="text-center">
                <div class="btn-group">
                  <a class="btn btn-default" href="signup.php">Go Back</a> <!-- back to index.php -->
                  <button type="submit" class="btn btn-primary">Sent Text</button>
                </div><!--end btn group-->
                <br/><br/>
                <a href="#">Skip</a>
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
