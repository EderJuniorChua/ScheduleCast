<?php 
session_start();
include "functions.php";

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col h-screen justify-center items-center bg-blue-500 ">
     <!-- <div class="flex-1"> -->
     <h1 class="box-border font-sans text-3xl text-white">Hello, <?php echo firstName($_SESSION['email']);?>!</h1>
     <a href="logout.php">Logout</a>
     <!-- </div> -->
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>