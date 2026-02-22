<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MySQL Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #f29191, #e74c3c);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffe5e5; }

nav {
    background: #e74c3c;
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
nav a:hover { background: #f29191; color: #fff; }

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
    background: linear-gradient(to right, #f29191, #e74c3c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #f29191;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #f29191;
    padding: 15px;
    overflow-x: auto;
    border-radius: 8px;
    font-family: 'Courier New', monospace;
    box-shadow: inset 0 0 5px rgba(0,0,0,0.05);
}

ul { padding-left: 25px; margin-top: 10px; }

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
th, td {
    border: 1px solid #f29191;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #f29191; color: #fff; }
tr:hover td { background: #ffcccc; }

footer {
    background: #e74c3c;
    color: #fff;
    text-align: center;
    padding: 25px 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
}

html { scroll-behavior: smooth; }
</style>
</head>
<body>

<header>
    <h1>MySQL Full Tutorial</h1>
    <p>Complete Guide to MySQL Database Management</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#commands">MySQL Commands</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>MySQL Introduction</h2>
<hr>
<p>MySQL is an open-source relational database management system (RDBMS) based on Structured Query Language (SQL). It is widely used for storing and managing data in web applications and software solutions.</p>

<h3>Why Learn MySQL?</h3>
<ul>
<li>Essential for database-driven applications</li>
<li>Popular in backend development</li>
<li>Used in web apps, data analytics, and enterprise systems</li>
<li>High demand in software industry</li>
<li>Supports multiple platforms</li>
</ul>
</section>

<section id="features">
<h2>Features of MySQL</h2>
<hr>
<ul>
<li>Open-source and free</li>
<li>High performance and reliability</li>
<li>Supports complex queries and transactions</li>
<li>Scalable and cross-platform</li>
<li>Strong data security and integrity</li>
<li>Wide community support</li>
</ul>
</section>

<section id="syntax">
<h2>Basic MySQL Syntax</h2>
<hr>
<p>Example of selecting data from a table:</p>
<pre>
SELECT * FROM customers;
</pre>

<p>Creating a database and table:</p>
<pre>
CREATE DATABASE mydb;

USE mydb;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    email VARCHAR(50)
);
</pre>

<p>Inserting data:</p>
<pre>
INSERT INTO users (name, email)
VALUES ('John Doe', 'john@example.com');
</pre>
</section>

<section id="commands">
<h2>Important MySQL Commands</h2>
<hr>
<ul>
<li><strong>SELECT</strong> – Retrieve data</li>
<li><strong>INSERT</strong> – Add new data</li>
<li><strong>UPDATE</strong> – Modify existing data</li>
<li><strong>DELETE</strong> – Remove data</li>
<li><strong>CREATE</strong> – Create database/table</li>
<li><strong>DROP</strong> – Delete database/table</li>
<li><strong>ALTER</strong> – Modify table structure</li>
<li><strong>GRANT/REVOKE</strong> – Manage user permissions</li>
</ul>
</section>

<section id="history">
<h2>MySQL History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1995</td><td>MySQL founded by Michael Widenius, David Axmark, and Allan Larsson</td></tr>
<tr><td>2000</td><td>Acquired by MySQL AB</td></tr>
<tr><td>2008</td><td>Sun Microsystems acquired MySQL AB</td></tr>
<tr><td>2010</td><td>Oracle Corporation acquired Sun Microsystems</td></tr>
<tr><td>Present</td><td>Continuous updates and widely used in web and enterprise applications</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>