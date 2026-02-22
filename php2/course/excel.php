<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Excel Full Tutorial</title>
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
    background: linear-gradient(135deg, #1e8449, #145a32);
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
    background: #145a32;
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
nav a:hover { background: #1e8449; color: #fff; }

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
    background: linear-gradient(to right, #1e8449, #145a32);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #1e8449;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #1e8449;
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
    border: 1px solid #1e8449;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #1e8449; color: #fff; }
tr:hover td { background: #d1f2eb; }

/* Footer */
footer {
    background: #145a32;
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
    <h1>Excel Full Tutorial</h1>
    <p>Complete Guide to Microsoft Excel</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Operations</a>
    <a href="#commands">Excel Commands</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Excel Introduction</h2>
<hr>
<p>Microsoft Excel is a powerful spreadsheet application used to organize, format, and calculate data with formulas. It is widely used for data analysis, accounting, project management, and reporting.</p>

<h3>Why Learn Excel?</h3>
<ul>
<li>Essential for office work and data management</li>
<li>Used in finance, accounting, and analytics</li>
<li>Supports powerful functions and formulas</li>
<li>Helps in data visualization with charts and graphs</li>
<li>High demand in professional environments</li>
</ul>
</section>

<section id="features">
<h2>Features of Excel</h2>
<hr>
<ul>
<li>Easy to use interface with grids and cells</li>
<li>Supports formulas, functions, and calculations</li>
<li>Charts and graphs for data visualization</li>
<li>Pivot tables for advanced analysis</li>
<li>Data validation and conditional formatting</li>
<li>Supports macros and automation with VBA</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Excel Operations</h2>
<hr>
<p>Entering data into cells:</p>
<pre>
A1: Name
B1: Age
A2: John
B2: 25
</pre>

<p>Using formulas:</p>
<pre>
=SUM(B2:B10)      // Adds numbers in range B2 to B10
=AVERAGE(B2:B10)  // Calculates average of numbers
=IF(A2="John", 100, 0) // Conditional formula
</pre>

<p>Creating charts:</p>
<pre>
// Select data -> Insert -> Chart (Column, Line, Pie, etc.)
</pre>
</section>

<section id="commands">
<h2>Important Excel Commands</h2>
<hr>
<ul>
<li><strong>Ctrl + C / Ctrl + V</strong> – Copy / Paste</li>
<li><strong>Ctrl + Z</strong> – Undo action</li>
<li><strong>Ctrl + F</strong> – Find data</li>
<li><strong>SUM()</strong> – Sum values</li>
<li><strong>AVERAGE()</strong> – Average values</li>
<li><strong>IF()</strong> – Conditional formula</li>
<li><strong>PIVOT TABLE</strong> – Summarize and analyze data</li>
<li><strong>CHARTS</strong> – Data visualization</li>
</ul>
</section>

<section id="history">
<h2>Excel History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1985</td><td>Excel first released for Mac</td></tr>
<tr><td>1987</td><td>Excel released for Windows</td></tr>
<tr><td>1993</td><td>Excel 5 introduced VBA macros</td></tr>
<tr><td>2007</td><td>Ribbon interface introduced</td></tr>
<tr><td>Present</td><td>Widely used worldwide with Office 365 integration</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>