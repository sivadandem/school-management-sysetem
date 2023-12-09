<?php


// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

// Connect to the database
$data=mysqli_connect($host, $user, $password, $db);

if(isset($_POST["addteacher"])){
    $user_id=$_POST['id'];
    $usernamef=$_POST['fname'];
    $usernamel=$_POST['lname'];			
    $user_email=$_POST['email'];
    $user_phno=$_POST['phone'];
    $user_addr=$_POST['address'];
    $user_dep=$_POST['department'];
    $user_veht=$_POST['vehicle_type'];
    $user_vehn=$_POST['vehicle_no'];
    $user_password=$_POST['password'];
    $usertype="teacher";


    $check="SELECT * FROM teacher WHERE lname='$usernamel'";
    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo"username already exists";

    }

    else{
        $sql="INSERT INTO teacher(id, fname, lname, email, phone, address, department, vehicle_type, vehicle_no, password) VALUES('$user_id','$usernamef','$usernamel','$user_email','$user_phno','$user_addr','$user_dep','$user_veht','$user_vehn','$user_password')";

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
	<title>ADD TEACHER</title>
    <link rel="stylesheet" href="admin.css">



	</head>
    <body>


	<?php
    include("admin_sidebar.php");
    ?>
    
    <div class="content">
        <h1>
            ADD TEACHER
        </h1>
        
            <div class="div_design">
            <form action="#" method="POST">
            <div id="l1" >
                <label for="fname">Id</label>
                <input type="text" name="id" >
            </div>
            <div id="l1" >
                <label for="fname">First Name</label>
                <input type="text" name="fname" >
            </div>
            <div id="l1" >
                <label for="lname">Last Name</label>
                <input type="text" name="lname" >
            </div>
            <div id="l2">
                <label for="email">Email</label>
                <input type="email" name="email" >
            </div>
            <div id="l3">
                <label for="phn">Phone </label>
                <input type="number" name="phone" >
            </div>
            <div id="l3">
                <label for="address">Address </label>
                <input type="text" name="address" >
            </div>
            <div id="l3">
                <label for="department">Department</label>
                <input type="text" name="department" >
            </div>
            <div id="l3">
                <label for="vehicle type">Vehicle type</label>
                <input type="text" name="vehicle_type" >
            </div>
            <div id="l3">
                <label for="vehicle no">Vehicle no</label>
                <input type="text" name="vehicle_no" >
            </div>

            <div id="l4">
                <label for="password">Password</label>
                <input type="text" name="password" required >
                <input class="btn btn-primary" id="addstudentbtn" type="submit" style="margin-left:100px;" name="addteacher" value="ADD TEACHER">
            </div>


            
        </form>
    </div>

    
</body>
</html>


