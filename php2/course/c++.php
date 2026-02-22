<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C++ Programming Full Tutorial</title>
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
    background: linear-gradient(135deg, #ff7f50, #ff4500);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffe5d4; }

/* Navigation */
nav {
    background: #ff4500;
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
nav a:hover { background: #ff7f50; color: #fff; }

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
    background: linear-gradient(to right, #ff7f50, #ff4500);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #ff7f50;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #ff4500;
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
    border: 1px solid #ff4500;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #ff4500; color: #fff; }
tr:hover td { background: #ffd1b3; }

/* Footer */
footer {
    background: #ff4500;
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
    <h1>C++ Programming Full Tutorial</h1>
    <p>Complete Guide to C++ Programming Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#oop">OOP Concepts</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>C++ Introduction</h2>
<hr>
<p>C++ is a high-level, general-purpose programming language created by Bjarne Stroustrup in 1985. It extends C with object-oriented features and is widely used for system/software development, games, and real-time applications.</p>
<h3>Why Learn C++?</h3>
<ul>
<li>Foundation for modern programming</li>
<li>High-performance applications</li>
<li>Supports Object-Oriented Programming (OOP)</li>
<li>Widely used in competitive programming</li>
<li>Strong library support (STL)</li>
</ul>
</section>

<section id="features">
<h2>Features of C++</h2>
<hr>
<ul>
<li>Procedural and Object-Oriented</li>
<li>High performance and efficient</li>
<li>Rich Standard Template Library (STL)</li>
<li>Memory management control</li>
<li>Portability across platforms</li>
<li>Supports generic programming (templates)</li>
</ul>
</section>

<section id="syntax">
<h2>Basic C++ Syntax</h2>
<hr>
<p>Example of a simple C++ program:</p>
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    cout &lt;&lt; "Hello, World!" &lt;&lt; endl;
    return 0;
}
</pre>

<p>Variables and Data Types:</p>
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int age = 25;
    double salary = 55000.50;
    char grade = 'A';
    cout &lt;&lt; "Age: " &lt;&lt; age &lt;&lt; ", Salary: " &lt;&lt; salary &lt;&lt; ", Grade: " &lt;&lt; grade &lt;&lt; endl;
    return 0;
}
</pre>

<p>Conditional Statement:</p>
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int num = 10;
    if(num &gt; 0){
        cout &lt;&lt; "Positive number" &lt;&lt; endl;
    } else {
        cout &lt;&lt; "Non-positive number" &lt;&lt; endl;
    }
    return 0;
}
</pre>
</section>

<section id="oop">
<h2>OOP Concepts in C++</h2>
<hr>
<ul>
<li><strong>Class & Object</strong> – Core building blocks</li>
<li><strong>Encapsulation</strong> – Data hiding</li>
<li><strong>Inheritance</strong> – Code reuse</li>
<li><strong>Polymorphism</strong> – Same interface, different behavior</li>
<li><strong>Abstraction</strong> – Hiding implementation details</li>
</ul>

<p>Example of a simple class:</p>
<pre>
#include &lt;iostream&gt;
using namespace std;

class Person {
public:
    string name;
    int age;
    void introduce() {
        cout &lt;&lt; "Hi, I am " &lt;&lt; name &lt;&lt; ", Age: " &lt;&lt; age &lt;&lt; endl;
    }
};

int main() {
    Person p;
    p.name = "Alice";
    p.age = 25;
    p.introduce();
    return 0;
}
</pre>
</section>

<section id="history">
<h2>C++ History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1983</td><td>Started as "C with Classes" by Bjarne Stroustrup</td></tr>
<tr><td>1985</td><td>First C++ compiler released</td></tr>
<tr><td>1990</td><td>Annotated C++ Reference Manual published</td></tr>
<tr><td>1998</td><td>ISO standard C++98 released</td></tr>
<tr><td>2003</td><td>C++03 standard released</td></tr>
<tr><td>2011</td><td>C++11 standard introduced modern features</td></tr>
<tr><td>2017</td><td>C++17 standard released</td></tr>
<tr><td>2020</td><td>C++20 standard released</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>