<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repeat_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$repeat_password = validate($_POST['repeat_password']);
	$user_data = 'email='. $email;


	if (empty($email)) {
		header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($repeat_password)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if($password !== $repeat_password){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(email, password) VALUES('$email', '$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}