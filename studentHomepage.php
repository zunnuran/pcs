<?php
		
 if(!isset($_SESSION)) 
    { 	session_start();
		include 'includes/db.php';
		include'includes/studentheader.php';
        
	} 
		if ((@$_SESSION['user_username'] == null) && (@$_SESSION['user_password'] == null)) {

        header("location: userlogin.php");
    
   }
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Homepage</title>
</head>

<body style="background-color:lavenderblush;">
  <center>
<div class="container-fluid text-center">
  <div class="row">
  <h1 style="background-color:lavender; height: 50px; padding-top: 10px;">STUDENT PANEL</h1>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Personal Profile</h2>
         <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="#" style="color:white;">View Profile</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-primary btn-lg btn-block"><a href="#" style="color:white;" >Change Password</a></button></li>
        </ul>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Test Section</h2>
      <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-success btn-lg btn-block"><a href="#" style="color:white;">Take Test</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="#" style="color:white;">View Results</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-primary btn-lg btn-block"><a href="#" style="color:white;">Scores History</a></button></li>
        </ul>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Academics Section</h2>
        <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-success btn-lg btn-block"><a href="#" style="color:white;">Books</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-primary btn-lg btn-block"><a href="#" style="color:white;">Timetable</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="#" style="color:white;">Assignments</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-danger btn-lg btn-block"><a href="#" style="color:white;">Attendance</a></button></li>
        </ul>
    </div>
  </div>
</div>
</center>
</body>
</html>