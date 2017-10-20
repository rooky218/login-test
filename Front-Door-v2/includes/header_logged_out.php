<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title><?php echo $title;?></title>

      <!-- Custom stylesheets -->
      <link rel="stylesheet" href="css/main_v2.css">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>

    <header>
      <div class="jumbotron">
        <div class="container">
        <h1>Welcome to the Front Door</h1>
        <p>Developed by <i>Benjamin Walker</i></p>
      </div><!-- end container -->
      </div><!-- end jumbotron -->


      <nav class="nav navbar-inverse" data-spy="affix" data-offset-top="197">
        <div class="container">
          <div class="container-fluid">
            <div class="navbar-header">

              <!-- set button for small screens -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- end button -->

              <!-- navbar logo/brand -->
              <a class="navbar-brand" href="index.php">TFD</a>
            </div><!-- end navbar header -->

            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav" id="myNavbar">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
                <li><a href="#">Bootstrap</a></li>
              </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="Login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <li>
                <p class="navbar-btn">
                  <a href="Signup/signup.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-user"></span> Sign Up
                  </a>
                </p>
              </li>
            </ul>

          </div><!-- end container fliud -->
        </div><!-- end container -->
      </nav>
  </header>

  <script>

    //switch display from login to sign up on button click
    document.getElementById("signup-btn").onclick = funcSwitch;

    function funcSwitch() {

    }//end function

</script>
