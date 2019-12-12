<?php
session_start();
$servername = "127.0.0.1";
$serveruser = "root";
$serverUpass = "";
/** Define variable to perform connection to the server*/
$handler = mysqli_connect($servername, $serveruser, $serverUpass);
// Here we check whether the user got to this page by clicking the proper signup button.
if (isset($_POST['Submit'])) {
  mysqli_select_db($handler,'users') or die("Cannot select DB");  
  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.

  // We grab all the data which we passed from the signup form so we can use it later.
  $Firstname = mysqli_real_escape_string($handler, $_REQUEST["user_firstname"]);
	$Lastname = mysqli_real_escape_string($handler, $_REQUEST["user_lastname"]);
	$Email = mysqli_real_escape_string($handler, $_REQUEST["user_mail"]);
	$Number = mysqli_real_escape_string($handler, $_REQUEST["user_number"]);
	$Address = mysqli_real_escape_string($handler, $_REQUEST["user_message"]);
  $date = date('Y,m,d');
  if (!preg_match("/^[0-9]*$/", $Number)) {
    header("Location: signup.php?Wrong=Please enter only numbers ".$Username);
    exit();
  }
  else if(filter_var($Email,FILTER_VALIDATE_EMAIL)) {
    header("Location: signup.php?mail=Please Enter a correct email ".$Email);
    exit();
  }
  else{
  $sql= "INSERT INTO users.contact(Firstname, Lastname, Email, Number, Message,Datee)
          VALUES ('$Firstname','$Lastname','$Email2','$Number','$Address','$date')";
  mysqli_query($handler,$sql);   
  header("Location:contactus.php?Empty= We will get back to you in abit!");
}
}
  else{
  header("Location:contactus.php");
}       
?>