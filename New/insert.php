<?php
			$servername = "localhost";
			$username = 'root';
			$password = '';
			$db = 'trafficDb';
			$errors=array();
		// Create connection
			$conn = mysqli_connect($servername, $username, $password, $db);

		/*	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";*/
			
	if(isset($_POST['submit']))
	{
			

		// Check connection
			
		
		
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$userName=$_POST['userName'];
			$email=$_POST['email'];
			$pwd = $_POST['pwd'];
			//$pwd=password_hash($_POST['pwd'],PASSWORD_BCRYPT);
			
		
			$user_check_query = "SELECT * FROM users WHERE userName='$userName' OR email='$email' LIMIT 1";
			$result = mysqli_query($conn, $user_check_query);
			$user = mysqli_fetch_assoc($result);
  
		  if ($user) { // if user exists
			if ($user['userName'] === $userName) {
			  array_push($errors, "Username already exists");
			}

			if ($user['email'] === $email) {
			  array_push($errors, "email already exists");
			}
		  }

  // Finally, register user if there are no errors in the form
		if (count($errors) == 0) {
  
			  $sql="INSERT INTO `user`(`firstName`, `lastName`, `userName`, `email`, `pwd`) VALUES ('$firstName','$lastName','$userName','$email','$pwd')";
				mysqli_query($conn, $sql);
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: tabela.php');
				
			}			
		
			//mysqli_close($conn);
	}
	if (isset($_POST['login'])) {
	  $user1 = $_POST['user'];
	  $password = $_POST['pass'];
	  //$password = password_hash($_POST['pwd'],PASSWORD_BCRYPT);

  if (empty($user1)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM `user` WHERE `userName`='$user1' AND `pwd`='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
//	else {}
	
?>