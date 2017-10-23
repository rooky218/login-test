<?php
  session_start();

  //if logged in load header
  if($_SESSION["LOGGED_IN"] == true){
    require("includes/headers/header_LI_dashboard.php"); //load page header
  } else { //if not logged in send to login screen
    header("location: ./Login/login.php"); //send to login page
    $_SESSION["return_to"] = "dashboard.php"; //return user here after login
    //might want to create error message
  }
?>

  <body>
    <div class="jumbotron">
      <div class="container">
        <div class="media">
          <div class="media-left">
            <img src="images/profile-pic.jpg" class="img-circle media-object" width="150px;" />
          </div><!-- end left -->
          <div class="media-body" style="padding-left: 30px;">
            <br/><br/>
            <h2 class="media-heading"><?php echo $_SESSION["FName"] . " " . $_SESSION["LName"]; ?></h2>
            <?php
              if($_SESSION["AdminAccess"] == 1){
                echo "<p>" . $_SESSION["User"] . " <span class='label label-primary'>Admin</span>" . "</p>";
              }
            ?>
          </div><!-- end media body -->
        </div><!--end media -->
      </div><!--end container -->
    </div><!-- end jumbo -->


    <div class="container">
      <div class="page-header">
        <h2>My Dashboard</h2>
      </div>

      <div class="row">
        <div class="col-md-8">

          <div class="panel">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 style="margin: 0px;">
                  <span class="glyphicon glyphicon-info-sign"></span> Bio
                  <a href="#" style="color: white;"><span class="glyphicon glyphicon-edit pull-right"></span></a>
                </h3>
              </div>
              <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div><!--end panel-->

          <div class="panel">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 style="margin: 0px;">
                  <span class="glyphicon glyphicon-globe"></span> Location
                  <a href="#" style="color: white;"><span class="glyphicon glyphicon-edit pull-right"></span></a>
                </h3>
              </div>
              <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div><!--end panel-->

        </div><!--end col-->


        <div class="col-md-4">


          <div class="panel">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 style="margin: 0px;">
                  <span class="glyphicon glyphicon-earphone"></span> Contact Info
                  <a href="#" style="color: white;"><span class="glyphicon glyphicon-edit pull-right"></span></a>
                </h3>
              </div>
              <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div><!--end panel-->

          <div class="panel">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 style="margin: 0px;">
                  <span class="glyphicon glyphicon-console"></span> Languages
                  <a href="#" style="color: white;"><span class="glyphicon glyphicon-edit pull-right"></span></a>
                </h3>
              </div>
              <div class="panel-body">
                <span class="label label-primary">HTML</span>
                <span class="label label-primary">CSS</span>
                <span class="label label-primary">JavaScript</span>
                <span class="label label-primary">PHP</span>
                <span class="label label-primary">MySQL</span>
                <span class="label label-primary">SQL</span><br/><br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div><!--end panel-->

          <div class="panel">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 style="margin: 0px;">
                  <span class="glyphicon glyphicon-education"></span> Education
                  <a href="#" style="color: white;"><span class="glyphicon glyphicon-edit pull-right"></span></a>
                </h3>
              </div>
              <div class="panel-body">
                <span class="label label-primary">Liberty University</span><br /><br />

                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div><!--end panel-->

        </div><!--end col -->

      </div><!-- end row -->

      <div class="row">




      </div><!--end row -->

    </div><!-- end container -->


    <?php require("includes/footer.php");?>
  </body>
</html>
