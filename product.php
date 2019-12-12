<?php
session_start();
if($_SESSION["Username"] != "admin"){
    header("Location: login.php");}
?>
<form  action="product.php" method="post" class="submission-form">
<fieldset>
    <legend>Sign up</legend>
    <h3>Your Information</h3>
            <div >
                <label for="firstname">Genre: </label>
                <input type="text" id="firstname" name="firstname" /><br>
            </div>
            <div >
                <label for="lastname">Title: </label>
                <input type="text" id="lastname" name="lastname" /><br>
            </div>
            <div >
                <label for="username">Price: </label>
                <input type="text" id="email" name="email" /><br>
            </div>
            <button type="submit" name="submit" class="submit" >Submit!</button>
</form>
<?php
$servername = "127.0.0.1";
$serveruser = "root";
$serverUpass = "";
/** Define variable to perform connection to the server*/
$handler = mysqli_connect($servername, $serveruser, $serverUpass);
// Here we check whether the user got to this page by clicking the proper signup button.
// If the user is not logged in send him/her to the login form
if (isset($_POST['submit'])) {
  echo("You are logged in");
  echo '<form action="logout.php" method="post">
      <button type="submit" name="loginsub">Logout</button>
    </form>';

    mysqli_select_db($handler,'users') or die("Cannot select DB");  
    
  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.

  // We grab all the data which we passed from the signup form so we can use it later.
            $Genre = mysqli_real_escape_string($handler, $_REQUEST["firstname"]);
	        $Lastname = mysqli_real_escape_string($handler, $_REQUEST["lastname"]);
	        $Username = mysqli_real_escape_string($handler, $_REQUEST["email"]);

            $sql = "INSERT INTO users.product (Genre, Title, Price)
            VALUES ('$Genre','$Lastname', '$Username')";

            if ($handler->multi_query($sql) === TRUE){

            echo "New records created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $handler-> error;
            }
        }
else{
    echo("<br>You do not have authorization to this file");
    }
?>

