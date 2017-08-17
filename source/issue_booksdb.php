<?php
session_start(); 
?>
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
if(isset($_SESSION['UserName']))
{
	if(isset($_POST['submit']))
	{
		include 'member/connect.php';
		$firstname=$_POST['firstname'];;
		$lastname=$_POST['lastname'];
		$contact_number=$_POST['contact_number'];
		$email=$_POST['email'];
		$books_name=$_POST['books_name'];
		$books_issue_date=$_POST['books_issue_date'];
		$books_return_date=$_POST['books_return_date'];
		$Username=$_POST['Username'];
		$sql="SELECT * FROM `books` WHERE title='$books_name'";
		//print_r($sql);
		//print_r($conn);
		$result=mysqli_query($conn,$sql);
		//print_r($result);
		$resultCheck=mysqli_num_rows($result); //checks row as a result
		//print_r($resultCheck);
			if($resultCheck<1)//if books_name is not matching with title of the books table
			{
				header("Location:issue_books.php?form=invalid book name");
				exit();
			}
			else
			{
				$SQL="INSERT INTO `issue_books` (`FirstName`, `LastName`, `contact_number`, `Email`, `books_name`, `books_issue_date`, `books_return_date`, `Username`) VALUES ('$firstname','$lastname','$contact_number','$email','$books_name','$books_issue_date','$books_return_date','$Username')";
				$Result=mysqli_query($conn,$SQL);
				echo "You have successfully issued books";

			}
	}
	else{
		header("Location:issue_books.php?form=not submitted");
		exit();
		}
}
else{

	header("Location:login.php?form=login please");
		exit();
}
?>
</body>
<html>