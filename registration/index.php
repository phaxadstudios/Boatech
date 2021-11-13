<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/reemoa.png" type="image/x-icon">
</head>
<body>
<div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="images/reemoa.png" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/registration.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
<div class="header">
	<h4>Home Page</h4>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
	
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h5 class="my-5">Hi, <i><?php echo $_SESSION['username']; ?></i>. Welcome to Reemo.</h5>
    <p>
        <a href="index.php?logout='1'" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    </div>	</div>	</div>	
    <?php endif ?>
</div>
<div class="bg-blue py-4" style="width: 100%">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2"><b>REEMO</b> &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <a href="#"><span class="fa fa-facebook mr-4 text-sm"></span></a> <a href="#"><span class="fa fa-google-plus mr-4 text-sm"></span></a> <a href="#"><span class="fa fa-linkedin mr-4 text-sm"></span></a> <a href="#"><span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span></a> </div>
            </div></div></div>	
</body>
</html>