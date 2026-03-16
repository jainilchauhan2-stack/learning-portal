<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

/* Example progress value
   In real project this comes from database */
$progress = 60; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Progress Tracking</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
margin:0;
}

header{
background:#1e3c72;
color:white;
padding:20px;
text-align:center;
}

.container{
width:60%;
margin:auto;
margin-top:50px;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}

.progress-bar{
width:100%;
background:#ddd;
border-radius:20px;
overflow:hidden;
margin-top:20px;
}

.progress{
height:25px;
background:#4CAF50;
text-align:center;
color:white;
line-height:25px;
}

.course{
margin-top:30px;
padding:15px;
background:#f4f6f9;
border-radius:8px;
}

</style>

</head>
<body>

<header>
<h2>📊 Student Progress Tracking</h2>
</header>

<div class="container">

<h3>Welcome <?php echo $_SESSION['user']; ?></h3>

<p>Your Course Completion Progress</p>

<div class="progress-bar">
<div class="progress" style="width: <?php echo $progress; ?>%">
<?php echo $progress; ?>%
</div>
</div>

<div class="course">
<h4>Course: PHP Programming</h4>
<p>Lessons Completed: 6 / 10</p>
</div>

<div class="course">
<h4>Course: HTML & CSS</h4>
<p>Lessons Completed: 8 / 10</p>
</div>

</div>

</body>
</html>