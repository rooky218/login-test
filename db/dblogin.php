<?php


// This file contains the database access information. 
// This file also establishes a connection to MySQL
// selects the database, and sets the encoding.
// Set the database access information as constants:


DEFINE ("DB_USER", "mbaweb"); 
DEFINE ("DB_PASSWORD", "aCbhNdV2pzB4WPdD"); 
DEFINE ("DB_HOST", "localhost"); 
DEFINE ("DB_NAME", "MBA");  

// Make the connection: 

$my_db = @mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die (' Could not connect to MySQL: ' . mysqli_connect_error());

// Set the encoding... 

mysqli_set_charset( $my_db, 'utf8');
