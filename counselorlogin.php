<?php
	session_start();
	include 'includes/db.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Counselor Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="includes/styles.css" type="text/css">
</head>

<body>
<div class="container" id="contain">
<div class="login-form">
<div class="panel panel-default">
<div class="panel-heading">
<button type="button"class="close" style="position:relative; top:10px; right:10px;";" onclick=" document.getElementById('contain').style.display='none'" ><a href="welcomepage.php">&times;</a></button>
<h4 class="text-left">Counselor Login</h4>
</div>
<div class="panel-body">
<form class="form-horizontal" action="counselorlogin.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-3" for="username">Counselor name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="password">Password:</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-0">
      <button type="submit" class="btn btn-success glyphicon glyphicon-ok" name="submit">Submit</button>
      <button type="reset" class="btn btn-danger glyphicon glyphicon-refresh" name="reset">Reset</button>
    </div>
  </div>
</form>
</div>
<div class="panel-footer">
<label class="control-label col-sm-2 text-right">Back to: </label>
<div class="col-sm-offset-3">
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

    $query = "SELECT * FROM userdetails WHERE username= '$username' && password= '$password' && userType= 1";
    $run = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($run);

    if ($row > 0) {

        $_SESSION['counselor_username'] = $_POST['username'];
        $_SESSION['counselor_password'] = $_POST['password'];

        echo "<script>window.open('counselorHomepage.php', '_self')</script>";
    } else {

        echo "<script>alert('Username or Password is Incorrect !')</script>";
    }
}
?>