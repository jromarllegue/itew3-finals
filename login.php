<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="reg.css"></link>
</head>
<body>
	<div class="center-content">
		<label class="header">LOG IN FORM</label>
	</div><br>
	<div class="main-div" id="loginForm">
		<form action="login.php" method="POST" autocomplete="off">
			<div>
				<label>Username</label><br>
				<input type="text" name="loginUsername" required>
			</div><br>
			<div>
				<label>Password</label><br>
				<input type="password" name="loginPassword" required>
			</div><br>
			<div width="100%" class="center-content">
				<input type="submit" name="login" value="Log in">
			</div>
		<?php
			if(isset ($_POST["login"])) {
				$loginUsername = $_POST["loginUsername"];
				$loginPassword = $_POST["loginPassword"];
				$successful = false;

				include_once("config.php");
				$result = mysqli_query($mysqli, "SELECT username, password FROM tbl_users");

				while ($user_data = mysqli_fetch_array($result)) {
					if ($loginUsername == $user_data['username'] && $loginPassword == $user_data['password']) {
						$successful = true;
						break;
					}
				}
				if ($successful == true) {
					header("Location: index.php");
					exit();
				
				} else {
					echo "<div>Incorrect Credentials.</div>";
				}
			}
		?>

		</form>
	</div>
</body>
</html>