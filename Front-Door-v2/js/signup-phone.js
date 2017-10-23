//check for window width and height
  var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;

  var h = window.innerHeight
  || document.documentElement.clientHeight
  || document.body.clientHeight;

  var middle = (h - 650)/2; //400 is height of login panel, divided by top and bottom
  document.getElementById("conf-code").style.marginTop = middle + "px";
