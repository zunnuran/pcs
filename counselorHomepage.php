<?php
		
 if(!isset($_SESSION)) 
    { 	session_start();
		include 'includes/db.php';
		include'includes/counselorheader.php';
        
	} 
		if ((@$_SESSION['counselor_username'] == null) && (@$_SESSION['counselor_password'] == null)) {

        header("location: counselorlogin.php");
    
   }
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Counselor Homepage</title>
</head>

<body style="background-color:lavenderblush;">
  <center>
<div class="container-fluid text-center">
  <div class="row">
  <h1 style="background-color:lavender; height: 50px; padding-top: 10px;">COUNSELOR PANEL</h1>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Personal Profile</h2>
         <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="#" style="color:white;">View Profile</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-primary btn-lg btn-block"><a href="#" style="color:white;" >Update Profile</a></button></li>
        </ul>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Students Section</h2>
      <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-success btn-lg btn-block"><a href="#" style="color:white;">Review Test Scores</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="#" style="color:white;">View Results</a></button></li>
        </ul>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">
      <h2>Queries Section</h2>
        <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-success btn-lg btn-block"><a href="#" style="color:white;">Give Feedback</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info btn-lg btn-block"><a href="#" style="color:white;">View Responses</a></button></li>
        </ul>
    </div>
  </div>
</div>
</center>
<form method="post" action="https://live.tourcms.com/enquiry.php">

  <!-- Account settings -->
  <input name="tourcms_account_id" value="ACCOUNT_ID_GOES_HERE" type="hidden" />
  <input name="tourcms_channel_id" value="CHANNEL_ID_GOES_HERE" type="hidden" />
  <input name="tourcms_enquiry_key" value="ENQUIRY_KEY_GOES_HERE" type="hidden" />
  <input name="tourcms_return_url" value="RETURN_URL_GOES_HERE" type="hidden" />
  <input name="tourcms_problem_url" value="PROBLEM_URL_GOES_HERE" type="hidden" />

  <!-- Your fields -->
  <input name="enquiry_type" value="General%20Enquiry" type="hidden" />

  <label>Title
    <select name="title">
      <option value="Mr">Mr</option>
      <option value="Mrs">Mrs</option>
      <option value="Miss">Miss</option>
      <option value="Sir">Sir</option>
    </select>
  </label>

  <label>Firstname
    <input type="text" name="firstname" required="required" />
  </label>

  <label>Surname
    <input type="text" name="surname" required="required" />
  </label>

  <label>Details
    <textarea name="enquiry_detail"></textarea>
  </label>

  <input type="submit" value="submit" />
</form>
</body>
</html>