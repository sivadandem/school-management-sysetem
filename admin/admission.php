<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VIEW ADMISSIONS</title>

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
    $sql= "SELECT * from admisssion";
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
                <th style="padding:20px; font-size: 15px;">MESSAGE</th>
                <th style="padding:20px; font-size: 15px;">COURSE</th>
                <th style="padding:20px; font-size: 15px;">DELETE</th>
                <th style="padding:20px; font-size: 15px;">UPDATE</th>

            </tr>


            <?php
            
            while($info=$result->fetch_assoc()){

            
            
            ?>

            <tr>
                <td style="padding:20px;">
                <?php  echo"{$info['name']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['email']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['phone']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['message']}";?>
                </td>
                <td style="padding:20px;">
                <?php  echo"{$info['course']}";?>
                </td>
                <td style="padding:15px;">
                <?php  echo"<a onClick=\"javascript:return confirm('Are you sure to delete')\" href='deletestudent.php?student_id={$info['id']}'
                 style='color:black'>DELETE</a>";?>
                </td>
                <td style="padding:15px;">
                <?php  echo"<a <a onClick=\"javascript:return confirm('Are you sure to update')\" href='deletestudent.php?student_id={$info['id']}'
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
