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
<meta charset="utf-8">
<title>View Counselor Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="includes/styles.css" type="text/css">-->
</head>

<body>
<div class="container" style="width:auto;">
<div class="panel panel-default">
<div class="panel-heading">
  <h2 class="text-center">Counselor's Profile</h2>
  </div>
 <div class="panel-body">
  <table class="table">
    <thead>
      <tr>
       <th>Sr. No</th>
        <th>RegistDate</th>
        <th>ModifyDate</th>
        <th>Username</th>
        <th>Full name</th>
        <th>Email</th>
        <th>Access Code</th>
        <th>User Type</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>  
       <?php

              function showRecord($data) {
                $counter = 1;

                while ($row = mysqli_fetch_array($data)) {

                    $id = $row['user_id'];
                    $registDate = $row['registDate'];
                    $modifyDate = $row['modifyDate'];
                    $username = $row['username'];
                    $fullname = $row['fullname'];
                    $email = $row['email'];
                    $accessCode = $row['accesscode'];
                    $usertype = $row['userType'];
          $status   = $row['status']
                    ?>
      <tr class="active">
        <td><?php echo $counter; ?></td>
        <td><?php echo $registDate; ?></td>
        <td><?php echo $modifyDate; ?></td>
        <td><?php echo $username; ?></td>   
        <td><?php echo $fullname; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $accessCode; ?></td>
        <td><?php echo $usertype; ?></td>
        <td><?php echo $status; ?></td>       
      </tr>
         <?php
                    $counter++;
                }
            }    
                $acceptedRequests = mysqli_query($conn, "SELECT * FROM userdetails WHERE  userType=1");
                showRecord($acceptedRequests);
            ?>
</tbody>
  </table>
  </div> 
  <div class="panel-footer">
  <!--This is footer-->
  </div>
  </div>
</div>
</body>
</html>