<?php
session_start();
include 'dbh.php';

$newemail = $_POST['newemail'];
$uname = $_POST['uname'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$sql= "INSERT INTO sign (newemail,uname,password1,password2) VALUES ('$newemail','$uname','$password1','$password2')";
$result = mysqli_query($conn,$sql);

header("Location: index1.php");
?>
