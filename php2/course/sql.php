<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SQL Full Tutorial</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f7f8;
    color: #333;
}

header {
    background: linear-gradient(135deg, #00758f, #005f6b);
    color: #fff;
    padding: 40px 20px;
    text-align: center;
}

nav {
    background-color: #333;
    text-align: center;
    padding: 15px 0;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 20px;
    font-weight: bold;
}

nav a:hover {
    color: #00c4cc;
}

section {
    background: white;
    margin: 30px auto;
    padding: 40px;
    border-radius: 12px;
    max-width: 950px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

section h2 {
    text-align: center;
    color: #00758f;
}

hr {
    border: 0;
    height: 3px;
    background: #00c4cc;
    width: 50%;
    margin: 20px auto;
}

pre {
    background: #f4f4f4;
    border-left: 5px solid #00c4cc;
    padding: 15px;
    overflow-x: auto;
}

ul {
    padding-left: 25px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #00c4cc;
    padding: 10px;
}

th {
    background: #00c4cc;
    color: #000;
}

footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 30px;
}

html {
    scroll-behavior: smooth;
}
</style>
</head>

<body>

<header>
    <h1>SQL Full Tutorial</h1>
    <p>Complete Guide to Structured Query Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#commands">SQL Commands</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>SQL Introduction</h2>
<hr>

<p>SQL (Structured Query Language) is a standard language used to manage and manipulate relational databases. It allows users to create, retrieve, update, and delete data stored in database systems.</p>

<h3>Why Learn SQL?</h3>
<ul>
<li>Essential for database management</li>
<li>Used in backend development</li>
<li>Required for data analysis</li>
<li>Works with major database systems</li>
<li>High demand in tech industry</li>
</ul>
</section>

<section id="features">
<h2>Features of SQL</h2>
<hr>

<ul>
<li>Easy to Learn and Use</li>
<li>Standardized Language</li>
<li>High Performance</li>
<li>Supports Complex Queries</li>
<li>Data Security and Integrity</li>
<li>Portable Across Systems</li>
</ul>
</section>

<section id="syntax">
<h2>Basic SQL Syntax</h2>
<hr>

<p>Example of selecting data:</p>

<pre>
SELECT * FROM customers;
</pre>

<p>Creating a table:</p>

<pre>
CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    age INT
);
</pre>

<p>Inserting data:</p>

<pre>
INSERT INTO users (id, name, age)
VALUES (1, 'John', 25);
</pre>
</section>

<section id="commands">
<h2>Important SQL Commands</h2>
<hr>

<ul>
<li><strong>SELECT</strong> – Retrieve data</li>
<li><strong>INSERT</strong> – Add new data</li>
<li><strong>UPDATE</strong> – Modify existing data</li>
<li><strong>DELETE</strong> – Remove data</li>
<li><strong>CREATE</strong> – Create database/table</li>
<li><strong>DROP</strong> – Delete database/table</li>
<li><strong>ALTER</strong> – Modify table structure</li>
</ul>
</section>

<section id="history">
<h2>SQL History</h2>
<hr>

<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1970</td><td>Relational model proposed by Edgar F. Codd</td></tr>
<tr><td>1974</td><td>SQL developed at IBM</td></tr>
<tr><td>1986</td><td>Standardized by ANSI</td></tr>
<tr><td>1987</td><td>ISO standardization</td></tr>
<tr><td>Present</td><td>Continuous improvements and extensions</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>