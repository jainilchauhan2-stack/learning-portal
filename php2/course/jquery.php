<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery Full Tutorial</title>
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
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #d0e7fb; }

/* Navigation */
nav {
    background: #2980b9;
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
nav a:hover { background: #3498db; color: #fff; }

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
    background: linear-gradient(to right, #3498db, #2980b9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #3498db;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #3498db;
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
    border: 1px solid #3498db;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #3498db; color: #fff; }
tr:hover td { background: #cce6ff; }

/* Footer */
footer {
    background: #2980b9;
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
    <h1>jQuery Full Tutorial</h1>
    <p>Complete Guide to jQuery JavaScript Library</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#commands">jQuery Commands</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>jQuery Introduction</h2>
<hr>
<p>jQuery is a fast, small, and feature-rich JavaScript library. It simplifies HTML document traversal, event handling, animation, and Ajax interactions for faster web development.</p>

<h3>Why Learn jQuery?</h3>
<ul>
<li>Easy DOM manipulation</li>
<li>Cross-browser compatibility</li>
<li>Simplifies event handling and animations</li>
<li>Reduces development time</li>
<li>Extensive plugins and community support</li>
</ul>
</section>

<section id="features">
<h2>Features of jQuery</h2>
<hr>
<ul>
<li>Lightweight and fast</li>
<li>Cross-browser support</li>
<li>DOM manipulation simplified</li>
<li>AJAX support for dynamic content</li>
<li>Animation and effects</li>
<li>Plugin architecture for extended functionality</li>
</ul>
</section>

<section id="syntax">
<h2>Basic jQuery Syntax</h2>
<hr>
<p>Selecting elements and applying a function:</p>
<pre>
$(document).ready(function(){
    $("button").click(function(){
        $("p").hide();
    });
});
</pre>

<p>Changing CSS dynamically:</p>
<pre>
$("#myDiv").css("color", "red");
</pre>

<p>Adding HTML content:</p>
<pre>
$("#myDiv").html("&lt;p&gt;Hello World&lt;/p&gt;");
</pre>
</section>

<section id="commands">
<h2>Important jQuery Commands</h2>
<hr>
<ul>
<li><strong>$()</strong> – Select elements</li>
<li><strong>.click()</strong> – Add click event</li>
<li><strong>.hide()</strong> / <strong>.show()</strong> – Show/Hide elements</li>
<li><strong>.css()</strong> – Modify styles</li>
<li><strong>.html()</strong> / <strong>.text()</strong> – Change content</li>
<li><strong>.fadeIn()</strong> / <strong>.fadeOut()</strong> – Animations</li>
<li><strong>.ajax()</strong> – Make AJAX requests</li>
</ul>
</section>

<section id="history">
<h2>jQuery History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2006</td><td>jQuery founded by John Resig</td></tr>
<tr><td>2008</td><td>jQuery 1.0 released</td></tr>
<tr><td>2010</td><td>jQuery became most popular JS library</td></tr>
<tr><td>2016</td><td>jQuery 3.0 released with modern improvements</td></tr>
<tr><td>Present</td><td>Widely used in web projects, with extensive plugins</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>