<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VIEW TEACHER</title>

    <link rel="stylesheet" href="admin.css">

    <?php
    
    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $db= "schoolproject";
    
    $data=mysqli_connect($host,$user,$password,$db);
    
    
    if($data==false){
        die("connection error");
    }
    $sql= "SELECT * from teacher";
    $result=mysqli_query($data,$sql);




    ?>
	</head>
<body>
    <?php
    include("admin_sidebar.php");
    ?>
	<div class="content">
		
		<h1>VIEW TEACHER</h1>

        <br>

        <table>
            <tr>
                <th style="padding:20px; font-size: 15px;">ID</th>
                <th style="padding:20px; font-size: 15px;">NAME</th>
                <th style="padding:20px; font-size: 15px;">SURNAME</th>
                <th style="padding:20px; font-size: 15px;">EMAIL</th>
                <th style="padding:20px; font-size: 15px;">PHONE</th>
                <th style="padding:20px; font-size: 15px;">ADDRESS</th>
                <th style="padding:20px; font-size: 15px;">DEPARTMENT</th>
                <th style="padding:20px; font-size: 15px;">VEHICLE TYPE</th>
                <th style="padding:20px; font-size: 15px;">VEHICLE NO</th>
                <th style="padding:20px; font-size: 15px;">PASSWORD</th>
                <th style="padding:20px; font-size: 15px;">DEL</th>
                

            </tr>


            <?php
            
            while($info=$result->fetch_assoc()){

            
            
            ?>

            <tr>
                <td style="padding:20px;">
                <?php  echo"{$info['id']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['fname']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['lname']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['email']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['phone']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['address']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['department']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['vehicle_type']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['vehicle_no']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['password']}";?>
                </td>
                <td style="padding:5px;">
                <?php  echo"<a onClick=\"javascript:return confirm('Are you sure to delete')\" href='deleteteacher.php?teacher_id={$info['id']}'
                 style='color:black; margin:10px;'>X</a>";?>
                </td>


            </tr>

            <?php

            }
            ?>
        </table>


	</div>

</body>
</html>
