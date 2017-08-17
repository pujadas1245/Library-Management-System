<?php
session_start();
if(isset($_POST['submit']))
{
	include 'connect.php';
	$UserName=mysqli_real_escape_string($conn,$_POST["UserName"]);
	$Password=mysqli_real_escape_string($conn,$_POST["Password"]);
	//errror handlers
	//check if inputs are empty
	if(empty($UserName)||empty($Password))
	{
		header("Location:member.html?login=empty");
	    exit();
	}
	else{
			$sql="SELECT * FROM users WHERE UserName='$UserName'";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_num_rows($result);
			if($resultCheck<1) //if resultcheck not found
				{
					header("Location:member.html?login=error");
					exit();
				}
			else{
					if($row=mysqli_fetch_assoc($result))
						{
							//de-hashing the password
							$hashPasswordCheck=password_verify($Password,$row['Password']);
								if($hashPasswordCheck==false)
									{
										header("Location:member.html?login=error");
										exit();
									}
								elseif($hashPasswordCheck==true){
															//log in the user here
														$_SESSION['Id']=$row['Id'];
														$_SESSION['FirstName']=$row['FirstName'];
														$_SESSION['LastName']=$row['LastName'];
														$_SESSION['EmailId']=$row['EmailId'];
														$_SESSION['UserName']=$row['UserName']; //Storing the username value in session variable so that it can be retrieved on other pages
														header("Location:../index.php?login=success");
														exit();

																}
						}
				}
		}
}
else{
	header("Location:member.html?login=error");
	exit();
}
?>