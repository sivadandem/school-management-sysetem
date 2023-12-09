<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="admin.css">
    <?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "schoolproject";

    $data = mysqli_connect($host, $user, $password, $db);

    if ($data == false) {
        die("connection error");
    }

    // Count of teachers
    $teacherCountQuery = "SELECT COUNT(*) AS teacherCount FROM teacher";
    $teacherCountResult = mysqli_query($data, $teacherCountQuery);
    $teacherCountInfo = $teacherCountResult->fetch_assoc();
    $totalTeachers = $teacherCountInfo['teacherCount'];

    $studentCountQuery = "SELECT COUNT(*) AS studentCount FROM admisssion";
    $studentCountResult = mysqli_query($data, $studentCountQuery);
    $studentCountInfo = $studentCountResult->fetch_assoc();
    $totalstudents = $studentCountInfo['studentCount'];

    $sql = "SELECT * from mails";
    $result = mysqli_query($data, $sql);
    ?>


</head>
<body>

<?php include('admin_sidebar.php')?>
<div class="content">
    <div class=dt><h1>ADMIN<span id="datetime"></span></h1></div>
    <img  style="margin: 20px 0px;"  id="profile-image" src="images/logo1.png" alt="Profile Image" class="profile-image">
    <div class="profile-name"><h2><span id=sp1><?php echo $_SESSION['username']; ?></span></h2></div>

    <div class="databox">
        <div class="data">
        <a href="viewteacher.php"><p>STAFF</p><br><p>TOTAL: <?php echo $totalTeachers; ?></p></a>
        </div>
        <div class="data">
           <a href="admission.php"><p>STUDENTS</p><br><p>TOTAL: <?php echo $totalstudents; ?></p></a>
        </div>
        <div class="data">
            <p>FEE PENDING </p><br><p>TOTAL:</p>
        </div>
        <div class="data">
            <p>BUSSES</p><br><p>TOTAL:</p>
        </div>
    </div>

    <div class="datatable">
        <h1 style="margin-bottom:20px;">MAILS</h1>
    <table>
        <tr>
            <th style="padding:20px; font-size: 15px;">FROM</th>
            <th style="padding:20px; font-size: 15px;">SUBJECT</th>
            <th style="padding:20px; font-size: 15px;">BODY</th>
            <th style="padding:20px; font-size: 15px;">TO</th>
        </tr>
        <?php
        while($info=$result->fetch_assoc()){
        ?>
        <tr>
            <td style="padding:20px;"><?php echo "{$info['mfrom']}";?></td>
            <td style="padding:20px;"><?php echo "{$info['msubject']}";?></td>
            <td style="padding:20px;"><?php echo "{$info['mbody']}";?></td>
            <td style="padding:20px;"><?php echo "{$info['mto']}";?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

            
    </div>
    <script>
        function updateDateTime() {
            var now = new Date();
            var datetimeElement = document.getElementById('datetime');
            datetimeElement.innerHTML = now.toLocaleString();
        }

        // Update date and time every second
        setInterval(updateDateTime, 1000);

        // Initial call to set the initial value
        updateDateTime();
    </script>
    
</div>
    
</body>
</html>