<?php session_start();

	require("../includes/functions2.php");

	//If not logged in
	if(!myisset($_SESSION["LOGGED_IN"]) || $_SESSION["LOGGED_IN"] != true){
		unset($_SESSION["LOGGED_IN"]);	//log out
		$_SESSION["timeout"] = time();	//new activity, add time
	} else {	//if still logged in

		if($_SESSION["timeout"] + 60 * 60 < time()) { //no activity logs out after one hour
    		unset($_SESSION["LOGGED_IN"]);
    		unset($_SESSION["User"]);
  		} else {							//if not timed out...
			$_SESSION["timeout"] = time(); 	//new activity re-ups the time limit
			header("location: ./loginmain.php");
		}
	}//end log in check

?>

<link rel="stylesheet" type="text/css" media="all" href="stylesheets/login.css">

<!Doctype HTML>
<html>
<body>

<div class="opacitybox">
</div>

<div id="container">

<form id="loginform" action="loginconfirm.php" method="post">

	<input id="top" type="text" name="uname" value="<?php echo $_SESSION["return_un"];?>" placeholder="Username"><?php echo $_SESSION["error1"]?><br />

	<input id="bottom" type="password" name="pword" value="<?php echo $_SESSION["return_pw"];?>" placeholder="Password"><?php echo $_SESSION["error2"]?><br />

	<div id="submit">
		<button id="submitb" type="Submit">Login</button>
	</div>

</form>
</div>


</body>
</html>

<?php   //reset return values and errors on reload
	unset($_SESSION["error1"]);
	unset($_SESSION["error2"]);
	unset($_SESSION["return_un"]);
	unset($_SESSION["return_pw"]);
?>
