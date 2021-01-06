<?php
include('../db/db.php');

$userName= $_POST['user_name'];
$userEmail= $_POST['email'];
$userPassword= $_POST['password'];

$sql = "INSERT INTO users(user_name,email,password)
VALUES('$userName','$userEmail','$userPassword')";

mysqli_query($connection,$sql);
header("Location: ../index.php?register=sucess")

 ?>