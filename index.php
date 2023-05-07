<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="/student/css/login.css">
</head>
<body>
    <section class="login-page">
        <div class="inner-page">
            <div class="from-container">
                <div class="left-form-box">
                    <img src="/student/img/student-login-side.svg" alt="student" class="left-box-img">
                </div>
                <div class="right-form-box">
                <form action="login.php" method="post" autocomplete="on" class="form">
                        <div class="stud_login">
                          <h2 class="h2">
                            student login
                          </h2>
                        </div>

                        <?php if (isset($_GET['error'])) { ?>
                           <p class="error" id='error'><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        
                        <label for="regno" class="label name">
                            <span class=" icon prof-icon"></span>
                            <input type="text" 
                             name="uname" id="regno" 
                             placeholder="2023MTMHSS001" 
                             class="regno"
                            />
                            
                        </label>
                        <label for="dob" class="label dob">
                            <span class="icon dob-icon"></span>
                            <input type="text" 
                             name="password" 
                             id="dobinput"
                             placeholder="dd-mm-yyyy"
                             class="dobinput"
                            />
                        </label>
                        <div class="submitbtn">
                            <button type="submit" class="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="/student/js/error.js"></script>
</body>
</html>
