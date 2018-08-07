<?php
session_start();

include 'dbh.php';

$firsts = $_POST['firsts'];
$lasts = $_POST['lasts'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email =$_POST['email'];

if (empty($firsts)){
	header("Location: signin.php?error=empty");
	exit();
}
if (empty($lasts)){
	header("Location: signin.php?error=empty");
	exit();
}
if (empty($uid)){
	header("Location: signin.php?error=empty");
	exit();
}
if (empty($pwd)){
	header("Location: signin.php?error=empty");
	exit();
}
if (empty($email)){
	header ("Location: signin.php?error=empty");
	exit();
}
else{
	$sql = "SELECT uid FROM users WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);
	$uidcheck = mysqli_num_rows($result);
	if ($uidcheck > 0){
		header("Location: signin.php?error=username");
		exit();
	} else {
		$sql = "INSERT INTO users (firsts, lasts, uid, pwd,email) 
		VALUES ('$firsts','$lasts','$uid','$pwd','$email')";

		$result = mysqli_query($conn, $sql);
		
		$to      = $email; // Send email to our user
			$subject = 'Signup | Verification'; // Give the email a subject 
			$message = '
			 
			Thanks for signing up!
			Your account has been created, you can login with the following credentials.
			 
			------------------------
			Username: '.$uid.'
			Password: '.$pwd.'
			------------------------
			 
			 
			'; // Our message above including the link
								 
			$headers = 'From:Blakeron75@x10hosting.com' . "\r\n"; // Set from headers
			mail($to, $subject, $message, $headers); // Send our email

		header("Location: newsignup.php");
	}
}

