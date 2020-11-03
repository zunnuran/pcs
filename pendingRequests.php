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
<title>Pending Requests</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="includes/styles.css" type="text/css">-->
</head>

<body>
<div class="container" style="width:auto;">
<div class="panel panel-default">
<div class="panel-heading">
  <h2 class="text-center">Pending Students Registration Requests</h2>
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
        <th class="text-center">Action</th>
        
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
					$status	  = $row['status']
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
         <?php if ((@$_SESSION[admin_username] != null) && (@$_SESSION[admin_password] != null)) { ?>
<td><button class="btn btn-success" name='accept' id="accept" ><a href='pendingRequests.php?accept=<?php echo $id; ?>' id="accept" style="color:white;">Accept</a></button></td>
<td><button class="btn btn-danger" name='delete' id="delete"><a href='pendingRequests.php?delete=<?php echo $id; ?>' id="delete" style="color:white;">Delete</a></button></td>
<?php } ?>        
      </tr>
         <?php
                    $counter++;
                }
            }    

                $run = mysqli_query($conn, "SELECT * FROM userdetails where status='Pending' AND userType =2");

                showRecord($run);
			
            if (isset($_GET['accept'])) {

                $acceptUser = $_GET['accept'];
                $query = "UPDATE userdetails SET status='Accepted' WHERE user_id='$acceptUser' AND userType = 2";

                mysqli_query($conn, $query);

                echo "<script>window.open('pendingRequests.php', '_self')</script>";
            }

            if (isset($_GET['delete'])) {

                $deleteUser = $_GET['delete'];

                $query = "DELETE FROM userdetails WHERE user_id='$deleteUser' AND userType = 2";

                $result = mysqli_query($conn, $query);

                if ($result) {

                    echo "<script>alert('Request deleted Successfully!')</script>";
                    echo "<script>window.open('pendingRequests.php', '_self')</script>";
                } else {
                    echo "<script>alert('Request Can't be deleted!!')</script>";
                }
            }
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