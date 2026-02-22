<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Django Full Tutorial</title>
<style>
/* Reset & Body */
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

/* Header */
header {
    background: linear-gradient(135deg, #0a9396, #005f73);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #cce0ff; }

/* Navigation */
nav {
    background: #005f73;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    padding: 15px 0;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

nav a {
    color: #fff;
    text-decoration: none;
    padding: 8px 18px;
    font-weight: bold;
    border-radius: 8px;
    transition: 0.3s ease;
}
nav a:hover { background: #0a9396; color: #fff; }

/* Sections */
section {
    background: #fff;
    margin: 30px auto;
    padding: 40px 30px;
    border-radius: 16px;
    max-width: 950px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
section:hover { transform: translateY(-5px); }

section h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 15px;
    background: linear-gradient(to right, #0a9396, #005f73);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #0a9396;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #0a9396;
    padding: 15px;
    overflow-x: auto;
    border-radius: 8px;
    font-family: 'Courier New', monospace;
    box-shadow: inset 0 0 5px rgba(0,0,0,0.05);
}

/* Lists */
ul { padding-left: 25px; margin-top: 10px; }

/* Tables */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
th, td {
    border: 1px solid #0a9396;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #0a9396; color: #fff; }
tr:hover td { background: #d1f0f0; }

/* Footer */
footer {
    background: #005f73;
    color: #fff;
    text-align: center;
    padding: 25px 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
}

/* Smooth Scroll */
html { scroll-behavior: smooth; }
</style>
</head>
<body>

<header>
    <h1>Django Full Tutorial</h1>
    <p>Complete Guide to Django Web Framework</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Setup & Structure</a>
    <a href="#commands">Common Commands</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Django Introduction</h2>
<hr>
<p>Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design. It simplifies the process of building web applications by providing ready-to-use components.</p>

<h3>Why Learn Django?</h3>
<ul>
<li>Rapid development with reusable components</li>
<li>Secure by default</li>
<li>Scalable for large projects</li>
<li>Includes ORM for database handling</li>
<li>Wide adoption and community support</li>
</ul>
</section>

<section id="features">
<h2>Features of Django</h2>
<hr>
<ul>
<li>MTV (Model-Template-View) architecture</li>
<li>Built-in authentication system</li>
<li>Admin interface for managing data</li>
<li>ORM for easy database manipulation</li>
<li>Support for RESTful APIs and web services</li>
<li>Highly secure and scalable</li>
</ul>
</section>

<section id="syntax">
<h2>Setup & Project Structure</h2>
<hr>
<p>Installing Django:</p>
<pre>
pip install django
</pre>

<p>Creating a project:</p>
<pre>
django-admin startproject myproject
cd myproject
python manage.py runserver
</pre>

<p>Basic project structure:</p>
<ul>
<li><strong>manage.py</strong> – Command-line utility</li>
<li><strong>settings.py</strong> – Project configuration</li>
<li><strong>urls.py</strong> – URL routing</li>
<li><strong>wsgi.py</strong> – Deployment interface</li>
<li><strong>apps/</strong> – Individual Django applications</li>
</ul>
</section>

<section id="commands">
<h2>Common Django Commands</h2>
<hr>
<ul>
<li><strong>python manage.py runserver</strong> – Start development server</li>
<li><strong>python manage.py migrate</strong> – Apply database migrations</li>
<li><strong>python manage.py makemigrations</strong> – Create migrations</li>
<li><strong>python manage.py createsuperuser</strong> – Create admin user</li>
<li><strong>python manage.py shell</strong> – Open Django shell</li>
<li><strong>python manage.py startapp appname</strong> – Create new app</li>
</ul>
</section>

<section id="history">
<h2>Django History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2003</td><td>Initial development at Lawrence Journal-World</td></tr>
<tr><td>2005</td><td>Public release of Django 1.0</td></tr>
<tr><td>2008-2010</td><td>Rapid growth and adoption in web development</td></tr>
<tr><td>Present</td><td>Continuous updates with Django 4.x and beyond</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>