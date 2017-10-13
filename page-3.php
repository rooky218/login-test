<?php
  session_start();

  require("includes/functions2.php");

//check for null values, if null, redirect to login page and send back error
//if(!myisset($_POST["phone"])){
//  header("location: ./page-2.php");
//}
//send code to phone
$message = "This is a test from the Ampps server";
mail("bwalker35@liberty.edu", "Test 1", $message);

echo "message should be sent";

//set session data
//$_SESSION["fname"] = $_POST["fname"];
//$_SESSION["lname"] = $_POST["lname"];
//$_SESSION["email"] = $_POST["email"];



?>
<h4>Welcome to the Front Door, <?php echo $_SESSION['fname'];?></h4>

<form method="post" action="page-3.php" name="signup-frm2"
  onsubmit="">
  <!-- this form needs username, Fname, Lname, password, email, phone -->

    <input type="text" id="phone" class="frm2" name="phone"
      placeholder="Phone Number">
      <br/><h6 id="phone-error" class="error-m">Please enter first name</h6>
      <h6 id="phone-missing" class="error-m">Oops, you forgot something...</h6><br/>


    <input type="submit" value="Next">
</form>


<DOCTYPE!>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/the_main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <title>The Front Door</title>

</head>
<body>

    <div id="wrapper">

        <header>
            <h1>The Front Door</h1>
            <hr />
            <h3>The Login System
            <nav>
                <ul>
                    <li><a href="#">Project 1</a></li>
                    <li><a href="#">Project 2</a></li>
                    <li><a href="#">Project 3</a></li>
                </ul>
            </nav>
        </header>

        <section class="section-1" id="s1-2">
          <h3>Sign Up</h3>
          <hr/>

        </section>
      </div>
  </body>

<script>

</script>

</html>
