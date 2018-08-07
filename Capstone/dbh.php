<?php

$conn = mysqli_connect("localhost", "blakero2_users", "1234", "blakero2_user");

if(!$conn) {
	die("Connection failed: " .mysql_connect_error());
}