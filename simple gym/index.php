<?php

session_start();
if (isset($_SESSION["user_data"])) {
	header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Gym | Login</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" type="text/css" href="./css/entypo.css">
</head>

<body>

	<body class="page-body login-page login-form-fall">
		<div id="container">
			<div class="login-container">	
				<div class="login-progressbar">
					<div></div>
				</div>

				<div class="login-form" id="one">

					<div class="login-content" id="two">

						<form action="secure_login.php" method='post' id="bb" >
							<div class="form-group" id="input">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-user" style="color: white;"></i>
									</div>
									<input type="text" placeholder=" User ID" class="form-control" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true" id="input">
								</div>
							</div>

							<div class="form-group" id="input">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-key"style="color: white; width:5px;" ></i>
									</div>
									<input type="password" name="pass_key" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Password" id="input">
								</div>
							</div>

							<div class="form-group" id="butn">
								<button type="submit" name="btnLogin" class="btn btn-primary" id="but">
									Login In
									<i class="entypo-login"></i>
								</button>
							</div>
						</form>

						<div class="login-bottom-links">
							<a href="forgot_password.php" class="link" id="forgot">Forgot password?</a>
						</div>
					</div>

				</div>

			</div>
			<style>
				#one{
					background-color: black;
					height: 100vh;
					background-image: url(https://wallpaperaccess.com/full/1409142.jpg);
				}
				#two{
					background-color: rgba(60,60,60,0.5);
					margin-top: 50px;
					width: 400px;
					height: 360px;
					border-radius: 10px;
					background-image: url(hacker-wallpaper-ixpap-14.jpg);
					background-position: center;
					background-repeat: no-repeat;
					background-size: cover;
					opacity: 0.9;
				}
				#but{
					margin-top: 60px;
				}
				#input{
					margin-top: 30px;
					position: relative;
					top: 30px;
					background-color: whitesmoke;
					border-radius: 30px;
					width: 80%;
					margin-left: 50px;
					
				}
				#bb{
					align-items: center;
				}
				#butn{
					margin-top:10px;
				}
				#forgot{
					position: relative;
					top: -40px;
					color: whitesmoke;
					font-weight: 700;
					font-size: 16px;
				}
			</style>

		</div>

	</body>

</html>