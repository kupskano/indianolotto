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


$conn = mysqli_connect('localhost', 'root', '', 'lottoindia');
if( isset($_POST['submit_login'])){
	$username=$_POST['username']; 
	$password=$_POST['password']; 

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($result) != 1){
     header("Location: ../login.php?error=wrongcredential");
     }else{
      $row = mysqli_fetch_assoc($result); 
      if($row['user_type'] == 'user'){
        session_start();
        // $_SESSION['fullname'] = $row['fullname'];
      	$_SESSION['username'] = $row['username'];
      	$_SESSION['user_type'] = $row['user_type'];

      	$_SESSION['id'] = $row['id'];
       header('location: ../index.php');
       
      }else if($row['user_type'] == 'dole' ){
        session_start();
        // $_SESSION['fullname'] = $row['fullname'];
      	$_SESSION['username'] = $row['username'];
      	$_SESSION['user_type'] = $row['user_type'];
        // $_SESSION['expertise'] = $row['expertise'];
      	$_SESSION['user_id'] = $row['user_id'];
       header("Location: ../dole/dashboard.php");
      }
      else if($row['user_type'] == 'dswd' ){
        session_start();
        // $_SESSION['course'] = $row['course'];
        // $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['username'] = $row['username'];
        // $_SESSION['srn']      = $row['srn'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['user_id'] = $row['user_id'];
       header("Location: ../dswd/dashboard.php");
      }
      else if($row['user_type'] == 'company' ){
        session_start();
        
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['company_name'] = $row['company_name'];
        
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['myref'] = $row['myref'];
        $_SESSION['user_id'] = $row['user_id'];
       header("Location: ../company/dashboard.php");
      }

      else{
       echo "<script>alert('Wrong Username or Password Access Denied !!! Try Again');
      </script>";
      }
     }
}
?>