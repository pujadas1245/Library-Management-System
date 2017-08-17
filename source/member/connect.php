<?php
	$user='root';
	$pass='';
	$db='test';
	$conn=mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect".mysqli_error($conn));
?>