<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign up</title>
         <link rel="stylesheet" href="signupcss.css" type="text/css">
     </head>
     
    <body>
            <div>
            <?php
                if(@$_GET['Empty']== true)
                {
            ?>
                 <script language="javascript" type="text/javascript"> 
                alert("Please Insert All Of the Fields");
                </script>
            <?php
                }
            ?>
             <?php
                if(@$_GET['Wrong']== true)
                {
            ?>
                 <script language="javascript" type="text/javascript"> 
                alert("Please Enter Letters and Numbers only for the username");
		            </script>
            <?php
				}
            ?>
             <?php
                if(@$_GET['mail']== true)
                {
            ?>
                 <script language="javascript" type="text/javascript"> 
                alert("Please Enter a correct email");
                </script>
            <?php
                }
            ?>
             <?php
                if(@$_GET['Database']== true)
                {
            ?>
                 <script language="javascript" type="text/javascript"> 
                alert("There is a connection error, Please Try Again Later");
		            </script>
            <?php
				}
            ?>
            <?php
                if(@$_GET['Username']== true)
                {
            ?>
                 <script language="javascript" type="text/javascript"> 
                alert("Username already taken");
                </script>
            <?php
                }
            ?>
            <?php
                if(@$_GET['Success']== true)
                {
            ?>
                 <script language="javascript" type="text/javascript"> 
                alert("Congratulations for signing up!");
                </script>
            <?php
                }
            ?>
            </div>
            <div class="main">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="book.html">Books</a></li>
                <li><a href="bookings.php">Bookings</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="termsofuse.html">Terms of Use</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="faq.html">FAQ</a></li>
                </ul>
            </div>
            <div>
                <img src="images/Bookie logo.png" width="100px" height="90px">
            </div> 
            <div class="form">
                <h2>Sign Up</h2>
                    <form action="signupprocess.php" method="POST"> 
                        <div class="inputForm">
                            <input type="text" name="First_name" required="First_name">
                            <label>First Name</label>
                        </div>
                        <div class="inputForm">
                            <input type="text" name="Last_name" required="Last_name">
                            <label>Last Name</label>
                        </div>
                        <div class="inputForm">
                            <input type="text" name="Username" required="Username">
                            <label>Username</label>
                        </div>
                        <div class="inputForm">
                            <input type="text" name="User_mail" required="User_mail">
                            <label>Email Address</label>
                        </div>
                        <div class="inputForm">
                            <input type="password" name="Pass" required="Pass">
                            <label>Password</label>
                        </div>
                        <div class="inputForm">
                            <input type="text" name="Add" required="Add">
                            <label>Address</label>
                        </div>
                        <div class="inputForm">
                            <input type="text" name="City" required="City">
                            <label>City</label>
                        </div>
                        <div class="inputForm">
                            <input type="text" name="Zip" required="Zip">
                            <label>Zip code</label>
                        </div>
                        <input type="submit" name="haha" value="Submit">
                    </form>
            </div>
            <footer>
            <?php
                echo ("Creation date is ".date('23/06/2019,')."and the time is ".date('14:26'));
                echo ("<br>Last Modified date is ".date('01/07/2019,')."and time is ".date('17:20'));
                ?>
                <br>Copyright &copy; 2019 BookieStore<br>
                <br><b>Disclaimer:</b> Materials such as images,and book synopses on this website do not belong<br> <br>to Bookie Store.
                These materials are obtained from the Internet for assignment purpose only. 
            </footer>
        
    </body>
</html>