<?php
$courses = [
["name"=>"Web Development","rating"=>4.8,"students"=>1200,"completion"=>92,"level"=>"Beginner","icon"=>"🌐"],
["name"=>"Python Programming","rating"=>4.7,"students"=>980,"completion"=>88,"level"=>"Intermediate","icon"=>"🐍"],
["name"=>"UI/UX Design","rating"=>4.6,"students"=>650,"completion"=>90,"level"=>"Beginner","icon"=>"🎨"],
["name"=>"Data Science","rating"=>4.9,"students"=>1500,"completion"=>95,"level"=>"Advanced","icon"=>"📊"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Course Quality</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family: 'Segoe UI', sans-serif;
}

body{
background:#f4f7fb;
}

/* NAVBAR */

nav{
background:#4f46e5;
color:white;
padding:15px 40px;
display:flex;
justify-content:space-between;
align-items:center;
}

nav h2{
font-weight:600;
}

nav ul{
display:flex;
gap:25px;
list-style:none;
}

nav ul li{
cursor:pointer;
}

/* HEADER */

header{
text-align:center;
padding:40px 20px;
}

header h1{
font-size:38px;
color:#333;
}

header p{
color:#666;
margin-top:10px;
}

/* COURSE GRID */

.container{
width:90%;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:25px;
padding-bottom:40px;
}

/* COURSE CARD */

.course-card{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
text-align:center;
}

.course-card:hover{
transform:translateY(-8px);
box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

.icon{
font-size:40px;
margin-bottom:10px;
}

.course-card h2{
font-size:22px;
color:#333;
}

.level{
display:inline-block;
background:#eef2ff;
color:#4f46e5;
padding:5px 12px;
border-radius:20px;
font-size:12px;
margin-top:8px;
}

.rating{
color:#f59e0b;
margin-top:10px;
font-size:16px;
}

.info{
margin-top:8px;
color:#555;
font-size:14px;
}

/* PROGRESS BAR */

.progress{
background:#eee;
height:8px;
border-radius:10px;
margin-top:10px;
overflow:hidden;
}

.bar{
height:100%;
background:#4f46e5;
}

/* BUTTON */

button{
margin-top:15px;
background:#4f46e5;
border:none;
color:white;
padding:10px 16px;
border-radius:20px;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#3730a3;
}

/* FOOTER */

footer{
text-align:center;
padding:20px;
background:#111827;
color:white;
margin-top:30px;
}

</style>

</head>

<body>


<header>
<h1>Course Quality Dashboard</h1>
<p>Explore top rated courses and their performance</p>
</header>

<div class="container">

<?php foreach($courses as $course){ ?>

<div class="course-card">

<div class="icon"><?php echo $course["icon"]; ?></div>

<h2><?php echo $course["name"]; ?></h2>

<div class="level"><?php echo $course["level"]; ?></div>

<div class="rating">
⭐ <?php echo $course["rating"]; ?> / 5
</div>

<p class="info">👨‍🎓 <?php echo $course["students"]; ?> Students</p>

<p class="info">Completion <?php echo $course["completion"]; ?>%</p>

<div class="progress">
<div class="bar" style="width:<?php echo $course["completion"]; ?>%"></div>
</div>

<button>View Details</button>

</div>

<?php } ?>

</div>

<footer>
© 2026 LearnHub Learning Portal
</footer>

</body>
</html>
