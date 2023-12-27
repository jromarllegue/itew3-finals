<?php
	class FormInfoClass {
	    private $userId;
	    private $lastName;
	    private $firstName;
	    private $middleInitial;
	    private $age;
	    private $contactNo;
	    private $email;
	    private $address;
	    private $username;
	    private $password;

	    public function getUserId() {
	        return $this->userId;
	    }

	    public function getLastName() {
	        return $this->lastName;
	    }

	    public function getFirstName() {
	        return $this->firstName;
	    }

	    public function getMiddleInitial() {
	        return $this->middleInitial;
	    }

	    public function getAge() {
	        return $this->age;
	    }

	    public function getContactNo() {
	        return $this->contactNo;
	    }

	    public function getEmail() {
	        return $this->email;
	    }

	    public function getAddress() {
	        return $this->address;
	    }

	    public function getUsername() {
	        return $this->username;
	    }

	    public function getPassword() {
	        return $this->password;
	    }

	    public function setUserId($userId) {
	        $this->userId = $userId;
	    }

	    public function setLastName($lastName) {
	        $this->lastName = $lastName;
	    }

	    public function setFirstName($firstName) {
	        $this->firstName = $firstName;
	    }

	    public function setMiddleInitial($middleInitial) {
	        $this->middleInitial = $middleInitial;
	    }

	    public function setAge($age) {
	        $this->age = $age;
	    }

	    public function setContactNo($contactNo) {
	        $this->contactNo = $contactNo;
	    }

	    public function setEmail($email) {
	        $this->email = $email;
	    }

	    public function setAddress($address) {
	        $this->address = $address;
	    }

	    public function setUsername($username) {
	        $this->username = $username;
	    }

	    public function setPassword($password) {
	        $this->password = $password;
	    }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Index</title>
	<link rel="stylesheet" type="text/css" href="reg.css"></link>
</head>
<body>
	<div class="center-content">
		<label class="header">User List</label>
	</div><br>
	<div class="center-content">
		<table id="userTable" border=1>
			<tr>
				<th>User ID</th><th>Last Name</th><th>First Name</th><th>M. I.</th><th>Age</th><th>Contact No.</th><th>Email</th><th>Address</th><th>Username</th><th>Password</th>
			</tr>

		<?php
			include_once("config.php");
			$result = mysqli_query($mysqli, "SELECT * FROM tbl_users");

			while ($user_data = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$user_data['userId']."</td>";
				echo "<td>".$user_data['lastName']."</td>";
				echo "<td>".$user_data['firstName']."</td>";
				echo "<td>".$user_data['middleInitial']."</td>";
				echo "<td>".$user_data['age']."</td>";
				echo "<td>".$user_data['contactNo']."</td>";
				echo "<td>".$user_data['email']."</td>";
				echo "<td>".$user_data['address']."</td>";
				echo "<td>".$user_data['username']."</td>";
				echo "<td>".$user_data['password']."</td></tr>";
			}

		?>
		</table>
	</div>
</body>
</html>