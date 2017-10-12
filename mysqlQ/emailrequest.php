<?php
		
		$PID = $_REQUEST["id"];

			//connect to DB
		require("../include/layout/db/dblogin.php");

			//Build Query
		$q  = "SELECT * FROM Email
		 WHERE emailID = {$PID}"; 

		 $r = @mysqli_query ($my_db, $q); 

	 // Run the query. 

	if ($r) { // If it ran OK, display the records.

	// Fetch and print all the records: 
	 	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) { 
	   		
			$Email_Address = $row["sendtoemail"];
			$Email_Subject = $row["subject"];
			$Email_Title = $row["header"];
			$Email_SubTitle = $row["subtitle"];
			$Email_Message = $row["message"];
			$Email_Date = $row["mydate"];

		}

	} else {

		// Public message:

   			echo "<p>We could not access the database</p>";
     
     	// Debugging message:

    		echo "<p>" . mysqli_error($my_db) . "<br /><br /> Query: " . $q . '</ p >';

	} // End of if ($r)
	
	mysqli_free_result ($r); // Free up the resources.

	mysqli_close($my_db);

	?>
