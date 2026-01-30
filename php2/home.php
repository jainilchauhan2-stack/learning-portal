<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning Portal</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        header {
            background-color: #1e3c72;
            color: white;
            padding: 30px;
            text-align: center;
        }

        nav {
            background-color: #16325c;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            padding: 60px;
            text-align: center;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 50px;
            flex-wrap: wrap;
        }

        .box {
            background: white;
            width: 250px;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .box h3 {
            margin-bottom: 10px;
            color: #1e3c72;
        }

        footer {
            background-color: #1e3c72;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <img src="../assets/LOGO.png" alt="logo">
    <h1>Learning Portal</h1>
    <p>Your Gateway to Knowledge</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="course1.php">Courses</a>
    <a href="login.php">Login</a>
    <a href="singup.php">Register</a>
</nav>

<section class="hero">
    <h1>Learn Anytime, Anywhere</h1>
    <p>Join thousands of learners and improve your skills today</p>
</section>

<section class="features">
    <div class="box">
        <h3>📚 Quality Courses</h3>
        <p>Well-structured learning content</p>
    </div>

    <div class="box">
        <h3>🎓 Expert Teachers</h3>
        <p>Learn from experienced instructors</p>
    </div>

    <div class="box">
        <h3>📝 Progress Tracking</h3>
        <p>Track your learning journey</p>
    </div>
</section>

<footer>
    © 2026 Learning Portal. All Rights Reserved.
</footer>

</body>
</html>
