<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML & CSS Full Tutorial</title>
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
    background: linear-gradient(135deg, #ff7e5f, #feb47b);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffe5d1; }

/* Navigation */
nav {
    background: #feb47b;
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
nav a:hover { background: #ff7e5f; color: #fff; }

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
    background: linear-gradient(to right, #ff7e5f, #feb47b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #feb47b;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #feb47b;
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
    border: 1px solid #feb47b;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #feb47b; color: #fff; }
tr:hover td { background: #ffe5d1; }

/* Footer */
footer {
    background: #feb47b;
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
    <h1>HTML & CSS Tutorial</h1>
    <p>Learn the building blocks of the web</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#html">HTML Basics</a>
    <a href="#css">CSS Basics</a>
    <a href="#layout">Layout & Design</a>
    <a href="#examples">Examples</a>
</nav>

<section id="intro">
<h2>Introduction to HTML & CSS</h2>
<hr>
<p>HTML (HyperText Markup Language) is used to structure the content on the web, while CSS (Cascading Style Sheets) is used to style and layout HTML elements. Together, they form the foundation of web development.</p>
</section>

<section id="html">
<h2>HTML Basics</h2>
<hr>
<ul>
<li>HTML uses tags to define elements: &lt;h1&gt;, &lt;p&gt;, &lt;a&gt;, &lt;div&gt;, etc.</li>
<li>Tags usually come in pairs: &lt;tag&gt; content &lt;/tag&gt;</li>
<li>HTML structure example:</li>
<pre>
<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>This is a paragraph.</p>
</body>
</html>
</pre>
</ul>
</section>

<section id="css">
<h2>CSS Basics</h2>
<hr>
<ul>
<li>CSS styles HTML elements with properties like color, font-size, and margin.</li>
<li>CSS can be inline, internal (inside &lt;style&gt;), or external (.css file)</li>
<li>Example of CSS:</li>
<pre>
p {
    color: blue;
    font-size: 18px;
    line-height: 1.5;
}
</pre>
</ul>
</section>

<section id="layout">
<h2>Layout & Design</h2>
<hr>
<p>CSS allows you to create visually appealing layouts using:</p>
<ul>
<li>Box Model (margin, border, padding, content)</li>
<li>Flexbox for flexible layouts</li>
<li>Grid for advanced layouts</li>
<li>Media queries for responsive design</li>
</ul>
</section>

<section id="examples">
<h2>Example Code</h2>
<hr>
<p>HTML & CSS example:</p>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;style&gt;
  h1 { color: red; }
  p { font-size: 16px; }
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;Hello World!&lt;/h1&gt;
&lt;p&gt;This is a styled paragraph.&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>