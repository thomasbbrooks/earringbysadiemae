<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "bro21054@byui.edu";
  $headers = "From: ". $mailFrom;
  $txt = "You have recieved and e-mail from ".$name.". \n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Loaction: checkout.php?mailsend");
}

?>