<?php include('server.php') ?>
<html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Signup Form | Reemo</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <link rel="stylesheet" href="style.css">
                                <link rel="shortcut icon" href="images/reemoa.png" type="image/x-icon">
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
   
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
                        <h6 class="mb-0 mr-4 mt-2" style="text-align: center;">Sign-up for a Reemo account now!</h6>
                        
                    </div>
                    <p></p>
                    <p></p>
                    <form method="post" action="register.php">	
                    <div class="row px-3"> <label class="mb-1">
                    
                            <h6 class="mb-0 text-sm">Email Address</h6>
                            
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid Email Address or Phone Number" value="<?php echo $email; ?>"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Phone Number</h6>
                        </label> <input type="text" name="PhoneNumber" placeholder="Enter Your Phone Number" value="<?php echo $PhoneNumber; ?>"> 
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username*</h6>
                        </label> <input type="text" name="username" placeholder="Enter Your Username" value="<?php echo $username; ?>"> 
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <P></P>
                        <h6 class="mb-0 text-sm">Password*</h6>
                    </label> <input type="password" name="password_1" placeholder="Enter password"> 
                </div>
                <div class="row px-3"> <label class="mb-1">
                    <P></P>
                    <h6 class="mb-0 text-sm">Confirm Password*</h6>
                </label> <input type="password" name="password_2" placeholder="Confirm your password"> 
            </div>
                 <p></p>   
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="reg_user">Submit</button> </div>
                
                </div>
				</form>
                </div>
                <div class="bg-blue py-4" style="width: 100%">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2"><b>REEMO</b> &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <a href="#"><span class="fa fa-facebook mr-4 text-sm"></span></a> <a href="#"><span class="fa fa-google-plus mr-4 text-sm"></span></a> <a href="#"><span class="fa fa-linkedin mr-4 text-sm"></span></a> <a href="#"><span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span></a> </div>
            </div>
        </div>
   
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                  
</html>