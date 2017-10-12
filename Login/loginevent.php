<?php session_start();
	
	require("../include/functions2.php");

	loggedin();	//custom function	

	if($_SESSION['AdminAccess'] != 1){
		header("location: ./index.php");
	}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0042)http://www.marybethuneacademy.org/main.htm -->
<html>
<head>
<title>New Event</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="stylesheets/cms.css">
<link rel="shortcut icon" href="images/logos/mbaM.png" />


<?php require("../include/layout/adminnavbar.php");?> 


<div id="page">	<!-- sets background color and width to whole page -->
		
	<h1 style="position: relative; top: -10px; left: -25px; margin-left: 210px; font-family: 'Optima'; z-index: 5; padding-left: 60px; color: #f1f1f1; background-color: #7B7B7B; -webkit-box-shadow: 2px 5px 17px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 5px 17px 1px rgba(0,0,0,0.75);
box-shadow: 2px 5px 17px 1px rgba(0,0,0,0.75); padding-top: 30px; padding-bottom: 30px;">Mary Bethune Content Management System</h1>

	<ul class="mainlinks">
		<li><a href="loginmain.php">Write a Post</a></li>
		<li><a id="active" href="loginevent.php">Create an Event</a></li>
		<li><a href="post#">New Super Pic</a></li>
		<li><a href="post#">Availability</a></li>
	</ul>

		

<form class="indexpost" action="../include/layout/mysqlQ/newpost.php" method="post">

	<input type="text" name="title" placeholder="Event"><br />
	<select name="Classroom">
		<option value="none">--Please Choose--</option>
		<option value="chenequa">Chenequa's Room</option>
	    <option value="julie">Julie's Room</option>
	    <option value="courtney">Courtney's Room</option>
	    <option value="york">York's Room</option>
	    <option value="school">Entire School</option>
  	</select><br />
	<textarea name="makepost" rows="2" cols="60" style="font-size:18px" placeholder="Event Description"></textarea>
	<br />
	<p id="error1" style="font-size: 70%; color: red; "><?php echo $_SESSION["error1"];?></p>
	<br />

	<?php 
		if(myisset($_SESSION['postwin'])){
			echo "<div class='feedback'>
				<p>Status Posted!</p>
				</div>";
			unset($_SESSION['postwin']);
		} elseif(myisset($_SESSION['postdelete'])) {
			echo "<div class='feedback'>
				<p>Post Deleted!</p>
				</div>";
			unset($_SESSION['postdelete']);
		}
	?>

	<input type="submit" value="Post" id="postbtn">
</form>


      <br />
      <br />
		<?php //print_r($_SESSION); echo "<br><br><br>"; ?>

		<div class="postbox">
		<div class="wordbox">
		<h5>Posted by Ben</h5>
		<h6>April 24th</h6>
		<a id="deletebtn" href="#delete">Delete</a>
		<hr />
		<p>words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words </p>
		</div><!--wordbox -->
		</div>


		<br />
		<br />
		<br />
		<br />
		<br />
		<br />


<?php 
	//connect to DB
		require("../include/layout/db/dblogin.php");

	//Build Query
		$q  = "SELECT * FROM Events
			  ORDER BY NFID DESC;";

	//Send Query
		$r = @mysqli_query($my_db, $q); // Run the query. 
		
		if ($r) { // If it ran OK.

			while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) { 
				$ID = $row['NFID'];
				$post = $row['content']; 
				$date = $row['date'];
				$author = $row['Postedby'];

				//action goes here
				$output = "";
				$output = "<div class=\"postbox\">
					<div class=\"wordbox\">
					<h5>Posted by $author</h5>
					<h6>April 24th</h6>
					<a id='deletebtn' href='../include/layout/mysqlQ/deletepost.php?id={$ID}'>Delete</a>
					<hr />
					<p>{$post}</p>
					</div><!--wordbox -->
					</div><br /><br /><br /><br /><br /><br />";

				echo $output;
			}


		} else {
			echo "Database could not be reached.";
		}


?>

</div><!--End "page"-->

<?php unset($_SESSION["error1"]);?>

