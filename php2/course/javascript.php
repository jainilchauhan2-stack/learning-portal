<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JavaScript Full Tutorial</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f7f8;
    color: #333;
}

header {
    background: linear-gradient(135deg, #f7df1e, #f0c000);
    color: #000;
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
    color: #f7df1e;
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
    color: #b58900;
}

hr {
    border: 0;
    height: 3px;
    background: #f7df1e;
    width: 50%;
    margin: 20px auto;
}

pre {
    background: #f4f4f4;
    border-left: 5px solid #f7df1e;
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
    border: 1px solid #f7df1e;
    padding: 10px;
}

th {
    background: #f7df1e;
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
    <h1>JavaScript Full Tutorial</h1>
    <p>Complete Guide to JavaScript Programming</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#dom">DOM Manipulation</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>JavaScript Introduction</h2>
<hr>

<p>JavaScript is a high-level, interpreted programming language used to create dynamic and interactive web pages. It runs in the browser and allows developers to control webpage behavior.</p>

<h3>Why Learn JavaScript?</h3>
<ul>
<li>Makes websites interactive</li>
<li>Works with HTML and CSS</li>
<li>Used for frontend and backend (Node.js)</li>
<li>High demand in web development</li>
<li>Large developer community</li>
</ul>
</section>

<section id="features">
<h2>Features of JavaScript</h2>
<hr>

<ul>
<li>Lightweight and Fast</li>
<li>Interpreted Language</li>
<li>Event-Driven</li>
<li>Object-Based</li>
<li>Cross-Platform</li>
<li>Supports Functional Programming</li>
</ul>
</section>

<section id="syntax">
<h2>Basic JavaScript Syntax</h2>
<hr>

<p>Example of a simple JavaScript program:</p>

<pre>
&lt;script&gt;
    alert("Hello, World!");
&lt;/script&gt;
</pre>

<p>Variables Example:</p>

<pre>
let name = "John";
const age = 25;

console.log(name);
console.log(age);
</pre>

<p>Functions Example:</p>

<pre>
function greet() {
    console.log("Welcome to JavaScript!");
}

greet();
</pre>
</section>

<section id="dom">
<h2>DOM Manipulation</h2>
<hr>

<p>JavaScript can change HTML content using the DOM (Document Object Model).</p>

<pre>
document.getElementById("demo").innerHTML = "Hello JavaScript!";
</pre>

<p>Example Button:</p>

<pre>
&lt;button onclick="changeText()"&gt;Click Me&lt;/button&gt;

&lt;script&gt;
function changeText() {
    document.getElementById("demo").innerHTML = "Text Changed!";
}
&lt;/script&gt;
</pre>
</section>

<section id="history">
<h2>JavaScript History</h2>
<hr>

<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1995</td><td>Created by Brendan Eich</td></tr>
<tr><td>1997</td><td>Standardized as ECMAScript</td></tr>
<tr><td>2009</td><td>Node.js released</td></tr>
<tr><td>2015</td><td>ES6 (Major update)</td></tr>
<tr><td>Present</td><td>Annual ECMAScript updates</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>