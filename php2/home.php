<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Learning Portal</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI';
}


header{
background:#0f3460;
color:white;
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 40px;
}

.logo{
font-size:22px;
font-weight:bold;
}

.logout{
background:#ff4d4d;
border:none;
padding:8px 15px;
color:white;
border-radius:5px;
cursor:pointer;
}


nav{
background:#16213e;
padding:12px;
text-align:center;
}

nav a{
color:white;
margin:0 18px;
text-decoration:none;
font-weight:bold;
transition:0.3s;
}

nav a:hover{
color:#00e5ff;
}


.hero{
height:420px;
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f');
background-size:cover;
background-position:center;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
text-align:center;
color:white;
}

.hero h1{
font-size:48px;
margin-bottom:15px;
}

.hero p{
font-size:18px;
margin-bottom:20px;
}

.hero button{
background:#00adb5;
border:none;
padding:12px 25px;
font-size:16px;
color:white;
border-radius:6px;
cursor:pointer;
}

.hero button:hover{
background:#008891;
}


.features{
padding:60px;
display:flex;
justify-content:center;
gap:30px;
flex-wrap:wrap;
background:#f4f6f9;
}

.card{
background:white;
width:260px;
padding:30px;
border-radius:10px;
text-align:center;
box-shadow:0 6px 12px rgba(0,0,0,0.1);
transition:0.3s;
}

.card:hover{
transform:translateY(-8px);
}

.card h3{
color:#0f3460;
margin-bottom:10px;
}

.card a{
text-decoration:none;
color:black;
}


.courses{
padding:60px;
text-align:center;
background:white;
}

.course-container{
display:flex;
justify-content:center;
gap:30px;
margin-top:30px;
flex-wrap:wrap;
}

.course{
background:#eef2f7;
padding:25px;
width:220px;
border-radius:10px;
transition:0.3s;
}

.course:hover{
background:#dbe4f0;
}


footer{
background:#0f3460;
color:white;
text-align:center;
padding:20px;
}

</style>

</head>

<body>

<header>

<div class="logo">📚 Learning Portal</div>

<div>
Welcome <?php echo $_SESSION['user']; ?>

<form method="post" style="display:inline;">
<button class="logout" name="logout">Logout</button>
</form>

</div>

</header>

<nav>
<a href="#">Home</a>
<a href="course1.php">Practice</a>
<a href="./course/course2.php">Courses</a>
<a href="video.php">Videos</a>
<a href="notes.php">Notes</a>
</nav>

<section class="hero">

<h1>Upgrade Your Skills Online</h1>
<p>Learn modern technologies with expert teachers</p>

<button onclick="window.location='./course/course2.php'">
Start Learning
</button>

</section>

<section class="features">

<div class="card">
<a href="quality.php">
<h3>📘 Quality Courses</h3>
<p>Well structured study materials</p>
</a>
</div>

<div class="card">
<a href="teachers.php">
<h3>👨‍🏫 Expert Teachers</h3>
<p>Learn from experienced professionals</p>
</a>
</div>

<div class="card">
<a href="progress.php">
<h3>📊 Progress Tracking</h3>
<p>Monitor your learning journey</p>
</a>
</div>

</section>

<section class="courses">

<h2>Popular Courses</h2>

<div class="course-container">

<div class="course">
<h4>PHP Development</h4>
<p>Backend programming</p>
</div>

<div class="course">
<h4>HTML & CSS</h4>
<p>Website design basics</p>
</div>

<div class="course">
<h4>JavaScript</h4>
<p>Interactive web apps</p>
</div>

</div>

</section>

<footer>
© 2026 Learning Portal
</footer>

</body>
</html>