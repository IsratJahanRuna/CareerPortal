<?php

require_once ("connect.php");
 
$fname = htmlentities($_REQUEST["fname"]);
$lname = htmlentities($_REQUEST["lname"]);
$email = htmlentities($_REQUEST["email"]);
$password = htmlentities($_REQUEST["password"]);

$insertQuery= "INSERT INTO employee (First_Name,Last_Name,Email,Password) VALUES ('$fname','$lname','$email','$password')";

$runQuery= mysqli_query($connect,$insertQuery);

if($runQuery==true){
	header("location:index.php?DONE_SIGNUP=Registration Successfull!");
}
 
?>
