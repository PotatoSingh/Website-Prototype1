
<?php
session_start();
$servername = "127.0.0.1";
$serveruser = "root";
$serverUpass = "";
/** Define variable to perform connection to the server*/
$handler = mysqli_connect($servername, $serveruser, $serverUpass);
// Here we check whether the user got to this page by clicking the proper signup button.
if (isset($_POST['haha'])) {
  // We grab all the data which we passed from the signup form so we can use it later.
  $Firstname = mysqli_real_escape_string($handler, $_REQUEST["First_name"]);
	$Lastname = mysqli_real_escape_string($handler, $_REQUEST["Last_name"]);
	$Username = mysqli_real_escape_string($handler, $_REQUEST["Username"]);
	$Email = mysqli_real_escape_string($handler, $_REQUEST["User_mail"]);
	$Password = mysqli_real_escape_string($handler, $_REQUEST["Pass"]);
	$Address = mysqli_real_escape_string($handler, $_REQUEST["Add"]);
	$City = mysqli_real_escape_string($handler, $_REQUEST["City"]);
	$Zipcode = mysqli_real_escape_string($handler, $_REQUEST["Zip"]);
  // Then we perform a bit of error handling to make sure we catch any errors made by the user. Here you can add ANY error checks you might think of! I'm just checking for a few common errors in this tutorial so feel free to add more. If we do run into an error we need to stop the rest of the script from running, and take the user back to the signup page with an error message. As an additional feature we will also send all the data back to the signup page, to make sure all the fields aren't empty and the user won't need to type it all in again.
  $Email2 = filter_var($Email, FILTER_SANITIZE_EMAIL);
  // We check for an invalid username AND invalid e-mail.
  if (!preg_match("/^[a-zA-Z0-9]*$/", $Username) && !filter_var($Email2, FILTER_VALIDATE_EMAIL)) {
    header("Location: signup.php?Empty=Please Insert All the fields");
    exit();
  }
  // We check for an invalid username. In this case ONLY letters and numbers.
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $Username)) {
    header("Location: signup.php?Wrong=Please enter numbers and letter for the username only".$Username);
    exit();
  }
  // We check for an invalid e-mail.
  else if (!filter_var($Email2, FILTER_VALIDATE_EMAIL)) {
    header("Location: signup.php?mail=Please Enter a correct email ".$Email);
    exit();
  }

  else {

    // We also need to include another error handler here that checks whether or the username is already taken. We HAVE to do this using prepared statements because it is safer!
    $PwdHash = password_hash($Password, PASSWORD_DEFAULT);
    // First we create the statement that searches our database table to check for any identical usernames.
    $sql = "SELECT Username FROM users.person WHERE Username=?;";
	  // We create a prepared statement.
	  mysqli_select_db($handler,'users') or die("Cannot select DB");  
    $stmt = mysqli_stmt_init($handler);
    // Then we prepare our SQL statement AND check if there are any errors with it.
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // If there is an error we send the user back to the signup page.
      header("Location: signup.php?Database=Connection Error ");
      exit();
    }
    else {
      // Next we need to bind the type of parameters we expect to pass into the statement, and bind the data from the user.
      // In case you need to know, "s" means "string", "i" means "integer", "b" means "blob", "d" means "double".
      mysqli_stmt_bind_param($stmt, "s", $Username);
      // Then we execute the prepared statement and send it to the database!
      mysqli_stmt_execute($stmt);
      // Then we store the result from the statement.
      mysqli_stmt_store_result($stmt);
      // Then we get the number of result we received from our statement. This tells us whether the username already exists or not!
      $resultCount = mysqli_stmt_num_rows($stmt);
      // Then we close the prepared statement!
      mysqli_stmt_close($stmt);
      // Here we check if the username exists.
      if ($resultCount > 0) {
        header("Location: signup.php?Username=Username already taken".$email);
        exit();
      }
      else {
        // If we got to this point, it means the user didn't make an error! :)

        // Next thing we do is to prepare the SQL statement that will insert the users info into the database. We HAVE to do this using prepared statements to make this process more secure. DON'T JUST SEND THE RAW DATA FROM THE USER DIRECTLY INTO THE DATABASE!
		
        // Prepared statements works by us sending SQL to the database first, and then later we fill in the placeholders (this is a placeholder -> ?) by sending the users data.
        $sql= "INSERT INTO users.person(Firstname, Lastname, Username, Email, Password, Address, City, Zipcode)
				VALUES ('$Firstname','$Lastname','$Username','$Email','$PwdHash','$Address','$City','$Zipcode')";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($handler);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: signup.php?Error=Sorry ");
          exit();
        }
        else {

          // If there is no error then we continue the script!

          // Before we send ANYTHING to the database we HAVE to hash the users password to make it un-readable in case anyone gets access to our database without permission!
          // The hashing method I am going to show here, is the LATEST version and will always will be since it updates automatically. DON'T use md5 or sha256 to hash, these are old and outdated!
          
          // Next we need to bind the type of parameters we expect to pass into the statement, and bind the data from the user.
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
          header("Location: signup.php?Success=Congrats");
          exit();

        }
      }
    }
  }
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  // If the user tries to access this page an inproper way, we send them back to the signup page.
  header("Location: signup.php");
  exit();
}