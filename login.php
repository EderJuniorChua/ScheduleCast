<?php 
session_start(); 
include "db_conn.php";

if($_SESSION['remember']){
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
}

if (isset($_POST['email']) && isset($_POST['password'])) {
	
	//this outputs 0 in echo instead of ""
	$_SESSION['remember'] = isset($_POST['remember'])? 1: 0;

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	//hacky way of remember-ing password, can still be optimized
	$_SESSION['password'] = ($_SESSION['remember'])? $password : "";
	
	

	if (empty($email)) {
		header("Location: index.php?error=Username is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $password = md5($password);

		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
            	$_SESSION['id'] = $row['id'];
				$_SESSION['email'] = $row['email'];
				
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
