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
    <h2>You have successfully returned the book.Thank You</h2>
    <?php
    include 'member/connect.php';
    $id=$_GET['id'];
    $sql="UPDATE `issue_books` SET books_return_date=' ' WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    ?>
    </body>
    </html>