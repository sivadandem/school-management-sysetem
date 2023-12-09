<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VIEW STUDENT</title>

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
    $sql= "SELECT * from students";
    $result=mysqli_query($data,$sql);




    ?>
	</head>
<body>
    <?php
    include("admin_sidebar.php");
    ?>
	<div class="content">
		
		<h1>VIEW ADMISSSIONS</h1>

        <br>

        <table>
            <tr>
                <th style="padding:20px; font-size: 15px;">NAME</th>
                <th style="padding:20px; font-size: 15px;">EMAIL</th>
                <th style="padding:20px; font-size: 15px;">PHONE</th>
                <th style="padding:20px; font-size: 15px;">PASSWORD</th>
                <th style="padding:20px; font-size: 15px;">USERTYPE</th>
                <th style="padding:20px; font-size: 15px;">DELETE</th>
                <th style="padding:20px; font-size: 15px;">UPDATE</th>

            </tr>


            <?php
            
            while($info=$result->fetch_assoc()){

            
            
            ?>

            <tr>
                <td style="padding:20px;">
                <?php  echo"{$info['username']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['email']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['phone']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['password']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['usertype']}";?>
                </td>
                <td style="padding:15px;">
                <?php  echo"<a onClick=\"javascript:return confirm('Are you sure to delete')\" href='deletestudents.php?student_id={$info['id']}'
                 style='color:black'>DELETE</a>";?>
                </td>
                <td style="padding:15px;">
                <?php  echo"<a <a onClick=\"javascript:return confirm('Are you sure to update')\" href='deletestudents.php?student_id={$info['id']}'
                 style='color:black'>UPDATE</a>";?>
                </td>

            </tr>

            <?php

            }
            ?>
        </table>


	</div>

</body>
</html>
