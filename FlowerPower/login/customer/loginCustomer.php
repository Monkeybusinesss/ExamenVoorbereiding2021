<?php

include_once '../../database/database.php';

if(isset($_POST['submit'])){
    $fieldnames = ['username', 'password'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true;        }
    }
	
	if(!$error){
		$DB = new database();

        $uname = $_POST['username'];
        $passw = $_POST['password'];
		$DB->loginCustomer($uname, $passw);
    }
}	
?>

<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./assets/scss/customer.css">
		<title>Employee login</title>
	</head>
	<body>
		<div class="align">
			<img class="logo" src="./assets/images/customerlogin.svg">
			<div class="card">
				<div class="head">
					<div></div>
					<a id="login" class="selected" href="#login">Login</a>
					<!-- <a id="register" href="#register">Register</a> -->
					<div></div>
				</div>
				<div class="tabs">
					<form action="" method="POST" autocomplete="off">
						<div class="inputs">
							<div class="input">
								<input placeholder="Username" type="text" name="username" required>
								<img src="./assets/images/user.svg">
							</div>
							<div class="input">
								<input placeholder="Password" type="password" name="password" required>
								<img src="./assets/images/pass.svg">
							</div>
							<?php if(isset($_SESSION['login_error'])): ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong>Invalid Credentials</strong>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							<?php endif;?>
						</div>
						<button type="submit" name="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</body>
</html>