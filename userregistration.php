<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="includes/styles.css" type="text/css">
</head>
<body>
<div class="container" id="container">
<div class="login-form">
<div class="panel panel-default">
<div class="panel-heading">
<button type="button"class="close" style="position:relative; top:10px; right:10px;";" onclick=" document.getElementById('container').style.display='none'" ><a href="welcomepage.php">&times;</a></button>
<h4 class="text-left">Registration</h4>
</div>
<div class="panel-body">
<form class="form-horizontal" action="userregistration.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fullname">Full Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="fullname">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="accesscode">Access Code:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="accesscode" placeholder="Enter Access Code" name="accesscode">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success glyphicon glyphicon-ok" name="submit">Submit</button>
      <button type="reset" class="btn btn-danger glyphicon glyphicon-refresh" name="reset">Reset</button>
    </div>
  </div>
</form>
</div>
<div class="panel-footer ">
<div class="text-center ">
<label class="control-label">Back to: </label>
<a href="welcomepage.php">Home</a>
</div>

</div>

</div>
</div>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $accesscode = $_POST['accesscode'];
	  $status ="Pending";

    if ($username == null) {
        echo "<script>alert('Please enter Username !')</script>";
    } else if ($fullname == null) {
        echo "<script>alert('Please enter full name !')</script>";
    } else if ($email == null) {
        echo "<script>alert('Please enter email address !')</script>";
    } else if ($password == null) {
        echo "<script>alert('Please enter password !')</script>";
    } else if ($accesscode == null) {
        echo "<script>alert('Please enter access code !')</script>";
    } else if ($accesscode != 'Spring-2020') {
        echo "<script>alert('Acess code not valid !')</script>";
    } else {

        $conn = mysqli_connect('localhost', 'root', '', 'pcs_database');

        if (!$conn) {
            echo "DB Connection Error";
        }


 $query = "INSERT INTO `pcs_database`.`userdetails` (`user_id`, `username`, `fullname`, `password`, `email`, `userType`,`accesscode`,`status`) 		   VALUES (NULL, '$username', '$fullname', '$password', '$email', '2','$accesscode','$status')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Registration Successful !')</script>";
			echo "<script>window.open('welcomepage.php', '_self')</script>";
        }
    }
}
?>