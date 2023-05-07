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
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM `stud_details` WHERE rollno = '$uname' AND dob = '$pass';";
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			
			$row = mysqli_fetch_assoc($result);
			
            if ($row['rollno'] === $uname && $row['dob'] === $pass) {

            	$_SESSION['rollno'] = $row['rollno'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['image'] = $row['image'];
            	$_SESSION['std'] = $row['std'];
            	$_SESSION['sec'] = $row['sec'];
				$_SESSION['group']=$row['group_name'];
				$_SESSION['fees'] = $row['fees'];

				if ($_SESSION['group'] === 'cs') {
					$_SESSION['group'] = 'Computer science';
				}else{
					$_SESSION['group'] = 'bology';
				}

				if ($row['fees'] === 'paid') {
					header("Location: home.php");
					exit();
				}else{
					header("Location: index.php?error=access denied");
				}
				
				
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
	header("Location: index.php?error=uname not set");
	exit();
}