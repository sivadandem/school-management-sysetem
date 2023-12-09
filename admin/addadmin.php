<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

// Connect to the database
$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["addadmin"])) {

    $username = $_POST['username'];
    $user_phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $user_password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $check = "SELECT * FROM user WHERE username=?";
    $check_stmt = mysqli_prepare($data, $check);
    mysqli_stmt_bind_param($check_stmt, "s", $username);
    mysqli_stmt_execute($check_stmt);
    $check_result = mysqli_stmt_get_result($check_stmt);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Username already exists";
    } else {

        $sql = "INSERT INTO user(username,phone,email,usertype,password) VALUES(?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($data, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $username, $user_phone, $user_email, $usertype, $user_password);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Data updated";
        } else {
            echo "Upload failed";
        }
    }

    mysqli_close($data); // Close the connection
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ADD ADMIN</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <?php
    include("admin_sidebar.php");
    ?>

    <div class="content">
        <h1>
            ADD ADMIN
        </h1>

        <div class="div_design">
            <form action="#" method="POST">
                <div id="l1">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>

                <div id="l3">
                    <label for="phn">Phone </label>
                    <input type="number" name="phone">
                </div>
                <div id="l2">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div id="l2">
                    <label for="email">Usertype</label>
                    <input type="text" name="usertype">
                </div>
                <div id="l4">
                    <label for="password">Password</label>
                    <input type="text" name="password" required>
                    <input class="btn btn-primary" id="addadminbtn" type="submit" style="margin-left:100px;" name="addadmin" value="ADD ADMIN">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
