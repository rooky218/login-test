<?php require 'db/dblogin2.php'; ?>

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

            <p>This is an excercise of Javascript functions and objects. The user will
              submit a form and that form data will be added to a Javascript object. The
              last three results will be displayed on screen
            </p>

        </header>

        <section class="section-1" id="s1-2">
          <h3>Objects Practice</h3>
          <hr/>

          <div class="formbox">
          <form method="post" action="page-2.php" name="signup-frm"
            onsubmit="return notYet()">

              <input type="text" id="name" class="frm2" name="name"
                placeholder="John Smith">
                <br/><h6 id="name-error" class="error-m">Please enter first and last name</h6>
                <h6 id="name-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="text" id="email" class="frm2" name="email"
                placeholder="john@gmail.com">
                <br/><h6 id="email-error" class="error-m">Please enter a valid email</h6>
                <h6 id="email-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="text" id="eyes" class="frm2" name="eyes"
                placeholder="Eye Color">
                <br/><h6 id="password1-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="text" id="gender" class="frm2" name="gender"
                placeholder="Gender">
                <br/><h6 id="password2-missing" class="error-m">Oops, you forgot something...</h6><br/>

              <input type="submit" value="Submit">
          </form>
        </div>

          <p id="demo"></p>

        </section>

    </div>


<script>

function notYet() {
  var xin = [
          document.forms['signup-frm']['name'].value,
          document.forms['signup-frm']['email'].value,
          document.forms['signup-frm']['eyes'].value,
          document.forms['signup-frm']['gender'].value
  ];

  var zin = [
    "name-missing",
    "email-missing",
    "password1-missing",
    "password2-missing"
  ];

  var counter = 0;
  //reset all values
  for(var i = 0; i < 4; i++){
    document.getElementById(zin[i]).style.display = "none";
  }//end for

  //change null alerts
  for(var i = 0; i < 4; i++){
    if(xin[i] == ""){
      document.getElementById(zin[i]).style.display = "block";
      counter++;
    }//end if


  }// end for

  //return value
  if(counter > 0)
      return false;
      else{
        var user = new person(xin[0], xin[0], xin[1], xin[2], xin[3]);

        document.getElementById("demo").innerHTML =
        "<b>User info</b><br />" + "Name: " + user.firstName +
        "<br />Email: " + user.email +
        "<br />Eyecolor: " + user.eyecolor +
        "<br />Gender: " + user.gender;

        return false;
      }

}//end function

//object constructor
function person(first, last, email, eyes, gender) {
    this.firstName = first;
    this.lastName = last;
    this.email = email;
    this.eyecolor = eyes;
    this.gender = gender;
}





</script>

</body>
</html>
