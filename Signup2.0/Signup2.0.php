<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up | SE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('UiT&BlueSky.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title1 p-b-20">
				S E
				</span>
				<span class="login100-form-title p-b-41">
					Sign up <br> One account with all things.
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="../Signup2.0/Signupaction .php">
					<div <?php if(isset($name_error)): ?> class="form_error" <?php endif ?>>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="name" placeholder="Enter username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
						 <?php if(isset($name_error)): ?>
						<span> <?php echo $name_error; ?></span>
						<?php endif ?>
						</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="Enter email">
						<span class="focus-input100" data-placeholder="&#9993;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100" data-placeholder="&#xe80f;" ></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter mobile-phone number">
						<input class="input100" type="number" name="mob" placeholder="Mobile-phone Number">
						<span class="focus-input100" data-placeholder="&#9990;"></span>
					</div>
					<div class="wrap-input100 validate-input">
<!--						<p  style="color: #adadad;">Gender </p>-->
						<h6 class="m-l-30" style="color: #adadad;">Gender</h6>
						<div class="m-l-30">
						&nbsp; <input  type="radio" name="gen" value="Male" required>Male &nbsp;
						<input  type="radio" name="gen" value="Female">Female
						</div>
					</div>
					<div class="wrap-input100 validate-input" >
<!--						<p style="color: #adadad;">Date of Birth</p>-->
						<h6 class="m-l-30" style="color: #adadad;">Date of Birth</h6>
						<div class="m-l-30">
						<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1990;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
							</div>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Sign up
						</button>
					</div>
					<div class=" m-l-40 p-t-30">
					<span class="txt1 ">
								Already have an account?
							</span>

							<a href="../Login2.0/Login2.0.php" class="txt2">
								Sign in
							</a>
					</div>
					<div style="margin-left: 20px; margin-top: 20px;">
					
					<a href="../MainPage/T 2.0.php"><img src="../MainPage/images/Back.png" width="30px" height="30px"> </a>
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
	<script src="js/main.js"></script>

</body>
</html>