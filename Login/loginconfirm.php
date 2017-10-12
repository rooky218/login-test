<?php session_start();

		require("../include/functions2.php");

	//connect to DB
		require("../include/layout/db/dblogin.php");

	//Send data to DB
		$q  = "SELECT Login, Password, FName, LName, AdminAccess, Email, Phone FROM Users
				WHERE Login = \"{$_POST["uname"]}\";";

		$r = @mysqli_query($my_db, $q); // Run the query.

		if ($r) { // If it ran OK.

					$row = mysqli_fetch_array($r, MYSQLI_ASSOC);

					$username = $row["Login"];

					$password = $row["Password"];

					if(myisset($_POST["uname"]) && myisset($_POST["pword"])){ //IF Not Null

							if($_POST["uname"] == $username && $_POST["pword"] == $password){	//IF LOGIN SUCCESS
								$_SESSION["LOGGED_IN"] = true;
								$_SESSION["timeout"] = time();	//sets timer for auto logout
								$_SESSION["User"] = $username;	//sets the user for the session
								$_SESSION["FName"] = $row["FName"];
								$_SESSION["LName"] = $row["LName"];
								$_SESSION["AdminAccess"] = $row["AdminAccess"];
								$_SESSION["Email"] = $row["Email"];
								$_SESSION["Phone"] = $row["Phone"];

								header("location: ./loginmain.php");

							} else {	//login not correct, set session data for return error messaging

								//this part re-enters what user had in the login fields, with an error message

								$_SESSION["return_un"] = $_POST["uname"];	//value was set, check validity
								$_SESSION["return_pw"] = $_POST["pword"];	//value was set, check validity

								if($_POST["uname"] != $username){	//if username is wrong
									$_SESSION["error1"] = "Your username was incorrect";
									if($_POST["pword"] != $password){	//if password is wrong
										$_SESSION["error2"] = "Your password was incorrect";
									}
								} else {							//if password is wrong
									$_SESSION["error2"] = "Your password was incorrect";
								}

								header("location: ./login.php"); //return to login page
						}


				} else {//IF NO VALUE SET, then do this part: value not set, redirect

					$_SESSION["return_un"] = $_POST["uname"];	//value was set, check validity
					$_SESSION["return_pw"] = $_POST["pword"];	//value was set, check validity

					if(!myisset($_POST["uname"])){			//if missing username
						$_SESSION["error1"] = "You must enter your username";
						if(!myisset($_POST["pword"])){			//if missing username
							$_SESSION["error2"] = "You must enter your password";
						}

					} else {								//if missing password

						$_SESSION["error2"] = "You must enter your password";
					}

					header("location: ./login.php");
				}

		} else { //else -- could not access data base
			// Public message:

   			echo "<p>We could access the database</p>";

     	// Debugging message:

    		echo "<p>" . mysqli_error($my_db) . "<br /><br /> Query: " . $q . '</ p >';
			echo "DB could not be reached";
		}


?>
