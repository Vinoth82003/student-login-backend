<?php 
session_start();

if (isset($_SESSION['rollno'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <link rel="stylesheet" href="/student/css/student.css">
    <link rel="stylesheet" href="/student/css/main.css">
</head>
<body>

<div class="student_page">
<header>
    <nav></nav>
    <div class="profile">
        <div class="prof-pic">
            <img src="<?php echo $_SESSION['image'];?>" class="prof" id="prof" name="prof" alt="user_profile">
        </div>
        <div class="logout">
            <a href="logout.php" class="logout-btn">logout</a>
        </div>
    </div>
</header>
<div class="student-details">
    <table class="stud-det">
        <tr>
        <th>Reg no</th>
        <th>Name</th>
        <th>standard</th>
        <th>section</th>
        <th>group</th>
        <th>fees status</th>
        </tr>
        <tr>
            <td><?php echo $_SESSION['rollno']; ?></td>
            <td><?php echo $_SESSION['name']; ?></td>
            <td><?php echo $_SESSION['std']; ?></td>
            <td><?php echo $_SESSION['sec']; ?></td>
            <td><?php echo $_SESSION['group'] ?></td>
            <td><?php echo $_SESSION['fees']; ?></td>
        </tr>
    </table>
    
    <div class="mark-table">
                    <table class="marks" id='marks'>
                        <tr>
                            <th>subjects</th>
                            <th>marks</th>
                            <th>grade</th>
                        </tr>
                        <tr class = "mark-col">
                           <td>tamil</td>
                           <td class = 'data'><?php echo $_SESSION['tamil']; ?></td>
                           <td class = "grade"></td>
                        </tr>
                        <tr class = "mark-col">
                           <td>english</td>
                           <td class = 'data'><?php echo $_SESSION['english']; ?></td>
                           <td class = "grade"></td>
                        </tr>
                        <tr class = "mark-col">
                           <td>maths</td>
                           <td class = 'data'><?php echo $_SESSION['maths']; ?></td>
                           <td class = "grade"></td>
                        </tr>
                        <tr class = "mark-col">
                           <td>physics</td>
                           <td class = 'data'><?php echo $_SESSION['physics']; ?></td>
                           <td class = "grade"></td>
                        </tr>
                        <tr class = "mark-col">
                           <td>chemistry</td>
                           <td class = 'data'><?php echo $_SESSION['chemistry']; ?></td>
                           <td class = "grade"></td>
                        </tr>
                        <tr class = "mark-col">
                           <td><?php echo $_SESSION['groupName']; ?></td>
                           <?php if (isset($_SESSION['biology'])) { ?>
                           <td class="data" id='data'><?php echo $_SESSION['biology']; ?></td>
                           <?php } ?>

                           <?php if (isset($_SESSION['cs'])) { ?>
                           <td class="data" id='data'><?php echo $_SESSION['cs']; ?></td>
                           <?php } ?>
                           
                           <td class = "grade"></td>
                        </tr>
                        <tr class = "mark-col">
                           <td>total</td>
                           <td colspan="2" class='total'> </td>
                        </tr>
                        <tr class = "mark-col">
                           <td>average</td>
                           <td class='average'>92</td>
                           <td class = "grade"></td>
                        </tr>
                    </table>
                </div>
                <div class="print-mark">
                    <button type="button" onclick=' downloadExcel()' class="print">excel</button>
                    <button type="button" onclick=' downloadWord()' class="print">word</button>
                </div>
    
</div>
    <div class="view-mark">
        <a href="mark.php" class="view-btn">view mark</a>
    </div>
</div>

<script src="/student/js/table.js"></script>
<script src="/student/js/student.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>