<?php
// academy_page.php

// Teachers array with photos
$teachers = [
    ["name"=>"Emily Johnson","subject"=>"PHP & Web Development","experience"=>"5 years","bio"=>"Expert in PHP, MySQL, Laravel, and modern web frameworks.","photo"=>"images/teacher1.jpg"],
    ["name"=>"John Doe","subject"=>"JavaScript & Frontend","experience"=>"8 years","bio"=>"Specialist in JS, React, and modern UI/UX.","photo"=>"images/teacher2.jpg"],
    ["name"=>"Jane Smith","subject"=>"Database & Backend","experience"=>"10 years","bio"=>"Database expert with MySQL, PostgreSQL, and optimization.","photo"=>"images/teacher3.jpg"],
    ["name"=>"Michael Brown","subject"=>"Full Stack Development","experience"=>"7 years","bio"=>"Skilled in PHP, NodeJS, and frontend frameworks.","photo"=>"images/teacher4.jpg"],
    ["name"=>"Sophia Lee","subject"=>"Web Design & UI/UX","experience"=>"6 years","bio"=>"Passionate about creative and user-friendly designs.","photo"=>"images/teacher5.jpg"]
];

// 20 Courses array
$courses = [
    ["title"=>"Web Development with PHP","duration"=>"6 Months","level"=>"Beginner to Advanced","description"=>"Learn to build dynamic websites using PHP, MySQL, HTML, CSS, and JS.","image"=>"images/course1.jpg"],
    ["title"=>"Advanced PHP & MySQL","duration"=>"4 Months","level"=>"Intermediate","description"=>"Deep dive into PHP programming, database integration, and projects.","image"=>"images/course2.jpg"],
    ["title"=>"Full Stack Web Development","duration"=>"8 Months","level"=>"Beginner to Advanced","description"=>"Learn PHP backend, JS frontend, and build full web apps.","image"=>"images/course3.jpg"],
    ["title"=>"Laravel Framework Mastery","duration"=>"5 Months","level"=>"Intermediate","description"=>"Build modern web apps using Laravel framework.","image"=>"images/course4.jpg"],
    ["title"=>"CodeIgniter Essentials","duration"=>"3 Months","level"=>"Beginner","description"=>"Learn to create PHP apps using CodeIgniter framework.","image"=>"images/course5.jpg"],
    ["title"=>"PHP OOP & MVC","duration"=>"4 Months","level"=>"Intermediate","description"=>"Master Object Oriented PHP and MVC architecture.","image"=>"images/course6.jpg"],
    ["title"=>"PHP Security Best Practices","duration"=>"2 Months","level"=>"Intermediate","description"=>"Learn secure coding practices in PHP apps.","image"=>"images/course7.jpg"],
    ["title"=>"PHP API Development","duration"=>"3 Months","level"=>"Intermediate","description"=>"Create RESTful APIs using PHP and JSON.","image"=>"images/course8.jpg"],
    ["title"=>"E-Commerce Website with PHP","duration"=>"6 Months","level"=>"Beginner to Advanced","description"=>"Build a complete e-commerce website using PHP.","image"=>"images/course9.jpg"],
    ["title"=>"PHP & AJAX","duration"=>"2 Months","level"=>"Intermediate","description"=>"Learn how to integrate AJAX with PHP for dynamic apps.","image"=>"images/course10.jpg"],
    ["title"=>"PHP & MySQL Projects","duration"=>"5 Months","level"=>"Intermediate","description"=>"Hands-on projects with PHP and MySQL database.","image"=>"images/course11.jpg"],
    ["title"=>"PHP MVC Framework","duration"=>"4 Months","level"=>"Intermediate","description"=>"Master MVC frameworks in PHP like Laravel or CodeIgniter.","image"=>"images/course12.jpg"],
    ["title"=>"WordPress Theme Development","duration"=>"3 Months","level"=>"Beginner","description"=>"Create custom WordPress themes using PHP.","image"=>"images/course13.jpg"],
    ["title"=>"WordPress Plugin Development","duration"=>"3 Months","level"=>"Intermediate","description"=>"Learn to build custom plugins for WordPress.","image"=>"images/course14.jpg"],
    ["title"=>"PHP & JavaScript Integration","duration"=>"3 Months","level"=>"Intermediate","description"=>"Combine PHP and JS for dynamic web apps.","image"=>"images/course15.jpg"],
    ["title"=>"PHP Performance Optimization","duration"=>"2 Months","level"=>"Advanced","description"=>"Optimize PHP apps for speed and efficiency.","image"=>"images/course16.jpg"],
    ["title"=>"PHP Unit Testing","duration"=>"2 Months","level"=>"Intermediate","description"=>"Learn automated testing in PHP applications.","image"=>"images/course17.jpg"],
    ["title"=>"PHP & JSON","duration"=>"1 Month","level"=>"Beginner","description"=>"Learn working with JSON in PHP for data transfer.","image"=>"images/course18.jpg"],
    ["title"=>"PHP & REST APIs","duration"=>"2 Months","level"=>"Intermediate","description"=>"Build REST APIs in PHP for modern applications.","image"=>"images/course19.jpg"],
    ["title"=>"PHP Project Deployment","duration"=>"1 Month","level"=>"Beginner","description"=>"Deploy PHP projects to live servers safely.","image"=>"images/course20.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Academy - Courses & Teachers</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
* {margin:0; padding:0; box-sizing:border-box;}
body {font-family:'Roboto', sans-serif; background:#f5f7fa; color:#333;}
header {background: linear-gradient(135deg,#6a11cb 0%,#2575fc 100%); color:#fff; padding:80px 20px; text-align:center;}
header h1 {font-size:3.2em; margin-bottom:10px; animation: fadeInDown 1s;}
header p {font-size:1.2em; animation: fadeInUp 1s;}
.container {width:90%; max-width:1300px; margin:40px auto;}
h2 {text-align:center; color:#2c3e50; margin-bottom:30px;}
.grid {display:flex; flex-wrap:wrap; gap:30px; justify-content:center;}
.card {background:#fff; border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.1); overflow:hidden; width:300px; transition:all 0.3s;}
.card:hover {transform:translateY(-10px); box-shadow:0 15px 35px rgba(0,0,0,0.2);}
.card img {width:100%; height:200px; object-fit:cover;}
.card-content {padding:20px;}
.card-content h3 {color:#2575fc; margin-bottom:10px;}
.card-content p {margin-bottom:10px; line-height:1.5;}
.btn {display:inline-block; padding:10px 20px; background:#6a11cb; color:#fff; border-radius:25px; text-decoration:none; transition:0.3s;}
.btn:hover {background:#2575fc;}
.teacher img {border-radius:50%; width:120px; height:120px; margin-bottom:15px;}
footer {background:#2c3e50; color:#fff; text-align:center; padding:30px 0; margin-top:40px;}
@media(max-width:768px){.grid{flex-direction:column; align-items:center;} header h1{font-size:2.4em;}}
/* Animations */
@keyframes fadeInDown{from{opacity:0; transform:translateY(-50px);}to{opacity:1; transform:translateY(0);}}
@keyframes fadeInUp{from{opacity:0; transform:translateY(50px);}to{opacity:1; transform:translateY(0);}}
</style>
</head>
<body>

<header>
<h1>OUR BEST TEACHERS</h1>
<p>Learn Web Development with Expert Teachers and Real Projects</p>
</header>

<div class="container">
<h2>Our Top PHP Courses</h2>
<div class="grid">
<?php foreach($courses as $course): ?>
<div class="card">
<img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>">
<div class="card-content">
<h3><?php echo $course['title']; ?></h3>
<p><strong>Duration:</strong> <?php echo $course['duration']; ?></p>
<p><strong>Level:</strong> <?php echo $course['level']; ?></p>
<p><?php echo $course['description']; ?></p>
<a href="#" class="btn">Enroll Now</a>
</div>
</div>
<?php endforeach; ?>
</div>

<h2>Meet Our Expert Teachers</h2>
<div class="grid">
<?php foreach($teachers as $teacher): ?>
<div class="card teacher">
<img src="<?php echo $teacher['photo']; ?>" alt="<?php echo $teacher['name']; ?>">
<div class="card-content">
<h3><?php echo $teacher['name']; ?></h3>
<p><strong>Subject:</strong> <?php echo $teacher['subject']; ?></p>
<p><strong>Experience:</strong> <?php echo $teacher['experience']; ?></p>
<p><?php echo $teacher['bio']; ?></p>
</div>
</div>
<?php endforeach; ?>
</div>
</div>

<footer>
&copy; <?php echo date("Y"); ?> Learning Portal. All Rights Reserved.
</footer>

</body>
</html>
