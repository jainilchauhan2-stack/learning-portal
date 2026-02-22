<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C Programming Full Tutorial</title>
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
    background: linear-gradient(135deg, #007acc, #004f80);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #cce6ff; }

/* Navigation */
nav {
    background: #004f80;
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
    background: linear-gradient(to right, #007acc, #00cfff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #00cfff;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code */
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
tr:hover td { background: #cce6ff; }

/* Footer */
footer {
    background: #004f80;
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
    <h1>C Programming Full Tutorial</h1>
    <p>Complete Guide to C Programming Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#functions">Important Functions</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>C Programming Introduction</h2>
<hr>
<p>C is a powerful general-purpose programming language developed in the early 1970s. It is widely used for system programming, embedded systems, and building applications.</p>
<h3>Why Learn C?</h3>
<ul>
<li>Foundation for many other languages (C++, C#, Java)</li>
<li>High performance and efficiency</li>
<li>Works for system programming</li>
<li>Essential for understanding data structures and algorithms</li>
<li>Widely used in industry</li>
</ul>
</section>

<section id="features">
<h2>Features of C</h2>
<hr>
<ul>
<li>Procedural Programming Language</li>
<li>Fast and Efficient</li>
<li>Low-level memory access</li>
<li>Portability across platforms</li>
<li>Rich set of operators</li>
<li>Structured Programming support</li>
</ul>
</section>

<section id="syntax">
<h2>Basic C Syntax</h2>
<hr>
<p>Example of a simple C program:</p>
<pre>
#include &lt;stdio.h&gt;

int main() {
    printf("Hello, World!\n");
    return 0;
}
</pre>

<p>Variables and Data Types:</p>
<pre>
#include &lt;stdio.h&gt;

int main() {
    int age = 25;
    float salary = 55000.50;
    char grade = 'A';
    printf("Age: %d, Salary: %.2f, Grade: %c", age, salary, grade);
    return 0;
}
</pre>

<p>Conditional Statement:</p>
<pre>
#include &lt;stdio.h&gt;

int main() {
    int num = 10;
    if(num &gt; 0){
        printf("Positive number");
    } else {
        printf("Non-positive number");
    }
    return 0;
}
</pre>
</section>

<section id="functions">
<h2>Important C Functions</h2>
<hr>
<ul>
<li><strong>printf()</strong> – Output text</li>
<li><strong>scanf()</strong> – Input data</li>
<li><strong>getchar()</strong> – Read single character</li>
<li><strong>putchar()</strong> – Write single character</li>
<li><strong>strlen()</strong> – String length</li>
<li><strong>strcpy()</strong> – Copy string</li>
<li><strong>malloc()/free()</strong> – Dynamic memory management</li>
</ul>
</section>

<section id="history">
<h2>C Programming History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1972</td><td>Developed by Dennis Ritchie at Bell Labs</td></tr>
<tr><td>1978</td><td>First official book: "The C Programming Language"</td></tr>
<tr><td>1989</td><td>ANSI standardization (C89)</td></tr>
<tr><td>1990</td><td>ISO standardization (C90)</td></tr>
<tr><td>1999</td><td>C99 standard introduced new features</td></tr>
<tr><td>2011</td><td>C11 standard introduced modern updates</td></tr>
<tr><td>2018</td><td>C18 standard finalized</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>