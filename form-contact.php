<?php
session_start();

$salt = "LifeProductionsContactForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('subject' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    // Send email
    $Subject = $_POST[md5('subject' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    $SendTo = "lippert@gmail.com";
    $Headers = "From: " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " <" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ">\r\n";
    $Headers .= "Bcc: mark@foresitegrp.com\r\n";

    $Message = $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);

    $feedback = "Your message has been sent! We will get back to you soon.";
    
    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#contact-form");
}
?>