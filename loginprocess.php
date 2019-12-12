<?php
  ini_set('display_errors', 1);
  ini_set('log_errors',1);
  error_reporting(E_ALL); 
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    session_start();
    $servername = "127.0.0.1";
    $serveruser = "root";
    $serverUpass = "";
    $Dbname = "Users";

    // /* Define variable to perform connection to the server/
    $handler = mysqli_connect($servername, $serveruser, $serverUpass,$Dbname);

    if(isset($_POST['Baba'])){
        $user = mysqli_real_escape_string($handler, $_REQUEST['HAHA']);
        $pass = mysqli_real_escape_string($handler, $_REQUEST['password']);
        if(empty($_POST['HAHA']) || empty($_POST['password'])){
            header("location:login.php?Empty= Please Fill in the Blanks");
            exit();    
        }
        else{
        $query="SELECT * FROM person WHERE Username=? ";
            $stmt = mysqli_stmt_init($handler);
            // Then we prepare our SQL statement AND check if there are any errors with it.
            if (!mysqli_stmt_prepare($stmt, $query)) {
            // If there is an error we send the user back to the signup page.
            header("Location: login.php?Empty=Fuck You");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                // Then we match the password from the database with the password the user submitted. The result is returned as a boolean.
                $PassCheck=password_verify($pass,$row['Password']); 
                  // If there is an error we send the user back to the signup page.
                  if ($PassCheck == false) {
                    // Next we need to create session variables based on the users information from the database. If these session variables exist, then the website will know that the user is logged in.
                    // Now that we have the database data, we need to store them in session variables which are a type of variables that we can use on all pages that has a session running in it.
                    // This means we NEED to start a session HERE to be able to create the variables!
                    session_start();
                    $_SESSION['Username'] = $row['Username'];
                    $_SESSION["Login"] = 'a';
                    // Now the user is registered as logged in and we can now take them back to the front page!
                    header("Location: login.php?Invalid=success");
                    exit();
                  }else if($PassCheck == true){
                  
                  exit();
                  }
                }
                
              
              else {
                header("Location: login.php?Empty=Try again");
                
                exit();
              }
            }
          // Then we close the prepared statement and the database connection!
          mysqli_stmt_close($stmt);
          mysqli_close($handler);
        }
    }
          else {
          // If the user tries to access this page an inproper way, we send them back to the signup page.
          header("Location: bookings.html");
          exit();
           }


  //         $check= mysqli_query($handler,$query);
  //         if(mysqli_fetch_assoc($check)){
  //             $_SESSION['username'] =$_POST['username'];
  //             header("location:booking.html");
          
  //             header("location:login.php?Invalid= Please Enter Correct User Name and Password");
  //         }
  //         }
      
  // }
?>
