<?php
	include 'header.php';
?>

	
	<?php	
		if(isset($_SESSION['id'])) {
			echo $_SESSION['id'];
		}else {
			echo "you are not logged in";
		}
	
	?>
   
   <form action="signup.php" method="POST">
	<input type='text' name="firsts" placeholder="Firstname"><br>
	<input type='text' name="lasts" placeholder="Lastname"><br>
	<input type='text' name="uid" placeholder="UID"><br>
	<input type='password' name="pwd" placeholder="Password"><br>
	<button type="submit">SIGN UP</button>
   </form>
   

   </body>

</html>