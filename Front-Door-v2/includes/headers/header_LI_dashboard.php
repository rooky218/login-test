<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title><?php echo $_SESSION["User"];?></title>

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

      <nav class="nav navbar-inverse" data-spy="affix" data-offset-top="0">
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
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["FName"];?>
                    <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span>  Dashboard</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>  Settings</a></li>
                        <li><a href="login/logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                      </ul>
                </li><!-- end dropdown -->
              </ul><!-- end upper menu list -->
            </div><!-- end collapse -->

          </div><!-- end container fliud -->
        </div><!-- end container -->
      </nav>
  </header>
