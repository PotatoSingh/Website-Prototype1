
<?php
session_start();

$servername = "127.0.0.1";
$serveruser = "root";
$serverUpass = "";
if(!isset($_SESSION['Username'])){
    header("Location:bookings.php?Empty=You must be logged in to create a booking");
    exit();

/** Define variable to perform connection to the server*/
    $handler = mysqli_connect($servername, $serveruser, $serverUpass);
// Here we check whether the user got to this page by clicking the proper signup button.
    if (isset($_POST['submits'])) {
  // We grab all the data which we passed from the signup form so we can use it later.
    $Firstname = mysqli_real_escape_string($handler, $_REQUEST["action"]);
	$Lastname = mysqli_real_escape_string($handler, $_REQUEST["fantasy"]);
	$Username = mysqli_real_escape_string($handler, $_REQUEST["romance"]);
	$Email = mysqli_real_escape_string($handler, $_REQUEST["children"]);
	$Password = mysqli_real_escape_string($handler, $_REQUEST["horror"]);
	$Address = mysqli_real_escape_string($handler, $_REQUEST["sci-fi"]);
    $date = date('Y,m,d');
    $real = $_SESSION['Username'];
    // We also need to include another error handler here that checks whether or the username is already taken. We HAVE to do this using prepared statements because it is safer!
    // We create a prepared sql statement.
    $sql= "INSERT INTO users.booking(Username,Action, Fantasy, Romance, Children, Horror, Sci-fi,Datee)
    VALUES ($real,$Firstname,'$Lastname','$Username','$Email','$Password','$Address','$date')";
	// Initialize connection to the database.
	mysqli_select_db($handler,'users') or die("Cannot select DB");  
    mysqli_query($handler,$sql);
    header("Location: bookings.php?Success=Congratulations for making ");
    }
    else {
    // If the user tries to access this page an inproper way, we send them back to the signup page.
    header("Location: bookings.php");
    exit();
    }
}
