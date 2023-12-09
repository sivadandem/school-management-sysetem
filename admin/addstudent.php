<?php


// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

// Connect to the database
$data=mysqli_connect($host, $user, $password, $db);

if(isset($_POST["addstudent"])){
    
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phno=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";

    $check="SELECT * FROM students WHERE username='$username'";
    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo"username already exists";

    }

    else{

    $sql="INSERT INTO students(username,email,phone,usertype,password) VALUES('$username','$user_email','$user_phno','$usertype','$user_password')";
    $result=mysqli_query($data,$sql);
    
    if($result)
    {
        echo "DATA UPDATED";
    }
    else
    {
        echo "upload failed";
    }

    }
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD STUDENT</title>
    <link rel="stylesheet" href="admin.css">



	</head>
    <body>


	<?php
    include("admin_sidebar.php");
    ?>
    
    <div class="content">
        <h1>
            ADD STUDENT
        </h1>
        
            <div class="div_design">
            <form action="#" method="POST">
            <div id="l1" >
                <label for="username">Username</label>
                <input type="text" name="name" >
            </div>
            <div id="l2">
                <label for="email">Email</label>
                <input type="email" name="email" >
            </div>
            <div id="l3">
                <label for="phn">Phone </label>
                <input type="number" name="phone" >
            </div>
            <div id="l4">
                <label for="password">Password</label>
                <input type="text" name="password" required >
                <input class="btn btn-primary"id="addstudentbtn" type="submit" style="margin-left:100px;" name="addstudent" value="ADD STUDENT">
            </div>


            
        </form>
    </div>

    
</body>
</html>


