<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NumPy Full Tutorial</title>
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
    background: #ff7f50;
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
    <h1>NumPy Full Tutorial</h1>
    <p>Complete Guide to NumPy Library in Python</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Usage</a>
    <a href="#commands">Common Functions</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>NumPy Introduction</h2>
<hr>
<p>NumPy (Numerical Python) is a powerful Python library for numerical computing. It provides support for arrays, matrices, and mathematical functions to perform fast and efficient computations.</p>

<h3>Why Learn NumPy?</h3>
<ul>
<li>Efficient array computations</li>
<li>Supports multi-dimensional arrays</li>
<li>Optimized mathematical operations</li>
<li>Foundation for libraries like Pandas, SciPy, and TensorFlow</li>
<li>High-performance numerical computing</li>
</ul>
</section>

<section id="features">
<h2>Features of NumPy</h2>
<hr>
<ul>
<li>Multi-dimensional arrays (ndarray)</li>
<li>Vectorized operations for speed</li>
<li>Broadcasting for array operations</li>
<li>Mathematical, statistical, and linear algebra functions</li>
<li>Integration with C/C++ and Fortran code</li>
<li>Random number generation</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Usage</h2>
<hr>
<p>Importing NumPy:</p>
<pre>
import numpy as np
</pre>

<p>Creating arrays:</p>
<pre>
arr = np.array([1, 2, 3, 4])
matrix = np.array([[1,2],[3,4]])
</pre>

<p>Basic operations:</p>
<pre>
arr + 5          # Add 5 to all elements
arr * 2          # Multiply all elements by 2
np.sqrt(arr)     # Square root of each element
np.mean(arr)     # Average value
</pre>
</section>

<section id="commands">
<h2>Common NumPy Functions</h2>
<hr>
<ul>
<li><strong>np.array()</strong> – Create array</li>
<li><strong>np.arange()</strong> – Create range of numbers</li>
<li><strong>np.zeros()</strong> – Create zeros array</li>
<li><strong>np.ones()</strong> – Create ones array</li>
<li><strong>np.linspace()</strong> – Create evenly spaced numbers</li>
<li><strong>np.reshape()</strong> – Change array shape</li>
<li><strong>np.dot()</strong> – Dot product</li>
<li><strong>np.sum()</strong> – Sum of array elements</li>
<li><strong>np.mean()</strong> – Mean of array</li>
</ul>
</section>

<section id="history">
<h2>NumPy History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2005</td><td>NumPy released as successor of Numeric and Numarray libraries</td></tr>
<tr><td>2010</td><td>Widely adopted for scientific computing in Python</td></tr>
<tr><td>Present</td><td>Foundation of Python data science and machine learning libraries</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>