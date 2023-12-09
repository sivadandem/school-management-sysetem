<?php


// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

// Connect to the database
$data=mysqli_connect($host, $user, $password, $db);

if($_GET['teacher_id'])
{
    $user_id=$_GET['teacher_id'];
    $sql= "DELETE FROM teacher where id='$user_id'";
    $result=mysqli_query($data,$sql);
    if($result){
        header("location:viewteacher.php");
    }
}
?>