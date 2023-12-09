<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url('images/backdrop.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    header a{
        font-size: medium;
        font-weight: bold;
        color:black;
    }


    </style>
</head>
<body>

    <header class="header">
        <a href="">ADMIN DASHBOARD</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">LOGOUT</a>
        </div>
    </header>

    <div class="asidebar">
        <aside>
            <ul>
                <li><a href="adminhome.php">ADMIN</a></li>
                <li><a href="admission.php">ADMISSIONS</a></li>
                <li><a href="addstudent.php">ADD STUDENT</a></li>
                <li><a href="viewstudent.php">VIEW STUDENT</a></li>
                <li><a href="addteacher.php">ADD TEACHER</a></li>
                <li><a href="viewteacher.php">VIEW TEACHER</a></li>
                <li><a href="addcourse.php">ADD COURSES</a></li>
                <li><a href="viewcourse.php">VIEW COURSES</a></li>
                <li><a href="addadmin.php">ADD ADMIN</a></li>
            </ul>
        </aside>
    </div>
