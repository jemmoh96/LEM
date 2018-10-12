<?php
//Establishing a connection.
$host='localhost';
$user='root';
$pass='';
$db='jtcc_db';

$conn=mysqli_connect($host, $user,$pass, $db);

//confirming connection
if($conn){
	echo '';
}
else{
	echo 'Connection Error';
}
?>
