<?php
	$conn=mysqli_connect("localhost","root","1234","mydatabase");
	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
?>