<?php
	session_start();
	include 'includes/db.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="includes/styles.css" type="text/css">
</head>

<body>
<div class="container" id="ctn">
<div class="login-form">
<div class="panel panel-default">
<div class="panel-heading" >
<button type="button"class="close" style="position:relative; top:10px; right:10px;";" onclick=" document.getElementById('ctn').style.display='none'" ><a href="welcomepage.php">&times;</a></button>
<h4 class="text-left">Admin Login</h4>
</div>
<div class="panel-body">
<form class="form-horizontal" action="adminlogin.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Admin name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
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

<div class="panel-footer">
<label class="control-label col-sm-2">Back to: </label>
<div class="text-left">
<a href="userlogin.php">User</a> |
<a href="adminlogin.php">Admin</a> |
<a href="welcomepage.php">Home</a>
</div>

</div>
</div>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE name= '$username' && password= '$password'";
    $run = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($run);

    if ($row > 0) {

        $_SESSION['admin_username'] = $_POST['username'];
        $_SESSION['admin_password'] = $_POST['password'];

        echo "<script>window.open('adminHomepage.php', '_self')</script>";
    } else {

        echo "<script>alert('Username or Password is Incorrect !')</script>";
    }
}
?>