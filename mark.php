<?php
session_start();

include "conn.php";

$rollno = $_SESSION['rollno'];
$group = $_SESSION['group'];

if ($group === 'bology') {
	$tableName = 'bio_studs';
	$_SESSION['groupName'] = 'biology';
	$biocs = 'biology';
}else{
	$tableName = 'cs_studs';
	$_SESSION['groupName'] = 'Computer Science';
	$biocs = 'cs';
}



if (isset($_SESSION['rollno'])) {
  
    $sql = "SELECT * FROM `$tableName` WHERE rollno ='$rollno' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['rollno'] === $rollno) {
			
            	$_SESSION['tamil'] = $row['tamil'];
            	$_SESSION['english'] = $row['english'];
            	$_SESSION['maths'] = $row['maths'];
            	$_SESSION['physics'] = $row['physics'];
            	$_SESSION['chemistry'] = $row['chemistry'];
            	$_SESSION['biology'] = $row['biology'];
				header("Location: home.php");
				$_SESSION['cs'] = $row['cs'];
            }else{
				header("Location: home.php?error= incorrect user name");
		        exit();
			}
		}else{
			header("Location: home.php?error=Incorect User name or password");
	        exit();
		}

}else{
    header("Location: home.php?error='unknown error....!' ");
}

?>