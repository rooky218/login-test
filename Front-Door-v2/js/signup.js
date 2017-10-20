//check for window width and height
  var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;

  var h = window.innerHeight
  || document.documentElement.clientHeight
  || document.body.clientHeight;

  var middle = (h - 400)/2; //400 is height of login panel, divided by top and bottom
  document.getElementById("signup").style.marginTop = middle + "px";

  //this function checks if the user has entered a value into username
  //and password. If null, it sends an error to the form from
  //used for signup form
    function validateForm() {
      var xin = [
        document.forms['signup-frm']['fname'].value,
        document.forms['signup-frm']['lname'].value,
        document.forms['signup-frm']['email'].value,
        document.forms['signup-frm']['pword'].value,
      ];

      var yin = [
        "fname-div",
        "lname-div",
        "email-div",
        "pword-div"
      ];

      var zin = [
        "fname-x",
        "lname-x",
        "email-x",
        "pword-x"
      ];

      //reset all values on resubmit
      var counter = 0;
      for(var i = 0; i < 4; i++){
        document.getElementById(yin[i]).className = "form-group"; //reset highlight
        document.getElementById(zin[i]).style.display = "none";
      }//end for

      //set alerts for null values
      for(var i = 0; i < 4; i++){
        if(xin[i] == ""){
          document.getElementById(yin[i]).className = "form-group has-error has-feedback"; //highlight field
          document.getElementById(zin[i]).style.display = "block";
          counter++;
        }//end if
      }// end for

      //return value
      if(counter > 0){
        document.getElementById("alert-missing-danger").style.display = "block"; //show message
        return false;
      }

    }//end function


function filter(input){
  var regen = /[^a-z]/gi;
  input.value = input.value.replace(regen, "");
}//end function
