<?php
	include 'db.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="includes/styles.css" type="text/css">
</head>

<body>

<div class="container">
	<div class="panel panel-default">
    <div class="panel-heading text-center">
   	<h1 id=>Web based Personal Counseling System (PCS)</h1>
    </div>
    <div class="panel-body text-center">
    <h3>BC160403660</h3>
    </div>
    <div class="panel-footer text-center">
    <form action="welcomepage.php" method="post">
   		 <button class="btn btn-default glyphicon glyphicon-log-in" type="submit" name="login" style="color:#00F;"><a href="userlogin.php">Login</a></button>
   		 <button class="btn btn-default glyphicon glyphicon-user" type="submit" name="register" style="color:#00F;" ><a href="userregistration.php">Register</a></button>
    </div>
    </form>
    </div>
</div>
</body>
</html>
