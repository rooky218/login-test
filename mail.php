<?php

$message = "This is a test from the Ampps server";

if(mail("bwalker35@liberty.edu", "Test 1", $message)){
  echo "Message was sent";
} else {
  echo "Message failed to send";
}

if(mail("soft@127.0.0.1", "Test 1", $message)){
  echo "Message was sent";
} else {
  echo "Message failed to send";
}
?>
