<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Java Full Tutorial</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f7f8;
    color: #333;
}

header {
    background: linear-gradient(135deg, #f44336, #b71c1c);
    color: white;
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
    color: #f44336;
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
    color: #b71c1c;
}

hr {
    border: 0;
    height: 3px;
    background: #f44336;
    width: 50%;
    margin: 20px auto;
}

pre {
    background: #f4f4f4;
    border-left: 5px solid #f44336;
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
    border: 1px solid #f44336;
    padding: 10px;
}

th {
    background: #f44336;
    color: white;
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
    <h1>Java Full Tutorial</h1>
    <p>Complete Guide to Java Programming Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#oop">OOP Concepts</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Java Introduction</h2>
<hr>

<p>Java is a high-level, object-oriented, platform-independent programming language used to build web, desktop, and mobile applications.</p>

<h3>Why Learn Java?</h3>
<ul>
<li>Write Once, Run Anywhere (WORA)</li>
<li>Strong community support</li>
<li>Used in enterprise applications</li>
<li>Used for Android development</li>
<li>High demand in job market</li>
</ul>
</section>

<section id="features">
<h2>Features of Java</h2>
<hr>

<ul>
<li>Object-Oriented</li>
<li>Platform Independent</li>
<li>Secure</li>
<li>Robust</li>
<li>Multithreaded</li>
<li>High Performance</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Java Syntax</h2>
<hr>

<p>Example of a simple Java program:</p>

<pre>
public class Main {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}
</pre>

<p>Explanation:</p>
<ul>
<li><strong>class</strong> – Defines a class</li>
<li><strong>main()</strong> – Entry point of program</li>
<li><strong>System.out.println()</strong> – Prints output</li>
</ul>
</section>

<section id="oop">
<h2>OOP Concepts in Java</h2>
<hr>

<ul>
<li><strong>Encapsulation</strong> – Binding data and methods together</li>
<li><strong>Inheritance</strong> – Acquiring properties from another class</li>
<li><strong>Polymorphism</strong> – One method, many forms</li>
<li><strong>Abstraction</strong> – Hiding internal details</li>
</ul>

<pre>
class Animal {
    void sound() {
        System.out.println("Animal makes sound");
    }
}
</pre>
</section>

<section id="history">
<h2>Java History</h2>
<hr>

<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1995</td><td>Java released by Sun Microsystems</td></tr>
<tr><td>2009</td><td>Oracle acquired Sun Microsystems</td></tr>
<tr><td>2014</td><td>Java 8 released</td></tr>
<tr><td>2017</td><td>Java 9 (Module System)</td></tr>
<tr><td>Present</td><td>Regular updates every 6 months</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>