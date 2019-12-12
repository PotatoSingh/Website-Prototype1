<?php
?>
<!DOCTYPE html>
<html lang = "en">
<html>
<head>
	<title>Booking</title>
<meta charset = "utf-8">
<link rel="stylesheet" href="bookings.css" type="text/css">
</head>
<body>
            <?php
			if(@$_GET['Empty']== true)
			{
			?>
			<script language="javascript" type="text/javascript"> 
			alert("Please Log in to create a booking");
            </script>
			<?php
            }
            ?>
    
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
            <img src="images/Bookie logo.png" width="100px" height="90px" class="logospace">
        </div>

        <div class="border">
            <div class="content">
                <h2>Booking <br><br>Grab Your Books <span style="font-weight:bold">NOW!</span></h2>
        
                <div class="box">
                    <form method="POST" action="bookingsprocess.php">
                        <label for="action">Action/Mystery</label>
                        <!-- select element is used to create a drop-down list -->
                        <select name ="action" id="action" >
                            <!-- option tag defines an option in a select list. -->
                            <option>No option</option> 
                            <option>The Secret Place</option>
                            <option>Before I Go to Sleep</option>
                            <option>Big Little Lies</option>
                            <option>Free Fall</option>
                            <option>Jane Steele</option>
                            <option>Gone Girl</option>
                            <option>Still Mine</option>
                            <option>The Dinner</option>
                            <option>The Cuckoo's Calling</option>
                            <option>The Suspect</option>
                        </select>
        
        
                        <label for="fantasy">Fantasy</label>
                        <!-- select element is used to create a drop-down list -->
                        <select name ="fantasy" id="fantasy" >
                             <!-- option tag defines an option in a select list. -->
                            <option>No option</option>
                            <option>Harry Potter and the Philosopher's Stone </option>
                            <option>Fantastic Beasts and Where to Find Them</option>
                            <option>A Game of Thrones</option>
                            <option>A Storm of Swords</option>
                            <option>The Hobbit</option>
                            <option>King's Dragon</option>
                            <option>A Clash of Kings</option>
                            <option>The Chronicles of Narnia</option>
                            <option>Glass Sword</option>
                            <option>Muse of Nightmares</option>
                        </select>
                        <br>

                        <label for="romance">Romance</label>
                        <!-- select element is used to create a drop-down list -->
                        <select name ="romance" id="romance"  >
                             <!-- option tag defines an option in a select list. -->
                            <option>No option</option>
                            <option>Field Notes of Love</option>
                            <option>The DNA of Your and Me</option>
                            <option>Me Before You</option>
                            <option>The Notebook</option>
                            <option>This Man</option>
                            <option>Story of Oz</option>
                            <option>The Fault In Our Stars</option>
                            <option>Twilight</option>
                            <option>Act Like It</option>
                            <option>The Last Song</option>
                        </select>
                        <br>

                        <label for="children">Children</label>
                        <!-- select element is used to create a drop-down list -->
                        <select name ="children" id="children">
                             <!-- option tag defines an option in a select list. -->
                            <option>No option</option>
                            <option>Where The Wild Things Are</option>
                            <option>The Very Hungry Caterpillar</option>
                            <option>Goodnight Moon</option>
                            <option>The BFG</option>
                            <option>Madeline</option>
                            <option>Guess How Much I Love You</option>
                            <option>Charlie and The Chocolate Factory</option>
                            <option>The Tale of Peter Rabbit</option>
                            <option>The Wonderful Things You Will Be</option>
                            <option>The Little Prince</option>
                        </select>
                        <br>

                        <label for="horror">Horror</label>
                        <!-- select element is used to create a drop-down list -->
                        <select name ="horror" id="horror">
                             <!-- option tag defines an option in a select list. -->
                            <option>No option</option>
                            <option>The Hunger</option>
                            <option>The Missing Season</option>
                            <option>Cardinal Black</option>
                            <option>The Cabin at the End of the World</option>
                            <option>Unbury Carol</option>
                            <option>Sawkill Girls</option>
                            <option>Dread Nation</option>
                            <option>Pitch Dark</option>
                            <option>Sleeping Beauties</option>
                            <option>Ararat</option>
                        </select>
                        <br>

                        <label for="sci-fi">Sci-Fi</label>
                        <!-- select element is used to create a drop-down list -->
                        <select name ="sci-fi" id="sci-fi">
                             <!-- option tag defines an option in a select list. -->
                            <option>No option</option>
                            <option>The Lord of the Rings</option>
                            <option>The Hitchhiker's Guide to the Galaxy</option>
                            <option>Ender's Game</option>
                            <option>Dune</option>
                            <option>1984</option>
                            <option>Brave New World</option>
                            <option>Animal Farm</option>
                            <option>The Calculating Stars</option>
                            <option>Ancestral Night</option>
                            <option>The Gone World</option>
                        </select>
                        <br>

                        <button type="submit" name="submit-book" class="submit" >Submit!</button>

                    </form>
                </div>
            </div>
        </div>
   


			<footer>
					<script type="text/javascript">
						var date = '23/06/2019';
						var date2 = '01/07/2019';
					</script>
					<p>
					Creation on :
					<script type="text/javascript">
					document.write(date)
					</script>
					</p>
					<p>
					The Last modified date is:
					<script type="text/javascript">
					document.write(date2)
					</script>
					</p>
				Copyright &copy; 2019 BookieStore<br>
				<br><b>Disclaimer:</b> Materials such as images,and book synopses on this website do not belong to Bookie Store.<br>
				These materials are obtained from the Internet for assignment purpose only. 
			</footer>
</body>
</html>