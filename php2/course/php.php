<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Full Tutorial</title>
<style>
/* Basic Reset */
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }

/* Body */
body {
    background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
    color: #333;
    line-height: 1.6;
}

/* Header */
header {
    background: linear-gradient(135deg, #6e00ff, #4b0082);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #e0cfff; }

/* Navigation */
nav {
    background: #4b0082;
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
nav a:hover { background: #6e00ff; color: #fff; }

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
    background: linear-gradient(to right, #6e00ff, #c77aff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #c77aff;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code */
pre {
    background: #f0f4f8;
    border-left: 5px solid #6e00ff;
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
    border: 1px solid #6e00ff;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #6e00ff; color: #fff; }
tr:hover td { background: #e9d6ff; }

/* Footer */
footer {
    background: #4b0082;
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
    <h1>PHP Full Tutorial</h1>
    <p>Complete Guide to PHP Programming Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#commands">PHP Functions</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>PHP Introduction</h2>
<hr>
<p>PHP (Hypertext Preprocessor) is a popular open-source server-side scripting language used to develop dynamic web pages and applications. It can be embedded into HTML and works with databases like MySQL.</p>
<h3>Why Learn PHP?</h3>
<ul>
<li>Widely used for web development</li>
<li>Easy to learn for beginners</li>
<li>Works seamlessly with databases</li>
<li>Open-source and free</li>
<li>Large community support</li>
</ul>
</section>

<section id="features">
<h2>Features of PHP</h2>
<hr>
<ul>
<li>Open Source and Free</li>
<li>Server-side Scripting</li>
<li>Cross-Platform</li>
<li>Supports a wide range of databases</li>
<li>Easy integration with HTML, CSS, and JavaScript</li>
<li>Large number of built-in functions</li>
</ul>
</section>

<section id="syntax">
<h2>Basic PHP Syntax</h2>
<hr>
<p>Example of a PHP script:</p>
<pre>
&lt;?php
echo "Hello, World!";
?&gt;
</pre>

<p>Variables:</p>
<pre>
&lt;?php
$greeting = "Hello";
$name = "John";
echo $greeting . " " . $name;
?&gt;
</pre>

<p>Conditional statement:</p>
<pre>
&lt;?php
$age = 18;
if($age &gt;= 18){
    echo "Adult";
} else {
    echo "Minor";
}
?&gt;
</pre>
</section>

<section id="commands">
<h2>Important PHP Functions</h2>
<hr>
<ul>
<li><strong>echo()</strong> – Output data</li>
<li><strong>print()</strong> – Print a string</li>
<li><strong>isset()</strong> – Check if variable is set</li>
<li><strong>empty()</strong> – Check if variable is empty</li>
<li><strong>count()</strong> – Count array elements</li>
<li><strong>include()/require()</strong> – Include files</li>
<li><strong>date()</strong> – Display date and time</li>
</ul>
</section>

<section id="history">
<h2>PHP History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1994</td><td>Created by Rasmus Lerdorf</td></tr>
<tr><td>1995</td><td>First official PHP release</td></tr>
<tr><td>1997</td><td>PHP/FI 2.0 released</td></tr>
<tr><td>1998</td><td>PHP 3 released</td></tr>
<tr><td>2000</td><td>PHP 4 released</td></tr>
<tr><td>2004</td><td>PHP 5 released</td></tr>
<tr><td>2015</td><td>PHP 7 released</td></tr>
<tr><td>2020</td><td>PHP 8 released</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>