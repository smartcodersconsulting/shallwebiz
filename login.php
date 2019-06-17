<?php
$con=mysqli_connect("localhost","Vikram","rohit123","erisdbnew");
	$msg='';
	$jobID='';
	if(isset($_GET['ji'])){
		$jobID=$_GET['ji'];
	}
	
	if(isset($_POST['submit'])){
		$user_Name=$_POST['username'];
		$password=$_POST['password'];
		$hash_password=sha1($password);
		
		$sqlAuthentication="select up.username, ua.userType , ua.password from userAuthentication ua , hruserprofile up where ua.emailID=up.EMAILID and 
		up.userid=ua.userID and ua.emailID='$user_Name' and ua.password='$hash_password' ;";

		$result = $con->query($sqlAuthentication); 
		
		mysqli_error($con);
		
		if($result->num_rows == 1) {
			
			$row = $result->fetch_assoc();
			session_start();
			$_SESSION['Name']=$row["username"];
			$_SESSION['userType']=$row["userType"];
			$_SESSION['emailID']=$user_Name;
			
			if($jobID =='') {
				
				header("location: index.php");
			} else {
			
				$_SESSION['ji']=$jobID;
				header("location: /jobSeekers/jobApply.php");
			}
		} else {
			header("location: index.php?loginError=InvalidCredential");
		}
	} else {  
		if(isset($_GET['error'])) {
			$msg="Invalid Credential";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color:#006097">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-10 p-b-54">
				<form class="login100-form validate-form" name="login_Form" action="login.php" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-49" >
						Login
					</span>
					<span id="error_message"><center><font color="red"><?php echo $msg;?></font></span>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Login
							</button>
						</div>
					</div>
					<!--Kept for future implementation of social login-->
					<!--<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>
					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>-->

					<div class="flex-col-c p-t-30">
						<span class="txt1 p-b-17">
							Or click below to Register if not an existing user 
						</span>
						<a href="#" class="txt2">
							Register
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login/js/main.js"></script>

</body>
</html>