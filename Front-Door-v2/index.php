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
      <?php if($_SESSION["Alert_Logged_In_Success"] == true) {
        echo "<br/><div class='alert alert-success'>You have been logged in</div>";
      }

      if($_SESSION["Alert_already_logged_in"] == true) {
          echo "<br/><div class='alert alert-info'>You are already logged in</div>";
      } else {
        echo "<br/><br/>";
      }
      ?>

      <div id="row1" class="row">
        <div class="panel panel-primary">

          <h3 class="panel-heading" style="margin-top: 0px;">What is the front door?</h3>
          <hr />
          <div class="panel-body">
            <p>The front door is a website comprised of website components. It started
              off in 2017 as a simple page to test a log in, hence the name "The Front Door".
              However it quickly grew into included other various important elements
              found on websites. The goal for the front door is to act as an online
              resume. While the style is built within bootstrap for appearane sake,
              the code that runs forms, php, mysql, and javascript is all hand written.
              This is to demonstrate web coding abilities in an interactive manner.

              <br /><br />

              You can look for specific examples of code by browsing through the pages,
              however all the code is in some way incorperated into the site to make
              it run properly.
            </p>

          </div><!-- end caption -->
        </div><!-- end thumbnail -->

        <div class="panel panel-primary">

          <h3 class="panel-heading" style="margin-top: 0px;">Why should I log in?</h3>
          <hr />
          <div class="panel-body">
            <p>The front door was originally built as a login system. Therefore I
              have worked to develope a comprehensive login system that works around this.
              The only reason you would make a profile is to test out the login system
              and see what the interior pages look like and how they work. <br/>
              <br />
              <strong>You do not need a profile to view code and test other site functionality.</strong>
            </p>

          </div><!-- end caption -->
        </div><!-- end thumbnail -->

      </div><!-- end row1 -->

      <div id="row2" class="row">
        <h3>Get Started
        <small>Click a button to view code projects</small></h3>
        <hr />

        <div class="center-block">
          <div class="btn-group">
            <button type="button" class="btn btn-primary">HTML/CSS</button>
            <button type="button" class="btn btn-primary">Javascript</button>
            <button type="button" class="btn btn-primary">PHP</button>
            <button type="button" class="btn btn-primary">MySQL</button>
            <button type="button" class="btn btn-primary">Bootstrap</button>
          </div><!--end btn group -->
        </div><!--end center block -->

      </div><!-- end row2 -->

      <br />
      <br />

    </div><!-- end container -->


<?php require("includes/footer.php");?>
  </body>
</html>

<?php
  unset($_SESSION["Alert_Logged_In_Success"]);
  unset($_SESSION["Alert_already_logged_in"]);
?>
