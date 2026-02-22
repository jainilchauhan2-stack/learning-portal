<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Introduction to Programming Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #d1d9ff; }

nav {
    background: #2575fc;
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
nav a:hover { background: #6a11cb; color: #fff; }

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
    background: linear-gradient(to right, #6a11cb, #2575fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #2575fc;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #2575fc;
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
    border: 1px solid #2575fc;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #2575fc; color: #fff; }
tr:hover td { background: #d1d9ff; }

footer {
    background: #2575fc;
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
    <h1>Introduction to Programming</h1>
    <p>Learn the Basics of Coding and Computational Thinking</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#benefits">Why Learn Programming</a>
    <a href="#languages">Programming Languages</a>
    <a href="#concepts">Core Concepts</a>
    <a href="#examples">Examples</a>
</nav>

<section id="intro">
<h2>What is Programming?</h2>
<hr>
<p>Programming is the process of creating instructions that a computer can follow to perform specific tasks. It involves writing code in programming languages to solve problems and build applications, websites, and software.</p>
</section>

<section id="benefits">
<h2>Why Learn Programming?</h2>
<hr>
<ul>
<li>Develop problem-solving skills</li>
<li>Essential for technology careers</li>
<li>Automate tasks and processes</li>
<li>Foundation for Data Science, AI, and Web Development</li>
<li>High demand in the job market</li>
</ul>
</section>

<section id="languages">
<h2>Popular Programming Languages</h2>
<hr>
<ul>
<li><strong>Python</strong> – Easy to learn, great for beginners and data science</li>
<li><strong>JavaScript</strong> – Core language for web development</li>
<li><strong>Java</strong> – Object-oriented, widely used in enterprise software</li>
<li><strong>C/C++</strong> – Foundation languages, fast and efficient</li>
<li><strong>R</strong> – Data analysis and statistics</li>
<li><strong>SQL</strong> – Database management</li>
</ul>
</section>

<section id="concepts">
<h2>Core Programming Concepts</h2>
<hr>
<ul>
<li>Variables and Data Types</li>
<li>Conditional Statements (if/else)</li>
<li>Loops (for, while)</li>
<li>Functions and Methods</li>
<li>Objects and Classes (OOP)</li>
<li>Arrays and Lists</li>
<li>Error Handling and Debugging</li>
</ul>
</section>

<section id="examples">
<h2>Example Code</h2>
<hr>
<p>Python example: printing numbers from 1 to 5</p>
<pre>
for i in range(1, 6):
    print("Number:", i)
</pre>

<p>JavaScript example: adding two numbers</p>
<pre>
function add(a, b) {
    return a + b;
}
console.log(add(5, 3));
</pre>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>