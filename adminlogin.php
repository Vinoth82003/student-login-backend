<?php 
session_start(); 
include "conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$_SESSION['rollno'] = $uname;
	if (empty($uname)) {
		header("Location: admin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM `admin` WHERE uname = '$uname' AND pass = '$pass';";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['pass'] === $pass) {
				
				header("Location: admin.php?error=logged in successfully");
		        exit();
				
            }else{
				header("Location: admin.php?error=Incorect User name or password 36");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorect User name or password 40");
	        exit();
		}
	}
	
}else{
	header("Location: admin.php");
	exit();
}