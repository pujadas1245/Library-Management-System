<html>
<head>
<style>
body{
	background-color: violet;
}
</style>
</head>
<body>
<center><h2>Library Management System</h2></center>
<?php 
include 'member/connect.php';
$isbn=$_POST['isbn'];
$title=$_POST['title'];
$author=$_POST['author'];
$sql="INSERT INTO books(isbn,title,author) VALUES('$isbn','$title','$author')";
$result=mysqli_query($conn,$sql);
?>
<h3>Book infomation is inserted successfully</h3>
<a href="searchbooks.html">To search for the book information click here </a>
</body>
</html>