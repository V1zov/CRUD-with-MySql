<?php

$host="localhost";
$user="root";
$password="";
$db="belajarcrud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Gagal menghubungkan ke Database:".mysqli_connect_error());
}
?>
