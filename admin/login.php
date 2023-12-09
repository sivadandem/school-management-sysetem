<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="center-body">

    <div class="form_deg">
        <div class="title_deg">
            LOGIN FORM
        </div>
        
        <form action="login_check.php" method="POST" class="login_form">
            
            <div>
                <label class="label_deg">Username</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label class="label_deg">Password</label>
                <input type="password" name="password" required>
                <h4>
                    <?php 
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                </h4>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </div>

        </form>
    </div>

</body>
</html>
