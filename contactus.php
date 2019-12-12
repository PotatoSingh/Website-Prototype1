<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact us</title>
    <link rel="stylesheet" href="contactus.css" type="text/css">
    </head>
    
    <body>
        <div class="main">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="book.html">Books</a></li>
                <li><a href="bookings.html">Bookings</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="terms.php">Terms of Use</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="faq.html">FAQ</a></li>
                </ul>
        </div>
        <div>
            <img src="images/Bookie logo.png" width="100px" height="90px">
        </div> 
        <?php
                if(@$_GET['Invalid']== true)
                {
        ?>
            <div> <script language="javascript" type="text/javascript"> 
                alert("Please enter all the fields.");
                </script>
            </div>
        <?php
				}
        ?>
        <?php
			if(@$_GET['Wrong']== true)
			{
			?>
			<script language="javascript" type="text/javascript"> 
			alert("Please Insert numbers");
            </script>
			<?php
            }
            ?>
         <?php
			if(@$_GET['mail']== true)
			{
			?>
			<script language="javascript" type="text/javascript"> 
			alert("Please enter a valid email address.");
            </script>
			<?php
            }
            ?>   
        <?php    
        ?>
        <?php
                if(@$_GET['Empty']== true)
                {
        ?>
            <div> <script language="javascript" type="text/javascript"> 
                alert("Thank you for dropping us a message, we will get back to you soon.");
                </script>
            </div>
        <?php
				}
        ?>
        <div class="form" >
            <h2>Contact us</h2>
                <form action="contactusprocess.php" method="POST">
                    <div class="inputForm">
                        <input type="text" name="user_firstname" required="">
                        <label>First Name</label>
                    </div>       
                    <div class="inputForm">
                            <input type="text" name="user_lastname" required="">
                            <label>Last Name</label>
                    </div> 
                    <div class="inputForm">
                            <input type="mail" name="user_mail" required="">
                            <label>Email Address</label>
                    </div> 
                    <div class="inputForm">
                            <input type="text" name="user_number" required="">
                            <label>Contact Number</label>
                    </div> 
                    <div class="inputForm">
                            <input type="text" name="user_message" required="">
                            <label>Message</label>
                    </div> 
                    <input type="submit" name="Submit" value="Submit">
                    </div>               
                </form>
        
                <table>
                    <tr>
                        <td><img src="images/email.png" alt="email icon" width="30" height="30" class="img"></td>
                        <td width="60%">bookiestore@gmail.com</td>
                    </tr>
                    <tr>
                        <th><img src="images/phone.png"alt="phone icon" width="30" height="30" class="img"></th>
                        <td>0182990000</td>
                    </tr>
                    <tr>
                        <th><img src="images/instagram.png"alt="instagram icon" width="30" height="30" class="img"></th>
                        <td><a href="https://www.instagram.com/?hl=en" target="_top">bookiestore</a></td>
                    </tr>
                    <tr>
                        <th><img src="images/facebook.png"alt="facebook icon" width="30" height="30" class="img"></th>
                        <td><a href="https://www.facebook.com/" target="_top">Bookie Store</a></td>
                    </tr>
                </table>

                <footer>
                    <?php
                        echo "Creation date is ".date('23/06/2019,');
                        echo ("<br>Last Modified date is ".date('01/07/2019,'));
                        ?>
                        <br><br>
                        Copyright &copy; 2019 BookieStore<br>
                        <br><b>Disclaimer:</b> Materials such as images,and book synopses on this website do not belong<br><br>to Bookie Store.
                        These materials are obtained from the Internet for assignment purpose only. 
                </footer>
    </body>
    
</html>