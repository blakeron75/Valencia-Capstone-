<?php
	include 'header.php';
?>

	
	<?php	
		
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (strpos($url, 'error=empty')!==false){
			echo "empty field";
		}
		elseif (strpos($url, 'error=username')!==false){
			echo "Username already exist";
		}
		if (strpos($url, 'error=empty')!==false){
			echo "empty field";
		}
		elseif (strpos($url, 'error=email')!==false){
			echo "Email Already Exist";
		}
		if(isset($_SESSION['id'])) {
			echo $_SESSION['id'];
		}else {
			echo "";
		}
	
	?>
	<body>
	<section>
      <p>Register Your Kids Today </p>

      <form action="signup.php" method="POST">
	  
         <fieldset id="custInfo">
            <legend>Your Information</legend>
				<input type='text' name="firsts" placeholder="Firstname"><br>
				<input type='text' name="lasts" placeholder="Lastname"><br>
				<input type='text' name="uid" placeholder="UID"><br>
				<input type='password' name="pwd" placeholder="Password"><br>
				<input type='email' name="email" placeholder="Email"><br>
				<br><br><br><br><br><button type="submit">SIGN UP</button>
         </fieldset>
			
      </form>

   </section>

   

   </body>

</html>