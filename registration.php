<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="reg.css"> </link>
</head>
<body>
	<div class="center-content">
		<label class="header">ONLINE REGISTRATION FORM</label>
	</div><br>
	<div class="main-div" id="regForm">
		<form action="registration.php" method="POST" autocomplete="off">
			<div>
				<label>User ID <span>*</span></label><br>
				<input type="text" name="userId" size="10" required>
			</div><br><br>
			<div>
				<label>Last Name <span>*</span></label><br>
				<input type="text" name="lastName" required>
			</div>
			<div>
				<label>First Name <span>*</span></label><br>
				<input type="text" name="firstName" required>
			</div>
			<div>
				<label>Middle Initial</label><br>
				<input type="text" name="middleInitial">
			</div><br><br>
			<div>
				<label>Age <span>*</span></label><br>
				<input type="text" name="age" required>
			</div>
			<div>
				<label>Contact No. <span>*</span></label><br>
				<input type="text" name="contactNo" required>
			</div>
			<div>
				<label>Email <span>*</span></label><br>
				<input type="text" name="email" required>
			</div>
			<div>
				<label>Address <span>*</span></label><br>
				<input type="text" name="address" required>
			</div><br><br>
			<div>
				<label>Username <span>*</span></label><br>
				<input type="text" name="username" required>
			</div>
			<div>
				<label>Password <span>*</span></label><br>
				<input type="password" name="password" required>
			</div>
			<div width="100%" class="center-content">
				<input type="submit" name="submit">
			</div>

			<?php
			if(isset ($_POST["submit"])) {
				$userId = $_POST["userId"];
				$lastName = $_POST["lastName"];
				$firstName = $_POST["firstName"];
				$middleInitial = $_POST["middleInitial"];
				$age = $_POST["age"];
				$contactNo = $_POST["contactNo"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$newusername = $_POST["username"];
				$newpassword = $_POST["password"];

				include_once("config.php");
				$result = mysqli_query($mysqli, "INSERT INTO tbl_users VALUES('$userId','$lastName','$firstName','$middleInitial','$age','$contactNo','$email','$address','$newusername','$newpassword');");

					header("Location: index.php");
					exit();
			}
			?>
		</form>
	</div>
</body>
</html>