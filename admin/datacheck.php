<?php 


session_start();




$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);


if($data==false){
    echo "ERROR SERVER DOWN";
    exit;}


if(isset($_POST["apply"])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];
    $message=$_POST['message'];

    $sql="INSERT INTO admisssion(name,email,phone,course,message)
    VALUES('$name','$email','$phone','$course','$message')
    ";

    $result=mysqli_query($data,$sql);

    
    if ($result) {


        $_SESSION['message']="APLLICATION SENT SUCCESFUL";
        header("location:index.php");
    }
    
    
    
    
    else{

        '<script>
                setTimeout(function() {
                    alert("Re-enter the admissionform");
                    window.location.href = "index.php";
                }, 2000); // 2000 milliseconds (2 seconds) delay before redirecting
              </script>';
    }

}

?>

