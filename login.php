<!DOCTYPE html>
<html lang = "en">
<html>
<head>
	<title>Login Form</title>
<meta charset = "utf-8">
<link rel="stylesheet" href="logincss.css" type="text/css">
</head>
<body>
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
	<?php
	// Start up your PHP Session 
	session_start();
	// If the user is not logged in send him/her to the login form
	if (isset($_SESSION["Username"])) {
	  echo ("<form action='logout.php' method='post'>
		  <button type='submit' class='haha' name='loginsub'>Logout</button>
		</form>");
	}else{
		echo("<p><font color=blue font ='verdana' size = '2pt'>You are not logged in </font></p>");
	}
			?>
		  

		
			<?php
			if(@$_GET['Empty']== true)
			{
			?>
			<script language="javascript" type="text/javascript"> 
			alert("Incorrect Username Or password");
			</script>
			<?php
			}
			?>
             <?php
                if(@$_GET['Invalid']== true)
                {
            ?>
            <script language="javascript" type="text/javascript"> 
                alert("Welcome back!!");
			</script>
            <?php
				}
            ?>
			
		<div>
			<img src="images/Bookie logo.png" width="100px" height="90px">
		</div>
		<div class="loginbox">
		<img src="images/log.png" class="log">
        <h1> Login </h1>
		<form  action="loginprocess.php" method="post">
           
			<div class="name">
			<label for ="name"> Username/E-mail:</label>
			<input type="text" id="name" name="HAHA" placeholder="Enter Username/E-mail">
			</div>

			<div class="password">
			<label for="password"> Password:</label>
			<input type="password" id="password" name="password" placeholder="Enter Password">
			</div>

			<div>
			<button  name="Baba" >Login</button>
			</div>
		</form>	
		</div>
</body>
<footer >
			<?php
			echo ("Creation date is ".date('23/06/2019,'));
			echo ("<br>Last Modified date is ".date('01/07/2019,'));
			?>
			<br><br>
        	Copyright &copy; 2019 BookieStore<br>
        	<br><b>Disclaimer:</b> Materials such as images,and book synopses on this website do not belong<br> <br>to Bookie Store.
			These materials are obtained from the Internet for assignment purpose only. 
			<?php
			
			?>
</footer>	

</html>