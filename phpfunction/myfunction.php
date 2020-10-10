<?php
if(isset($_POST['register_submit'])){
	$conn  = mysqli_connect('localhost', 'root', '', 'lottoindia');


	$username  = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];

	$select = "SELECT * FROM users WHERE username = '$username'";
	$reselect = $conn->query($select);

	if(mysqli_num_rows($reselect) > 0 ){
		header("Location: ../register.php?error=usertaken");

	}
	else {
			$insertmoto = "INSERT INTO  users(username, password, email, contact_number)VALUES ('$username', '$password', '$email', '$contact_number')";
			$result = $conn->query($insertmoto);
			header("Location: ../register.php?success=inserted");

	}


	

}
?>