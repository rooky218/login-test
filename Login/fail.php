<?php session_start();
	
	require("../include/functions2.php");

	loggedin();	//custom function	

?>
<?php session_start(); ?>
<?php $page_title = "MBA - Our Location" ?>
<?php include("../include/layout/header.php"); ?>
<body><link rel="stylesheet" type="text/css" media="all" href="stylesheets/newuser_mba.css">

<?php

	$page = $_REQUEST["id"];

	//connect to DB
		require("../include/layout/db/dblogin.php");

	//Build Query
		$q  = "SELECT * FROM Pages
				WHERE PID = \"{$page}\";";

	//Send Query
		$r = @mysqli_query($my_db, $q); // Run the query. 
		
		if ($r) { // If it ran OK.

			$row = mysqli_fetch_array($r, MYSQLI_ASSOC); 

			$header = $row["header"];
			$content = $row["Content"];

		} else {

		// Public message:

   			echo "<p>We could access the database</p>";
     
     	// Debugging message:

    		echo "<p>" . mysqli_error($my_db) . "<br /><br /> Query: " . $q . '</ p >';
			echo "DB could not be reached";
		}


?>


<div id="wrapper">

	<div id="content">
		<div id="iconlogo"> 
			<img src="images/logos/location.png" alt="Post Icon">
		</div>

		<h2><?php echo $header; ?></h2> 
		<hr />
		<br />

		<!-- page content here -->
		<?php echo $content; ?>


	</div><!--End "content"-->
</div><!--End "wrapper"-->

<?php include("../include/layout/footer.php");?>







