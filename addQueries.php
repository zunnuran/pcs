<?php
    
 if(!isset($_SESSION)) 
    {   session_start();
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
    <title>Add Queries</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>

<body style="background-color:lavenderblush;">
  <div class="container" id="container">
<div class="login-form">
<div class="panel panel-default">
<div class="panel-heading">
<h1 class="text-center" style="height: 50px; padding-top: 10px;">ADD QUERIES</h1>
</div>
<div class="panel-body">
<form class="form-horizontal" action="addQueries.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="subject">Query Statement:</label>
    <div class="col-sm-10" style="margin-bottom: 10px;">
      <input type="text" class="form-control" id="subject_Name" placeholder="Enter Query Statement" name="subject_Name">
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
  
    $queryStat = $_POST['subject_Name'];

    if ($queryStat == null) {
        echo "<script>alert('Please enter Query Statement !')</script>";
    } else {

        $conn = mysqli_connect("localhost", "root", "", "pcs_database");

        if (!$conn) {
            echo "DB Connection Error";
        }

$query = "INSERT INTO `pcs_database`.`queries_responces` (`id`, `subject`) VALUES ('1', 'how can we do it')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Query Added Successfully !')</script>";
      echo "<script>window.open('adminHomepage.php', '_self')</script>";
        }
    }
}
?>