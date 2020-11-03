<?php
    
 if(!isset($_SESSION)) 
    {  session_start();
    include 'includes/db.php';
    include'includes/adminheader.php';
        
  } 
    if ((@$_SESSION['admin_username'] == null) && (@$_SESSION['admin_password'] == null)) {

        header("location: adminlogin.php");
    
   }
  
  
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Counselor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="includes/styles.css" type="text/css">-->
</head>
<body>
<div class="container" id="container">
<div class="login-form">
<div class="panel panel-default">
<div class="panel-heading">
<button type="button"class="close" style="position:relative; top:10px; right:10px;";" onclick=" document.getElementById('container').style.display='none'" ><a href="adminHomepage.php">&times;</a></button>
<h4 class="text-left">Add Counselor</h4>
</div>
<div class="panel-body">
<form class="form-horizontal" action="addCounselor.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="counselor_Name">Counselor name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="counselor_Name" placeholder="Enter Counselor name" name="counselor_Name">
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
      <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="contact">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info glyphicon glyphicon-ok" name="submit">Submit</button>
      <button type="reset" class="btn btn-danger glyphicon glyphicon-refresh" name="reset">Reset</button>
    </div>
  </div>
</form>
</div>
<div class="panel-footer ">
<div class="text-center ">
<label class="control-label">Back to: </label>
<a href="adminHomepage.php">Admin Panel</a>
</div>

</div>

</div>
</div>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
  
    $counselorName = $_POST['counselor_Name'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $accessCode = "Spring-2020";
    $status = "Accepted";

    if ($counselorName == null) {
        echo "<script>alert('Please enter Counselor name !')</script>";
    } else if ($fullname == null) {
        echo "<script>alert('Please enter full name !')</script>";
    } else if ($email == null) {
        echo "<script>alert('Please enter email address !')</script>";
    } else if ($password == null) {
        echo "<script>alert('Please enter password !')</script>";
    } else if ($contact == null) {
        echo "<script>alert('Please enter Contact Number')</script>";
    } else {

        $conn = mysqli_connect("localhost", "root", "", "pcs_database");

        if (!$conn) {
            echo "DB Connection Error";
        }

$query = "INSERT INTO `pcs_database`.`userdetails` (`user_id`, `username`, `fullname`, `password`, `email`, `contact`,`userType`,`accesscode`,`status`)        VALUES (NULL, '$counselorName', '$fullname', '$password', '$email', '$contact', '1','$accessCode','$status')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Counselor Added Successfully !')</script>";
      echo "<script>window.open('adminHomepage.php', '_self')</script>";
        }
    }
}
?>






