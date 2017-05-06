<?php
	//session_start();
	include 'dbh.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql= "SELECT * FROM sign WHERE newemail='$email' AND password1='$password'";

	$result = mysqli_query($conn,$sql);
	if(!$row = mysqli_fetch_assoc($result))
	{
		echo "Your email or password is incorrect!";
	}
	else
	{
		$_SESSION['id'] = $row['id'];
		header("Location: login.html");
	}
	//header("Location: login.html");
?>
