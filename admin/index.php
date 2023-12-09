<?php
  error_reporting(0);
  session_start();
  session_destroy();
  if ($_SESSION['message']){
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message')</script>";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOME PAGE</title>
  <link rel="stylesheet" href="style.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="section1">
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="#">
            <span id="t1" class="colored-text">WAYSPIRE</span>
          </a>
        </div>
        <ul>
          <li><a href="#"><span id="">HOME</span></a></li>
          <li><a href="#headingabout"><span id="">ABOUT</span></a></li>
          <li><a href="#headingcourses"><span id="">COURSES</span></a></li>
          <li><a href="#headingadmissionform"><span id="">ADMISSION</span></a></li>
        </ul>
      </div>
    </nav>
    <div class="center">
      <div class="title">
        <span id="sp1">LEARN</span> <br>
        <span id="sp2">TRAIN</span> <br>
        <span id="sp3">GAIN</span>
      </div>
      <div class="btns">
        <a href="login.php"><button>ADMIN</button></a>
        <a href="login.php"><button>STUDENT</button></a>
      </div>
    </div>
  </div>

  <div class="section2" id="about">
    <div class="about">
      <center><h2 id=headingabout>ABOUT</h2></center>
      <div class="about1">
        <div class="about1img">
          <img src="images/wayspire.png" alt="">
        </div>
        <div class="about1text">
          <p>
            <span id="about1textp">WAYSPIRE ED-TECH PVT LTD </span>is a dedicated E-learning platform to creating a community of lifelong learners. An E-learning platform with the goal of competence to students for the workforce and assisting you in landing your desired Job/University. We're providing exceptional customer service. We believe in keeping the Students happy by providing them with products with very competitive knowledge and skills. We have a fantastic team who will keep in continual contact with you and offer you their finest advice. We have built Internship training programs for students in college who are looking for summer internships or applying for jobs and also for working professionals trying to switch between companies.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="section4" id="headingcourses">
    <h2>COURSES</h2>
    <div class="persons">
      <div class="row">
        <div class="column">
          <img src="images/CODING+FOUNDATION+WITH+PYTHON.png" alt="" style="width:100%">
          <p style="margin-top: 10px;">Python</p>
        </div>
        <div class="column">
          <img src="images/full-stack-developer-1946887-1651585.png" alt="" style="width:100%">
          <p style="margin-top: 10px;">Fullstack Development</p>
        </div>
        <div class="column">
          <img src="images/robotics-course-for-children-4203406-3494983.png" alt="" style="width:100%">
          <p style="margin-top: 10px;">Robotics</p>
        </div>
        <div class="column">
          <img src="images/Aeronautical-Engineering-Subjects.png" alt="" style="width:100%">
          <p style="margin-top: 10px;">Aeronautical</p>
        </div>
        <div class="column">
          <img src="images/android-app-development-course.png" alt="" style="width:100%">
          <p style="margin-top: 10px;"> Android App Development</p>
        </div>
        <div class="column">
          <img src="images/marketting1.png" alt="" style="width:100%">
          <p style="margin-top: 10px;">Marketing</p>
        </div>
        <div class="column">
          <img src="images/uiux.jpg" alt="" style="width:100%">
          <p style="margin-top: 10px;">UI/UX desigining</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section6" id="headingadmissionform">
    <center>
      <h2 class="adm">Admission Form</h2>
    </center>
    <div  class="admission_form">
      <form action="datacheck.php" method="POST">
        <div class="adm_int">
          <label class="label_text">Name</label>
          <input class="input_deg" type="text" name="name">
        </div>
        <div class="adm_int">
          <label class="label_text">Email</label>
          <input class="input_deg" type="text" name="email">
        </div>
        <div class="adm_int">
          <label class="label_text">Phone</label>
          <input class="input_deg" type="text" name="phone">
        </div>
        <div class="adm_int">
          <label class="label_text">Course</label>
          <input class="input_txt" name="course"></input>
        </div>
        <div class="adm_int">
          <label class="label_text">Message</label>
          <textarea class="input_txt" name="message"></textarea>
        </div>
        <div class="adm_int" >
          <input class="btn btn-primary" id="submit" type="submit" value="APPLY" name="apply" >
        </div>
      </form>
    </div>
  </div>

  <footer>
    <i class='bx bxl-instagram-alt' style='color:E4405F' id="ins">&nbsp;INSTAGRAM</i>
    <i class='bx bx-envelope' style='color:25D366' id="wha" >&nbsp;WHATSAPP</i>
    <i class='bx bx-envelope' style='color:0A66C2' id="ema" >&nbsp;EMAIL</i>
    <i class='bx bx-phone' style='color:7F8
