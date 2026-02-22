<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS Full Tutorial</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f7f8;
    color: #333;
}

header {
    background: linear-gradient(135deg, #2196F3, #0d47a1);
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
    color: #2196F3;
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
    color: #0d47a1;
}

hr {
    border: 0;
    height: 3px;
    background: #2196F3;
    width: 50%;
    margin: 20px auto;
}

pre {
    background: #f4f4f4;
    border-left: 5px solid #2196F3;
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
    border: 1px solid #2196F3;
    padding: 10px;
}

th {
    background: #2196F3;
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
    <h1>CSS Full Tutorial</h1>
    <p>Complete Guide to Cascading Style Sheets</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#types">Types of CSS</a>
    <a href="#selectors">Selectors</a>
    <a href="#boxmodel">Box Model</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>CSS Introduction</h2>
<hr>

<p>CSS (Cascading Style Sheets) is used to control the visual presentation of web pages. 
It allows developers to style HTML elements with colors, layouts, fonts, spacing, and animations.</p>

<h3>Why Use CSS?</h3>
<ul>
<li>Improves website design and layout</li>
<li>Separates content (HTML) from styling</li>
<li>Makes websites responsive</li>
<li>Saves development time</li>
</ul>
</section>

<section id="types">
<h2>Types of CSS</h2>
<hr>

<h3>1. Inline CSS</h3>
<pre>
&lt;p style="color:red;"&gt;This is red text&lt;/p&gt;
</pre>

<h3>2. Internal CSS</h3>
<pre>
&lt;style&gt;
p { color: blue; }
&lt;/style&gt;
</pre>

<h3>3. External CSS</h3>
<pre>
&lt;link rel="stylesheet" href="style.css"&gt;
</pre>

<p>External CSS is recommended for large projects.</p>
</section>

<section id="selectors">
<h2>CSS Selectors</h2>
<hr>

<ul>
<li><strong>Element Selector:</strong> p { }</li>
<li><strong>ID Selector:</strong> #idName { }</li>
<li><strong>Class Selector:</strong> .className { }</li>
<li><strong>Group Selector:</strong> h1, h2, p { }</li>
<li><strong>Universal Selector:</strong> * { }</li>
</ul>

<pre>
#box {
    background: yellow;
    padding: 20px;
}
</pre>
</section>

<section id="boxmodel">
<h2>CSS Box Model</h2>
<hr>

<p>Every HTML element is a box consisting of:</p>

<ul>
<li>Content</li>
<li>Padding</li>
<li>Border</li>
<li>Margin</li>
</ul>

<pre>
div {
    width: 200px;
    padding: 20px;
    border: 5px solid black;
    margin: 10px;
}
</pre>
</section>

<section id="history">
<h2>CSS History</h2>
<hr>

<table>
<tr><th>Year</th><th>Version</th></tr>
<tr><td>1996</td><td>CSS1</td></tr>
<tr><td>1998</td><td>CSS2</td></tr>
<tr><td>2011</td><td>CSS3</td></tr>
<tr><td>Present</td><td>CSS4 (Modules)</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>