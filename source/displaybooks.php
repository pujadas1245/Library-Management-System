<html>
<head>
<style>
body{
	background-color: violet;
}
table{
		border:2px;
	 	align:center;
	  	cellspacing:5px; 
	  	cellpadding:5px	
}
</style>
</head>
<body>
<center>
<h2>Library Management System</h2>
<?php 
include 'member/connect.php';
$search=$_POST['search'];
$sql="select * from books where title='$search'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0) //Return the number of rows in result set
{
?>
<table>
<tr>
<th>ISBN</th>
<th>Title</th>
<th>Author</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['isbn'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['author'];?></td>
</tr>
<?php
}
}
else
{
echo "No books found in the library by the name $search";
}
?>
</table>
</center>
</body>
</html>