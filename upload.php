<?php
session_start(); 
include 'conn.php';


if (isset($_POST['name'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $rollno = validate($_POST['rollno']);
    $std = validate($_POST['std']);
    $sec = validate($_POST['sec']);
    $dob = validate($_POST['dob']);
    $fees = validate($_POST['fees']);
    $tamil = validate($_POST['tamil']);
    $english = validate($_POST['english']);
    $maths = validate($_POST['maths']);
    $physics = validate($_POST['physics']);
    $chemistry = validate($_POST['chemistry']);
    $group = validate($_POST['group']);
    $bioCsMark = validate($_POST['bioCsMark']);
    
    if (empty($name)) {
		header("Location: uploadform.php?error=Name is requiered");
	    exit();
	}elseif (empty($rollno)) {
		header("Location: uploadform.php?error=Rollno is requiered");
	    exit();
	}elseif (empty($std)) {
		header("Location: uploadform.php?error=Standart is requiered");
	    exit();
	}elseif (empty($sec)) {
		header("Location: uploadform.php?error=select the section ");
	    exit();
	}elseif (empty($dob)) {
		header("Location: uploadform.php?error=date of birth is requiered");
	    exit();
	}elseif (empty($fees)) {
		header("Location: uploadform.php?error=select your fees status propeerly");
	    exit();
	}elseif (empty($tamil)) {
		header("Location: uploadform.php?error=Enter tamil mark");
	    exit();
	}elseif (empty($english)) {
		header("Location: uploadform.php?error=Enter english mark");
	    exit();
	}elseif (empty($maths)) {
		header("Location: uploadform.php?error=Enter maths mark");
	    exit();
	}elseif (empty($physics)) {
		header("Location: uploadform.php?error=Enter physics mark");
	    exit();
	}elseif (empty($chemistry)) {
		header("Location: uploadform.php?error=Enter chemistry mark");
	    exit();
	}elseif (empty($group)) {
		header("Location: uploadform.php?error=Select the group properly");
	    exit();
	}elseif (empty($bioCsMark)) {
		header("Location: uploadform.php?error=Enter biology/computer science mark");
	    exit();
	}else{
       
       if ($group === 'biology') {
        $tableName = 'bio_studs';
        $bioCS = 'biology';
       }else{
        $tableName = 'cs_studs';
        $bioCS = 'cs';
       }
       

        $sql1 = "INSERT INTO $tableName 
                (`rollno`, `name`, `std`, `tamil`, `english`, `maths`, `physics`, `chemistry`, $bioCS) 
                VALUES ('$rollno', '$name', '$std', '$tamil', '$english', '$maths', '$physics', '$chemistry', '$bioCsMark');";

		$result1 = mysqli_query($conn, $sql1);

        $sql2  = "  INSERT INTO `stud_details` 
        (`rollno`, `name`, `std`, `sec`, `dob`, `group_name`, `fees`) 
       VALUES ('$rollno', '$name', '$std', '$sec', '$dob', '$group', '$fees');";
        $result2 = mysqli_query($conn, $sql2);


        echo 'result1 : ', $result1;
        echo 'result2 : ', $result2;


        header("Location: uploadform.php?error= Uploaded success fully...! ");
	    exit();
        

    }

}else{
    header("Location: uploadform.php?error=Fill out all the fields ");
	    exit();
}

?>

<!-- INSERT INTO `bio_studs` 
(`rollno`, `name`, `std`, `tamil`, `english`, `maths`, `physics`, `chemistry`, `biology`) 
VALUES ('2024mtmhss001', 'vinoth', '12', '80', '90', '80', '85', '95', '97');



INSERT INTO `cs_studs` 
(`rollno`, `name`, `std`, `tamil`, `english`, `maths`, `physics`, `chemistry`, `cs`) 
VALUES ('2024mtmhss002', 'vinothS', '12', '80', '90', '80', '85', '95', '97');


INSERT INTO `stud_details` 
(`rollno`, `name`, `std`, `sec`, `dob`, `group_name`, `fees`) 
VALUES ('2024mtmhss001', 'vinoth', '12', 'b', '11/08/2003', 'biology', 'paid'); -->
