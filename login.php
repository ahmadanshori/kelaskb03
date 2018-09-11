<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log In Page</title>
	<link rel="stylesheet" href="css/login.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/logo.jpg" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="process.php" method="post">
					<span class="login100-form-title">
						Login 4kb03
					</span>
					<div class="text-center">
						<a class="text-center" href="https://docs.google.com/spreadsheets/d/19UPb9_OOIwmm6r7nBENRywL6Cdqu_r4Sj2NrNuWz_7M/edit?usp=sharing" title="ListUsername">List Username</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" id="username" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="NPM" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">Login</button>
					</div>
					<?php 
						if(@$_GET['Empty']==true) {
					?>
						<div class="alert-light text-danger text-center my-3"><?= $_GET['Empty'] ?></div>
					<?php 
						}
					?>

					<?php 
						if(@$_GET['Invalid']==true) {
					?>
						<div class="alert-light text-danger text-center my-3"><?= $_GET['Invalid'] ?></div>
					<?php 
						}
					?> 
					
				</form>
			</div>
		</div>
	</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>