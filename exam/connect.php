<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>
	<?php

    if(isset($_COOKIE["user"])) {
      class loginInfo {
      }
      $objData = $_COOKIE['user'];
      $obj = unserialize($objData);
      if (!empty($obj)) {
          $email = $obj->email;
          $pass = $obj->pass;
      }
      else {
        $email="";
        $pass="";
      }
    }
    else {
      $email="";
      $pass="";
    }
     ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form-login" id="logup" method="POST" action="login.php?q=connect.php">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Enter an email">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter Your Email" value="<?php echo $email; ?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password" value="<?php echo $pass; ?>">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>

					<div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" id="customCheck1" name="chkMe" value="PassSave">
            <label class="custom-control-label" for="customCheck1">Remember password</label>
          </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="login-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
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
					</div>

					<div class="flex-col-c p-t-40">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2 sign-btn">
							Sign Up
						</a>
					</div>
				</form>
				<form class="login100-form validate-form-signup" id="signup" method="POST" action="sign.php?q=account.php" >
					<span class="login100-form-title p-b-20">
						SignUp
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Enter an username">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="name" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Enter an valid email address">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter your email">
						<span class="focus-input100" data-symbol="&#x2709;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Enter a phone number">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="tel" name="mob" placeholder="Type phone number">
						<span class="focus-input100" data-symbol="&#x2706;"></span>
					</div>

					<div class="wrap-inputradio validate-input m-b-23" data-validate="Selct a gender">
						<span class="label-input100">Gender</span><br>
						<input class="radiob " type="radio" name="gender" placeholder="Male" value="Male" >Male
						<input class="radiob " type="radio" name="gender" placeholder="Female" Value="Female" >Female
						<input class="radiob " type="radio" name="gender" placeholder="Other" Value="Other" >Other

					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="College name is required">
						<span class="label-input100">College</span>
						<input class="input100" type="text" name="college" placeholder="Type your college name">
						<span class="focus-input100" data-symbol= "&#x2637"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Good Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password did not match">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="cpassword" placeholder="Re-enter your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="container-login100-form-btn m-t-50">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="signin-btn">
								Sign Up
							</button>
						</div>
					</div>


					<div class="flex-col-c p-t-40">
						<span class="txt1 p-b-17">
							Or Log In Using
						</span>

						<a href="#" class="txt2 log-btn">
						Log In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main2.js"></script>

</body>
</html>
