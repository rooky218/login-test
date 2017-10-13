<?php
session_start(); //start session
//Front_Door.php
//this is the first page of this series. This provides users with the chance
//to log in or create account. The purpose of this page is do demonstate knowledge
//of HTML, CSS, JavaScript, PHP, and MySQL to the degree of creating a login
// system that will also validate form data.

require("includes/functions2.php");

//check if logged in
loggedin();



?>

<DOCTYPE!>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/the_main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <title>The Front Door</title>

</head>

<body>

    <div id="wrapper">

        <header>
            <h1>The Front Door</h1>
            <hr />
            <h3>The Login System
            <nav>
                <ul>
                    <li><a href="#">Project 1</a></li>
                    <li><a href="#">Project 2</a></li>
                    <li><a href="#">Project 3</a></li>
                </ul>
            </nav>

            <br/>

            <h3>You have been successfully logged out</h3>
            <a href="front_door.php">Return to login screen</a>

        </header>



    </div>
</body>

</html>
