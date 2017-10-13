<?php
  //Front_Door.php
  //this is the first page of this series. This provides users with the chance
  //to log in or create account. The purpose of this page is do demonstate knowledge
  //of HTML, CSS, JavaScript, PHP, and MySQL to the degree of creating a login
  // system that will also validate form data.

  //login leads to page-1.php
  //signup leads to page-2.php

  session_start();
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
            <p> Many websites have some form of login and signup page. The
              front door is a demonstration of several critical bits of
              code that make that possible while not compromising the whole system. It is
              also inteneded to demonstrate an understanding of how to develop and
              customize these systems.
              <br/>
              <br/><br/>
              1. Log In and Sign up occur on the same page. This eliminates the need
              for seperate pages for sign up and login. They make use of Buttons linked
              to Javascript, and the "display" property in CSS.
              <br/><br/>
              2. Submit buttons are locked down until data is entered. If a value
              is missing then an error message appears next to the specific field.
              Javascript checks for empty values.
              <br/><br/>
              3. Javascript runs submission cleaning to ensure that data is not only
              relevant, but also non-harmful to back end systems.
              <br/><br/>
              4. On login, PHP sends a request to the server to check for account login.
              Redirects to login page or password reset page based upon results.
              <br/><br/>
              5. sign-up page uses PHP to clean incoming data, ensure SQL injection is
              not possible, then creates new user.
              <br/><br/>
              6. Systems require email validation and phone validation before contact
              information is finalized. Unvalidated accounts are noted in database.
              <br/><br/>
              7. Two factor authentication is set up. If password is lost, a confirmation number
              is generated and sent to phone. That code is then required for access to password
              reset page
            </p>

        </header>

        <section class="section-1" id="s1-1">
            <h3>Login</h3>
            <hr/>

            <div class="formbox">
            <form method="post" action="page-1.php" name="login-frm"
              onsubmit="return validateForm()">

              <input type="text" id="username" class="frm1"
                name="uName" placeholder="Username" value="<?php echo $_SESSION["return_un"];?>">
                <br/><h6 id="u-output" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="password" id="password" class="frm1"
                name="pword" placeholder="Password" value="<?php echo $_SESSION["return_un"];?>">
                <br/><h6 id="p-output" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="submit" value="Log In" id="smit" class="sbutton">

              <button type="button" id="sign-up">Sign Up</button>
            </form>
          </div>
        </section>


        <section class="section-1" id="s1-2">
          <h3>Sign Up</h3>
          <hr/>

          <div class="formbox">
          <form method="post" action="page-2.php" name="signup-frm"
            onsubmit="return notYet()">
            <!-- this form needs username, Fname, Lname, password, email, phone -->

              <input type="text" id="fname" class="frm2" name="fname"
                placeholder="First Name">
                <br/><h6 id="fname-error" class="error-m">Please enter first name</h6>
                <h6 id="fname-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="text" id="lname" class="frm2" name="lname"
                placeholder="Last Name">
                <br/><h6 id="lname-error" class="error-m">Please enter your last name</h6>
                <h6 id="lname-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="text" id="email" class="frm2" name="email"
                placeholder="Email">
                <br/><h6 id="email-error" class="error-m">Please enter a valid email</h6>
                <h6 id="email-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="password" id="password1" class="frm2" name="password1"
                placeholder="Password">
                <br/><h6 id="password1-nomatch" class="error-m">Your passwords don't match</h6>
                <h6 id="password1-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="password" id="password2" class="frm2" name="password2"
                placeholder="Verify Password">
                <br/><h6 id="password2-nomatch" class="error-m">Your passwords don't match</h6>
                <h6 id="password2-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="submit" value="Sign Up">
              <button type="button" id="login">Log In</button>
          </form>
        </div>


      </section>
    </div>
</body>



<script>

//this function checks if the user has entered a value into username
//and password. If null, it sends an error to the form from
//used for signup form
  function notYet() {
    var xin = [
            document.forms['signup-frm']['fname'].value,
            document.forms['signup-frm']['lname'].value,
            document.forms['signup-frm']['email'].value,
            document.forms['signup-frm']['password1'].value,
            document.forms['signup-frm']['password2'].value
    ];

    var zin = [
      "fname-missing",
      "lname-missing",
      "email-missing",
      "password1-missing",
      "password2-missing"
    ];

    //reset all values on resubmit
    var counter = 0;
    for(var i = 0; i < 5; i++){
      document.getElementById(zin[i]).style.display = "none";
    }//end for

    //set alerts for null values
    for(var i = 0; i < 5; i++){
      if(xin[i] == ""){
        document.getElementById(zin[i]).style.display = "block";
        counter++;
      }//end if
    }// end for

    //return value
    if(counter > 0)
        return false;

  }//end function


  //this function is used for login forms
  //used to check for null values
  function validateForm() {
      var x = document.forms["login-frm"]["uName"].value; //username
      var y = document.forms["login-frm"]["pword"].value; //password

      if (x == "" && y == "") { //missing user and pass
          document.getElementById("u-output").style.display = "block";
          document.getElementById("p-output").style.display = "block";
          return false;
      } else if (x == "") { //missing user
        document.getElementById("u-output").style.display = "block";
        document.getElementById("p-output").style.display = "none";

        return false;
      } else if (y == "") { //missing pass
          document.getElementById("p-output").style.display = "block";
          document.getElementById("u-output").style.display = "none";
          return false;
      }
  }//end function



  //set default display
  document.getElementById("s1-1").style.display = "none"; //change back to s1-2 when finished

  //switch display from login to sign up on button click
  document.getElementById("sign-up").onclick = funcSwitch;

  function funcSwitch() {
    document.getElementById("s1-1").style.display = "none"; //login disappear
    document.getElementById("s1-2").style.display = "block"; //Sign up appear
  }//end function

  //switch display from sign up to login on button click
  document.getElementById("login").onclick = funcSwitch2;

  function funcSwitch2() {
    document.getElementById("s1-2").style.display = "none"; //login disappear
    document.getElementById("s1-1").style.display = "block"; //Sign up appear
  }//end function

</script>

</html>

<?php   //reset return values and errors on reload

//these are error messages and user data that is filled if login failed.
//session data set on page-1.php. If user reloads page, then this data
//must be cleared
	unset($_SESSION["error1"]);
	unset($_SESSION["error2"]);
	unset($_SESSION["return_un"]);
	unset($_SESSION["return_pw"]);
?>
