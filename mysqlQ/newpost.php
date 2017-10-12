<?php 
	session_start();

	require("../../functions2.php");//this location may be incorrect

	if(myisset($_POST["makepost"])){
		$_SESSION["newpost"] = $_POST["makepost"];
	} else {
		header("location: ./../../../public/loginmain.php");
		$_SESSION['postwin'] = null;
		$_SESSION["error1"] = "Silly Admin, you didn't enter anything!";
	}

	$status = addslashes($_POST['makepost']);
	$author = $_SESSION['FName'] . " " . $_SESSION['LName'];

	//connect to DB
		require("../db/dblogin.php");



	//Build Query
		$q	= "INSERT INTO `MBA`.`Newsfeed` (`NFID`, `content`, `date`, `Postedby`) VALUES (NULL, '{$status}', 'now()', '$author')";

	//Send Query
		$r = @mysqli_query($my_db, $q); // Run the query. 
		
		if ($r) { // If it ran OK.

			header("location: ./../../../public/loginmain.php");
			$_SESSION['postwin'] = "Posted!";

		} else {
			echo "Database could not be reached.";
		}


?>