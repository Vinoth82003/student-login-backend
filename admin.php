<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="/student/css/main.css">
    <link rel="stylesheet" href="/student/css/admin.css">
</head>
<body>
    <div class="admin_page">
        <form action="adminlogin.php" method="post" autocomplete="on" class="form">
            <h2 class="log-head">ADMIN</h2>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error" id='error'><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <input
              type="text"
              name="uname"
              placeholder="User Name"
              autofocus
              class="input"
            /><br />
    
            <input 
             type="text" 
             name="password" 
             placeholder="Password"
             class="input" 
            /><br />
    
            <button type="submit" class="submit">Login</button>
            </div>
    
          </form>
    </div>
    <script src="/student/js/admin.js"></script>
</body>
</html>