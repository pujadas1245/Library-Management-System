<?php
session_start();
?>
<html>
<head>
<style>
body{
	background-color: grey;
} 
</style>
</head>
<center><body>
<br>
<br>
	<h2><p>Log In!</p></h2>
	<br>
	<br>
	<?php
	if(isset($_SESSION['UserName']))
	{
		echo '<form action="logout.php" method="POST">
				<button type="submit" name="submit" value="submit">Logout</button>
				</form>';
	}
	else
	{

	echo '<form action="logindb.php" method="POST">
			<input type="text" name="UserName" placeholder="UserName"><br><br>
			<input type="password" name="Password" placeholder="Password"><br><br>
			<button type="submit" name="submit">Log In</button>
			</form>';	
	}
	?>
	<br>
	<br>
	
</body></center>
</html>