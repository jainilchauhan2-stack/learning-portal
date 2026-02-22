<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SASS Full Tutorial</title>
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
    background: linear-gradient(135deg, #8e44ad, #5e3370);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #d7bde2; }

/* Navigation */
nav {
    background: #5e3370;
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
nav a:hover { background: #8e44ad; color: #fff; }

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
    background: linear-gradient(to right, #8e44ad, #5e3370);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #5e3370;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #5e3370;
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
    border: 1px solid #5e3370;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #5e3370; color: #fff; }
tr:hover td { background: #d7bde2; }

/* Footer */
footer {
    background: #5e3370;
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
    <h1>SASS Full Tutorial</h1>
    <p>Complete Guide to SASS (CSS Preprocessor)</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Introduction to SASS</h2>
<hr>
<p>SASS (Syntactically Awesome Stylesheets) is a CSS preprocessor that extends CSS with features like variables, nested rules, mixins, and functions. It helps write cleaner, maintainable, and reusable stylesheets.</p>

<h3>Why Learn SASS?</h3>
<ul>
<li>Write more organized CSS</li>
<li>Use variables and reusable code</li>
<li>Supports nesting for readability</li>
<li>Reduces repetition with mixins and functions</li>
<li>Compatible with all CSS frameworks</li>
</ul>
</section>

<section id="features">
<h2>Features of SASS</h2>
<hr>
<ul>
<li>Variables for colors, fonts, and values</li>
<li>Nesting to reflect HTML structure</li>
<li>Partials and Import for modular stylesheets</li>
<li>Mixins and Functions to reuse code</li>
<li>Inheritance with @extend</li>
<li>Compatible with plain CSS</li>
</ul>
</section>

<section id="syntax">
<h2>Basic SASS Syntax</h2>
<hr>

<p>Variables:</p>
<pre>
$primary-color: #5e3370;
$font-stack: Helvetica, sans-serif;

body {
  font: 100% $font-stack;
  color: $primary-color;
}
</pre>

<p>Nesting:</p>
<pre>
nav {
  ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  li { display: inline-block; }
}
</pre>
</section>

<section id="examples">
<h2>Example Code Snippets</h2>
<hr>

<p>Using a Mixin:</p>
<pre>
@mixin border-radius($radius) {
  -webkit-border-radius: $radius;
     -moz-border-radius: $radius;
          border-radius: $radius;
}

.button {
  @include border-radius(10px);
}
</pre>
</section>

<section id="history">
<h2>SASS History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2006</td><td>SASS first released by Hampton Catlin</td></tr>
<tr><td>2007</td><td>CSS enhancements like nesting and variables added</td></tr>
<tr><td>2010</td><td>SASS became widely adopted</td></tr>
<tr><td>Present</td><td>Used in modern web development with frameworks like Bootstrap</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>