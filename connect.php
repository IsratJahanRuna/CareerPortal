<?php
$host = "localhost";
$dbuser = "Israt";
$dbpass = "1234isratruna";
$dbname = "careerportal";

$connect = mysqli_connect($host,$dbuser,$dbpass,$dbname);
if($connect == false)
{
	echo "<h2>Error establishing database connection!</h2>";
}
?>