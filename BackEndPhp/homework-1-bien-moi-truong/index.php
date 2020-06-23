<?php 
	session_start();
	if ( isset ($_POST['submitLogin']) ){
		if ( $_POST['username'] == 'thelostowl' && $_POST['password'] == '123456'){
			$_SESSION['username'] = $_POST['username'];
			echo ('<script>alert("Login Success")</script>');
			header('location: adminPage.php');
		}else {
			echo ('<script>alert("Login Failed")</script>');
		}
			
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	
	<title>Login Page</title>

</head>
<body>
	<div class="content-wrapper">
		<h3>Steam Login</h3>
		<div class="form-login">
			<form method="post" action="index.php">
				<div class="item">
					<div class="input-login">
						<div class="icon">
							<span class="iconify" data-icon="carbon:user-avatar-filled" data-inline="false"></span>
						</div>
						<input type="text" name="username" >
					</div>
				</div>
				<div class="item">
					<div class="input-login">
						<div class="icon">
							<span class="iconify" data-icon="ri:lock-password-fill" data-inline="false"></span>
						</div>
						<input type="password" name="password" >
					</div>
				</div>
				<div class="item">
					<div class="btn-login">
						<button type="submid" name="submitLogin" value="abc" class="lgn-btn">Login</button>
						<button>Cancel</button>
					</div>
					
				</div>
				
			</form>
		</div>
	</div>

<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>
</html>


