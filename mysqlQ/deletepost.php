<?php 
	session_start();

	require("../../functions2.php");//this location may be incorrect

	if(myisset($_POST["makepost"])){
		$_SESSION["newpost"] = $_POST["makepost"];
	} else {
		header("location: ./../../../public/loginmain.php");
		$_SESSION["error1"] = "Silly Admin, you didn't enter anything!";
	}

	$NFID = $_REQUEST['id'];

	//connect to DB
		require("../db/dblogin.php");



	//Build Query
		$q	= "DELETE FROM `MBA`.`Newsfeed` WHERE `newsfeed`.`NFID` = {$NFID};";

	//Send Query
		$r = @mysqli_query($my_db, $q); // Run the query. 
		
		if ($r) { // If it ran OK.

			header("location: ./../../../public/loginmain.php");
			$_SESSION['postdelete'] = "Deleted!";

		} else {
			echo "Database could not be reached.";
		}


?>