<?php
		
		$PID = $_REQUEST["id"];

			//connect to DB
		require("../include/layout/db/dblogin.php");

			//Build Query
		$q  = "SELECT * FROM Pages
		 WHERE PID = {$PID}"; 

		 $r = @mysqli_query ($my_db, $q); 

	 // Run the query. 

	if ($r) { // If it ran OK, display the records.

	// Fetch and print all the records: 
	 	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) { 
	   		
	   		$PageTitle = $row["PageName"];	
	 		$PageContent = $row["Content"];

		}

	} else {

		// Public message:

   			echo "<p>We could access the database</p>";
     
     	// Debugging message:

    		echo "<p>" . mysqli_error($my_db) . "<br /><br /> Query: " . $q . '</ p >';

	} // End of if ($r)
	
	mysqli_free_result ($r); // Free up the resources.

	mysqli_close($my_db);

	?>
