<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DSA Full Tutorial</title>
<style>
/* Reset & Body */
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

/* Header */
header {
    background: linear-gradient(135deg, #ff7f50, #ff6347);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffe4e1; }

/* Navigation */
nav {
    background: #ff6347;
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
    background: linear-gradient(to right, #ff7f50, #ff6347);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #ff6347;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #ff6347;
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
    border: 1px solid #ff6347;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #ff6347; color: #fff; }
tr:hover td { background: #ffe4e1; }

/* Footer */
footer {
    background: #ff6347;
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
    <h1>DSA Full Tutorial</h1>
    <p>Complete Guide to Data Structures & Algorithms</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#importance">Importance</a>
    <a href="#types">Types</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>DSA Introduction</h2>
<hr>
<p>Data Structures and Algorithms (DSA) are the fundamental concepts in computer science that allow developers to store, organize, and process data efficiently. They are crucial for solving complex problems effectively.</p>

<h3>Why Learn DSA?</h3>
<ul>
<li>Improves problem-solving skills</li>
<li>Enhances coding efficiency</li>
<li>Essential for technical interviews</li>
<li>Optimizes memory usage and performance</li>
<li>Forms the backbone of advanced programming</li>
</ul>
</section>

<section id="importance">
<h2>Importance of DSA</h2>
<hr>
<ul>
<li>Efficiently manage large datasets</li>
<li>Reduce time complexity of algorithms</li>
<li>Enable optimized and scalable solutions</li>
<li>Required for backend and competitive programming</li>
<li>Forms the foundation for advanced algorithms</li>
</ul>
</section>

<section id="types">
<h2>Types of Data Structures & Algorithms</h2>
<hr>
<ul>
<li><strong>Data Structures:</strong> Arrays, Linked Lists, Stacks, Queues, Trees, Graphs, Hash Tables</li>
<li><strong>Algorithms:</strong> Sorting, Searching, Recursion, Dynamic Programming, Greedy Algorithms, Graph Algorithms</li>
</ul>
</section>

<section id="examples">
<h2>Example Code Snippets</h2>
<hr>
<p>Implementing a simple Stack using Array in JavaScript:</p>
<pre>
class Stack {
    constructor() {
        this.items = [];
    }
    push(element) { this.items.push(element); }
    pop() { return this.items.pop(); }
    peek() { return this.items[this.items.length - 1]; }
    isEmpty() { return this.items.length === 0; }
}
</pre>

<p>Basic algorithm: Linear Search</p>
<pre>
function linearSearch(arr, target) {
    for(let i=0; i<arr.length; i++){
        if(arr[i] === target) return i;
    }
    return -1;
}
</pre>
</section>

<section id="history">
<h2>DSA History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1950s</td><td>Foundations of algorithms developed</td></tr>
<tr><td>1960s</td><td>Data structures formalized in computer science</td></tr>
<tr><td>Present</td><td>DSA forms a critical part of programming & technical interviews</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>