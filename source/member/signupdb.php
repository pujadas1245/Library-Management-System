<?php 
if(isset($_POST['submit']))
{
	include 'connect.php';
	$FirstName=mysqli_real_escape_string($conn,$_POST['FirstName']);
	$LastName=mysqli_real_escape_string($conn,$_POST['LastName']);
	$EmailId=mysqli_real_escape_string($conn,$_POST['EmailId']);
	$UserName=mysqli_real_escape_string($conn,$_POST['UserName']);
	$Password=mysqli_real_escape_string($conn,$_POST['Password']);
		//Error handlers
		//check for empty fields
		if(empty($FirstName)||empty($LastName)||empty($EmailId)||empty($UserName)||empty($Password))
		{
			header("Location:member.html?signup=empty");
			exit();
		}
		else{
				//check if input characters are valid
				if(!preg_match("/^[a-zA-Z]*$/",$FirstName) || !preg_match("/^[a-zA-Z]*$/",$LasttName) )
				{
				header("Location:member.html?signup=invalid");
				exit();
				}
				else{
						//check if email is valid
						if(!filter_var($EmailId,FILTER_VALIDATE_EMAIL))
						{
							header("Location:member.html?signup=invalid email");
							exit();
						}
						else{
							$sql="SELECT * FROM users WHERE UserName='$UserName'"; //check if username is already exists
							$result=mysqli_query($conn,$sql); //run the query in database
							$resultCheck=mysqli_num_rows($result); //checks row as a result
								if($resultCheck>0) //if row exists,username is taken already
								{
									header("Location:member.html?signup=usertaken");
									exit();
								}
								else{
												//hashing the password
										$hashPassword=password_hash($Password,PASSWORD_DEFAULT);
												//insert the user into the database
										$sql="INSERT INTO `users` (`FirstName`, `LastName`, `EmailId`, `UserName`, `Password`) VALUES('$FirstName','$LastName','$EmailId','$UserName','$hashPassword')";
										$result=mysqli_query($conn,$sql);
										header("Location:login.php?signup=successful");
										exit();

									}
							}
					}
			}
}
else{
	header("Location:member.html");
	exit();
}
?>