<?php
session_start(); 
?>
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
<center><h2>Library Management System</h2></center>
<br><br>
<h2>Return Books</h2>
<?php
include 'member/connect.php';
echo "<table>
	<tr>
		<th>Id</th>
		<th>Issued Books Name<th>
		<th>issued Books Date</th>
		<th>Issued Books Return Date</th> 
		<th>Return Books</th>
	</tr>";	
	$id=print_r($_SESSION[Id]);

$sql="SELECT * FROM `issue_books` WHERE id='$id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
	{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['books_name']."</td>";
			echo "<td>".$row['books_issue_date']."</td>";
			echo "<td>".$row['books_return_date']."</td>";
			echo '<td><a href="return.php?id='.$row['id']. '">Return Books</a></td>';
			echo "</tr>";
	}
echo "</table>";
?>
</body>
</html>
