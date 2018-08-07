<?php
	session_start();
?>

<!DOCTYPE html>
<html>
   <head>
		
		
      <title>For The Kids</title>

      <link href="rb.css" rel="stylesheet" />
	   <link href="forms.css" rel="stylesheet" />

   </head>
   <body>
   
   <header>
         <article>
			
            <h1>Simply The Best</h1>
            <p>Thank you for taking the time to visit our website. We 
				take the time to make your kids the best at soccer and 
				give some time to yourself. At the end of the day kids 
				will be Simply The Best, at soccer.  
            </p>
           
         </article>
		<nav>
			<ul>
				<li><a href="signin.php">SIGN UP</a></li>
				<li><a href="newsignup.php">HOME</a></li><br><br><br><br>
				<?php	
				
					if(isset($_SESSION['id'])) {
						 echo "<form action='logout.php'>
						<button>LOG OUT</button>
							</form>";
					}else {
						echo "<form action='login.php' method='POST'>
					<input type='text' name='uid' placeholder='UID'><br>
					<input type='password' name='pwd' placeholder='Password'><br>
					<button type='submit'>Login</button>
					</form> ";
		}
				
				?>
				
			</ul>
		</nav>
   </header>
   <body>
	<?php
		if(isset($_SESSION['id'])) {
		echo "Welcome to Simply the Best we are a sporting company that help parents find a soccer team for their kids.
		We do our best to make your kids Simply The Best, no matter what it takes. We will do everything we can to make 
		sure your kids have fun and get better. Our payment plan are very simply and will cost you nothing. The payment is 
		up to you, Have your kids play for just the summer or longer. We have different payments that will suit anyone. 
		No hidden fees. Join us today.";
					
		echo "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
				<input type='hidden' name='cmd' value='_s-xclick'>
				<input type='hidden' name='hosted_button_id' value='FSKY8V34MHKK2'>
				<table>
				<tr><td><input type='hidden' name='on0' value='Payment Options'>Payment Options</td></tr><tr><td><select name='os0'>
					<option value='Three Months'>Three Months : $20.00 USD - monthly</option>
					<option value='Six Months'>Six Months : $40.00 USD - monthly</option>
					<option value='Year'>Year : $60.00 USD - yearly</option>
				</select> </td></tr>
				</table>
				<input type='hidden' name='currency_code' value='USD'>
				<input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_SM.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
				<img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'>
				</form>";
		
	}		
   ?>
   </body>
   
   <footer>
      <address>
         Simply the Best &bull;
         864 Central ave &bull;
         Orlando, FL  32158 &bull;
         (551)864-8004 
      </address>
   </footer>
   