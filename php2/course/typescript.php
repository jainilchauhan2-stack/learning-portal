<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TypeScript Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #4caf50, #388e3c);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #dcedc8; }

nav {
    background: #388e3c;
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
nav a:hover { background: #4caf50; color: #fff; }

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
    background: linear-gradient(to right, #4caf50, #388e3c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #388e3c;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #388e3c;
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
    border: 1px solid #388e3c;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #388e3c; color: #fff; }
tr:hover td { background: #dcedc8; }

 footer {
    background: #388e3c;
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
    <h1>TypeScript Full Tutorial</h1>
    <p>Complete Guide to TypeScript Programming Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#types">Data Types</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>TypeScript Introduction</h2>
<hr>
<p>TypeScript is a strongly typed superset of JavaScript that compiles to plain JavaScript. It adds static types and object-oriented features to JavaScript, making code easier to maintain and less error-prone.</p>

<h3>Why Learn TypeScript?</h3>
<ul>
<li>Improves code quality with static typing</li>
<li>Supports modern JavaScript features</li>
<li>Enhances developer productivity</li>
<li>Widely used in large-scale applications</li>
<li>Integrates well with frameworks like Angular, React, and Node.js</li>
</ul>
</section>

<section id="features">
<h2>Features of TypeScript</h2>
<hr>
<ul>
<li>Static Typing</li>
<li>Interfaces and Classes</li>
<li>Type Inference</li>
<li>Enhanced Code Navigation & Autocomplete</li>
<li>Supports Modern JavaScript</li>
<li>Open Source and Maintained by Microsoft</li>
</ul>
</section>

<section id="types">
<h2>TypeScript Data Types</h2>
<hr>
<ul>
<li><strong>Basic Types:</strong> string, number, boolean, null, undefined</li>
<li><strong>Array:</strong> number[], string[]</li>
<li><strong>Tuple:</strong> [string, number]</li>
<li><strong>Enum:</strong> Named constants</li>
<li><strong>Any:</strong> Dynamic type</li>
<li><strong>Void:</strong> Function with no return value</li>
</ul>
</section>

<section id="examples">
<h2>Example Code Snippets</h2>
<hr>

<p>Basic TypeScript Example:</p>
<pre>
function greet(name: string): string {
    return 'Hello, ' + name;
}
console.log(greet('Alice'));
</pre>

<p>Using Interface:</p>
<pre>
interface User {
    id: number;
    name: string;
    isActive: boolean;
}

const user: User = { id: 1, name: 'Bob', isActive: true };
console.log(user);
</pre>
</section>

<section id="history">
<h2>TypeScript History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2012</td><td>TypeScript first released by Microsoft</td></tr>
<tr><td>2014</td><td>TypeScript 1.0 released</td></tr>
<tr><td>2016</td><td>TypeScript 2.0 with strict null checks</td></tr>
<tr><td>Present</td><td>Widely adopted for modern web applications</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>