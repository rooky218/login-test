//check for window width and height
  var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;

  var h = window.innerHeight
  || document.documentElement.clientHeight
  || document.body.clientHeight;

  var middle = (h - 400)/2; //400 is height of login panel, divided by top and bottom
  document.getElementById("login").style.marginTop = middle + "px";


  function validateForm() {
      var x = document.forms["login-frm"]["uName"].value; //username
      var y = document.forms["login-frm"]["pword"].value; //password

      //check for null values and display error
      if (x == "" && y == "") { //missing user and pass
          document.getElementById("alert-missing-danger").style.display = "block"; //show message

          document.getElementById("uname-div").className = "input-group has-error has-feedback"; //highlight field
          document.getElementById("pword-div").className = "input-group has-error has-feedback"; //highlight field

          document.getElementById("uname-x").style.display = "block"; //highlight field icon
          document.getElementById("pword-x").style.display = "block"; //highlight field icon

          return false;

      } else if (x == "") { //missing user
        document.getElementById("alert-missing-danger").style.display = "block"; //show message

        document.getElementById("uname-div").className = "input-group has-error has-feedback"; //highlight field
        document.getElementById("pword-div").className = "input-group"; //highlight field

        document.getElementById("uname-x").style.display = "block"; //highlight field icon
        document.getElementById("pword-x").style.display = "none"; //highlight field icon

        return false;

      } else if (y == "") { //missing pass
        document.getElementById("alert-missing-danger").style.display = "block"; //show message

        document.getElementById("uname-div").className = "input-group"; //highlight field
        document.getElementById("pword-div").className = "input-group has-error has-feedback"; //highlight field

        document.getElementById("uname-x").style.display = "none"; //highlight field icon
        document.getElementById("pword-x").style.display = "block"; //highlight field icon

        return false;

      }//end else if

  }//end function

function filter(input){
  var regen = /[^a-z]/gi;
  input.value = input.value.replace(regen, "");
}//end function
