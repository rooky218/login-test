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

  //check for post value, display content appropriatly
  if(myisset($_POST["phone"])){ //if phone has been submitted, send text
    $phone = $_POST["phone"];
    echo "Phone has been set <br />";

    //generate codes
    $rand_tmo = rand(100000, 999999); //rand number generator
    $rand_sprint = rand(100000, 999999); //rand number generator
    $rand1_ver = rand(100000, 999999); //rand number generator
    $rand1_att = rand(100000, 999999); //rand number generator

    $_SESSION["tmo_code"] = $rand_tmo;

    //generate phone address
    $phone_tmobile = $phone . "@tmomail.net";
    $phone_att = $phone . "@txt.att.net";
    $phone_verizon = $phone . "@vtext.com";
    $phone_sprint = $phone . "@messaging.sprintpcs.com";
    $phone_vmobile = $phone . "@vmobl.com";
    $phone_tracphone = $phone . "@mmst5.tracfone.com";
    $phone_metropcs = $phone . "@mymetropcs.com";
    $phone_boost = $phone . "@myboostmobile.com";
    $phone_cricket = $phone . "@mms.cricketwireless.net";
    $phone_ptel = $phone . "@ptel.com";
    $phone_republic = $phone . "@text.republicwireless.com";
    $phone_google = $phone . "@msg.fi.google.com";
    $phone_suncom = $phone . "@tms.suncom.com";
    $phone_ting = $phone . "@message.ting.com";
    $phone_uscellular = $phone . "@email.uscc.net";
    $phone_cons_cell = $phone . "@cingularme.com";
    $phone_cspire = $phone . "@cspire1.com";
    $phone_pageplus = $phone . "@vtext.com";

    //create subject
    $sub = "Phone Verification";

    //create message
    $mes_tmo = "Your code is: " . $rand_tmo . " \nPlease enter this to continue signup.";


    //create header
    $header = "From: Frontdoor < system@frontdoor.design > \n";

    //send T-Mobile text
    echo $mes_tmo;

    if(mail($phone_tmobile, $sub, $mes_tmo, $header)){
      echo "<br/> Message was sent";
    } else {
      echo "<br/> Message failed to send";
    }

  } //end if post phone

  if(myisset($_POST["code"])){ //if code set
      $code = $_POST["code"];
      if($code == $_SESSION["tmo_code"]){
        //code passed
        $_SESSION["conf_phone"] = $phone_tmobile;
        header("location: ./signup-final.php");

      } else {
        //code failed
        $error_incorrect = true;
      }
  }
 ?>

  <body style="background-color: #e6e6e6;">

<div class="row">
  <div class="col-md-3"></div><!--off set-->
    <div class="col-md-6">

      <div id="conf-code" class="panel panel-primary" style="min-height: 250px; width: 400px; margin-left: auto; margin-right: auto; margin-top: 300px;">

        <h3 class="panel-heading text-center" style="margin-top: 0px;">Sign Up</h3>

        <div class="panel-body">
          <h3>Please enter the code<br/>
            <small>We just sent a code to your phone, you should get it any moment now</small></h3>
          <p><small>Taking a while? <a href="#">Resend</a></small></p>
          <hr/>

          <form id="" method="post" action="signup-phone-validate.php" name="code-conf" onsubmit="return validateForm()">
            <div class="form-group">

              <div id="code-div" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                <input type="text" id="code" class="form-control" name="code" placeholder="xxxxxx" value="<?php echo $_SESSION["return_fn"];?>">
                  <span id="code-x" class="glyphicon glyphicon-remove form-control-feedback" style="display: none;"></span>
              </div>

              <br/>

              <!-- php triggered errors -->
              <?php
                if($error_incorrect == true){
                  echo "<div class='alert alert-danger'>Code did not match, please try again</div>";
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
