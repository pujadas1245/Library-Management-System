<?php
session_start();
?>
<html>
<head>
	<style>
		body{
			background-color:violet;
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
	<center><h2>Library Management System</h2>
		<form action="issue_booksdb.php" method="POST">
			<table>
				<tr>
					<th></th>
				</tr>
				<tr>
					<td>FirstName:</td>
					<td><input type="text" name="firstname" value="<?php echo $_SESSION['FirstName']?>" size="48"></td>
				</tr>
				<tr>
					<td>LastName:</td>
					<td><input type="text" name="lastname" value="<?php echo $_SESSION['LastName']?>" size="48"></td>
				</tr>
				<tr>
					<td>Enter Contact_number: </td>
					<td><input type="text" name="contact_number" size="48"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" value="<?php echo $_SESSION['EmailId']?>" size="48"></td>
				</tr>
				<tr>
					<td>Enter Books_Name: </td>
					<td><input type="text" name="books_name" size="48"></td>
				</tr>
				<tr>
					<td>Books_Issue_Date</td>
					<td><input type="date" name="books_issue_date" value="<?php echo date("Y-m-d")?>" size="48"></td>
				</tr>
				<tr>
					<td>Books_Return_Date</td>
					<td><input type="date" name="books_return_date" value="<?php echo date("Y-m-d", strtotime("+1 week"))?>" size="48"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" name="Username" value="<?php echo $_SESSION['UserName']?>" size="48"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="submit">
						<input type="reset" name="reset" value="reset">
					</td>
				</tr>
			</table>
		</form>
		<br><br>
		<h1>To Check Your Issued Books </h1>
		<a href="my_issued_books.php">Click Here</a>
	</center>
</body>
</html>