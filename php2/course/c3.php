<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C# Programming Full Tutorial</title>
<style>
/* Reset & Body */
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
    color: #333;
    line-height: 1.6;
}

/* Header */
header {
    background: linear-gradient(135deg, #007acc, #005a9e);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #cce7ff; }

/* Navigation */
nav {
    background: #005a9e;
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
nav a:hover { background: #007acc; color: #fff; }

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
    background: linear-gradient(to right, #007acc, #005a9e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #007acc;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #007acc;
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
    border: 1px solid #007acc;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #007acc; color: #fff; }
tr:hover td { background: #cce7ff; }

/* Footer */
footer {
    background: #005a9e;
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
    <h1>C# Programming Full Tutorial</h1>
    <p>Complete Guide to C# Programming Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#oop">OOP Concepts</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>C# Introduction</h2>
<hr>
<p>C# (pronounced C-Sharp) is a modern, object-oriented programming language developed by Microsoft as part of its .NET initiative. It is widely used for desktop, web, mobile apps, and game development using Unity.</p>

<h3>Why Learn C#?</h3>
<ul>
<li>Develop Windows applications and web apps</li>
<li>Popular for game development with Unity</li>
<li>Supports Object-Oriented Programming (OOP)</li>
<li>Strongly typed and safe</li>
<li>Integration with Microsoft ecosystem and .NET libraries</li>
</ul>
</section>

<section id="features">
<h2>Features of C#</h2>
<hr>
<ul>
<li>Object-Oriented Language</li>
<li>Type-safe and robust</li>
<li>Automatic memory management (Garbage Collector)</li>
<li>Rich .NET framework and libraries</li>
<li>Supports LINQ for data manipulation</li>
<li>Cross-platform development via .NET Core / .NET 6+</li>
</ul>
</section>

<section id="syntax">
<h2>Basic C# Syntax</h2>
<hr>
<p>Example of a simple C# program:</p>
<pre>
using System;

class Program {
    static void Main() {
        Console.WriteLine("Hello, World!");
    }
}
</pre>

<p>Variables and Data Types:</p>
<pre>
using System;

class Program {
    static void Main() {
        int age = 25;
        double salary = 50000.50;
        char grade = 'A';
        Console.WriteLine($"Age: {age}, Salary: {salary}, Grade: {grade}");
    }
}
</pre>

<p>Conditional Statement:</p>
<pre>
using System;

class Program {
    static void Main() {
        int num = 10;
        if(num > 0){
            Console.WriteLine("Positive number");
        } else {
            Console.WriteLine("Non-positive number");
        }
    }
}
</pre>
</section>

<section id="oop">
<h2>OOP Concepts in C#</h2>
<hr>
<ul>
<li><strong>Class & Object</strong> – Fundamental building blocks</li>
<li><strong>Encapsulation</strong> – Hiding data details</li>
<li><strong>Inheritance</strong> – Code reuse</li>
<li><strong>Polymorphism</strong> – Same interface, different behaviors</li>
<li><strong>Abstraction</strong> – Hiding implementation details</li>
</ul>

<p>Example of a simple class:</p>
<pre>
using System;

class Person {
    public string Name;
    public int Age;

    public void Introduce() {
        Console.WriteLine($"Hi, I am {Name}, Age: {Age}");
    }
}

class Program {
    static void Main() {
        Person p = new Person();
        p.Name = "Alice";
        p.Age = 25;
        p.Introduce();
    }
}
</pre>
</section>

<section id="history">
<h2>C# History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2000</td><td>C# announced by Microsoft as part of .NET</td></tr>
<tr><td>2002</td><td>First C# compiler released with .NET Framework 1.0</td></tr>
<tr><td>2005</td><td>C# 2.0 introduced generics and nullable types</td></tr>
<tr><td>2010</td><td>C# 4.0 added dynamic types and optional parameters</td></tr>
<tr><td>2012</td><td>C# 5.0 introduced async and await</td></tr>
<tr><td>2015</td><td>C# 6.0 added string interpolation and expression-bodied members</td></tr>
<tr><td>2017</td><td>C# 7.x added tuples, pattern matching</td></tr>
<tr><td>2020</td><td>C# 9.0 and later: records, init-only properties, top-level statements</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>