<?php
		
 if(!isset($_SESSION)) 
    { 	session_start();
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
<title>Admin Homepage</title>
</head>

<body style="background-color:lavenderblush;">
  <center>
<div class="container-fluid text-center">
  <div class="row">
  <h1 style="background-color:lavender; height: 50px; padding-top: 10px;">ADMIN PANEL</h1>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Counselor Section</h2>
         <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-success btn-lg btn-block"><a href="addCounselor.php" style="color:white;">Add Counselor</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-danger btn-lg btn-block"><a href="deleteCounselor.php" style="color:white;">Delete Counselor</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="viewCounselorProfile.php" style="color:white;">View Profile</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-primary btn-lg btn-block"><a href="updateCounselorProfile.php" style="color:white;" >Update Profile</a></button></li>
        </ul>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Students Section</h2>
      <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-success btn-lg btn-block"><a href="pendingRequests.php" style="color:white;">Pending Requests</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-danger btn-lg btn-block"><a href="deleteRecords.php" style="color:white;">Delete Student</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="viewStudentProfile.php" style="color:white;">View Profile</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-primary btn-lg btn-block"><a href="updateStudentProfile.php" style="color:white;">Update Profile</a></button></li>
        </ul>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Queries Section</h2>
        <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-success btn-lg btn-block"><a href="addQueries.php" style="color:white;">Add Queries</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-primary btn-lg btn-block"><a href="addResponses.php" style="color:white;">Add Responses</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="viewQueries.php" style="color:white;">View / Edit Queries</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-danger btn-lg btn-block"><a href="deleteQueries.php" style="color:white;">Delete Queries</a></button></li>
        </ul>
    </div>
  </div>
</div>
</center>
</body>
</html>