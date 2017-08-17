<?php
session_start();
?>
<html>
<head>
	<title>Welcome To Online Library Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
	<div id="header">
		<h1>Online Library Managment System</h1>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="about.html">About Us</a></li>
			<li><a href="member/member.html">Member</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
	</div>
	<div id="content">
		<marquee> <h4>Welcome To My Website.Hope You Liked It</h4> </marquee>
		<br><br>
		<center>
		<?php
		if(isset($_SESSION['UserName']))
		{
			echo "You are logged in!";
		}
		?>
		</center>
		<br><br>
		<center><img src="indexImage.jpg" width="1000px" height="300px"></center>
			&nbsp;<br>
			&nbsp;<br>
	</div>
			&nbsp;<br>
			&nbsp;<br>
	<div id="footer">
	<center><p>Copyright &copy 2017;All Right Reserved | Puja Das </p></center>
	</div>
</body>
</html>