<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pandas Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #2ca02c, #228b22);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #d0f0c0; }

nav {
    background: #228b22;
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
nav a:hover { background: #2ca02c; color: #fff; }

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
    background: linear-gradient(to right, #2ca02c, #228b22);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #2ca02c;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #228b22;
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
    border: 1px solid #228b22;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #228b22; color: #fff; }
tr:hover td { background: #d0f0c0; }

footer {
    background: #228b22;
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
    <h1>Pandas Full Tutorial</h1>
    <p>Complete Guide to Pandas Library in Python</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Usage</a>
    <a href="#commands">Common Functions</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Pandas Introduction</h2>
<hr>
<p>Pandas is a powerful Python library for data manipulation and analysis. It provides data structures like Series and DataFrame, which allow for easy handling of structured data.</p>

<h3>Why Learn Pandas?</h3>
<ul>
<li>Efficient data manipulation and cleaning</li>
<li>Handles CSV, Excel, SQL, and JSON data</li>
<li>Essential for data analysis and machine learning</li>
<li>Provides integration with NumPy for numerical operations</li>
<li>Supports powerful grouping, merging, and pivoting operations</li>
</ul>
</section>

<section id="features">
<h2>Features of Pandas</h2>
<hr>
<ul>
<li>Fast and efficient DataFrame and Series objects</li>
<li>Powerful data selection and indexing capabilities</li>
<li>Supports missing data handling</li>
<li>Integrated with NumPy and Matplotlib</li>
<li>Data cleaning, transformation, and aggregation</li>
<li>Easy file I/O for CSV, Excel, SQL, and JSON</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Usage</h2>
<hr>
<p>Importing Pandas:</p>
<pre>
import pandas as pd
</pre>

<p>Creating Series and DataFrame:</p>
<pre>
# Series
s = pd.Series([10, 20, 30, 40])

# DataFrame
data = {'Name': ['John', 'Alice'], 'Age': [25, 30]}
df = pd.DataFrame(data)
</pre>

<p>Basic operations:</p>
<pre>
df['Age']          # Select column
df.iloc[0]         # Select first row
df.describe()      # Summary statistics
df.head(5)         # First 5 rows
df.tail(5)         # Last 5 rows
</pre>
</section>

<section id="commands">
<h2>Common Pandas Functions</h2>
<hr>
<ul>
<li><strong>pd.read_csv()</strong> – Read CSV file</li>
<li><strong>df.to_csv()</strong> – Save DataFrame to CSV</li>
<li><strong>df.info()</strong> – DataFrame info</li>
<li><strong>df.describe()</strong> – Summary statistics</li>
<li><strong>df.groupby()</strong> – Grouping data</li>
<li><strong>df.merge()</strong> – Merge DataFrames</li>
<li><strong>df.drop()</strong> – Drop rows or columns</li>
<li><strong>df.fillna()</strong> – Fill missing values</li>
<li><strong>df.sort_values()</strong> – Sort DataFrame</li>
</ul>
</section>

<section id="history">
<h2>Pandas History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2008</td><td>Pandas library created by Wes McKinney</td></tr>
<tr><td>2010</td><td>Library gained popularity in data analysis community</td></tr>
<tr><td>Present</td><td>Widely used in Python data science and machine learning</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>