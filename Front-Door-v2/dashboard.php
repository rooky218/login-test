<?php
  session_start();
  $title = "Welcome to the Front Door"; //set page title

  if($_SESSION["LOGGED_IN"] == true){
    require("includes/header_logged_in.php"); //load page header
  } else {
    require("includes/header_logged_out.php"); //load page header
  }
?>

  <body>
    <div class="container">
      <div class="row">
        <br/><br/>
        <div class="col-md-1">
        </div><!-- end col -->

        <div class="col-md-3">
          <br/>
          <img src="images/profile-pic.jpg" class="img-circle center-block" width="200px" height="200px" />
        </div><!-- end col-->

        <div class="col-md-8">
          <h2>My Dashboard</h2>
          <hr/>
          <h3><?php echo $_SESSION["FName"] . " " . $_SESSION["LName"];?></h3>
          <?php
            if($_SESSION["AdminAccess"] == 1){
              echo "<p>" . $_SESSION["User"] . " <span class='label label-primary'>Admin</span>" . "</p>";
            }
            echo "<br />";
            echo "<p>Email - " . $_SESSION["Email"] . "</p>";
            echo "<p>Phone - " . $_SESSION["Phone"] . "</p>";
            echo "<a href='#'>Edit</a>";
            echo "<br/><br/>";

          ?>
        </div><!-- end col-->

        <br/><br/>

      </div><!-- end row -->

    </div><!-- end container -->

    <?php require("includes/footer.php");?>
  </body>
</html>
