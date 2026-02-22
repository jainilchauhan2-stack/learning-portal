<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SciPy Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #ff7f50, #d35400);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffd8b1; }

nav {
    background: #d35400;
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
    background: linear-gradient(to right, #ff7f50, #d35400);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #d35400;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #d35400;
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
    border: 1px solid #d35400;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #d35400; color: #fff; }
tr:hover td { background: #ffd8b1; }

footer {
    background: #d35400;
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
    <h1>SciPy Full Tutorial</h1>
    <p>Complete Guide to SciPy Library for Scientific Computing</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Usage</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Introduction to SciPy</h2>
<hr>
<p>SciPy is an open-source Python library used for scientific and technical computing. It builds on NumPy and provides additional modules for optimization, integration, interpolation, signal processing, and more.</p>

<h3>Why Learn SciPy?</h3>
<ul>
<li>Powerful tools for scientific computing</li>
<li>Works seamlessly with NumPy</li>
<li>Supports optimization, integration, and linear algebra</li>
<li>Widely used in research and engineering</li>
<li>Part of the scientific Python ecosystem</li>
</ul>
</section>

<section id="features">
<h2>Features of SciPy</h2>
<hr>
<ul>
<li>Optimization and root-finding algorithms</li>
<li>Integration and numerical quadrature</li>
<li>Linear algebra and sparse matrices</li>
<li>Signal and image processing</li>
<li>Statistics and probability distributions</li>
<li>Interpolation and Fourier transforms</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Usage of SciPy</h2>
<hr>

<p>Importing SciPy modules:</p>
<pre>
import numpy as np
from scipy import linalg, optimize, stats
</pre>

<p>Solving a linear system:</p>
<pre>
A = np.array([[3,2],[1,2]])
b = np.array([5,5])
x = linalg.solve(A, b)
print(x)
</pre>
</section>

<section id="examples">
<h2>Example Code Snippets</h2>
<hr>

<p>Optimization Example:</p>
<pre>
from scipy import optimize

def f(x):
    return x**2 + 5*np.sin(x)

result = optimize.minimize(f, x0=0)
print(result.x)
</pre>
</section>

<section id="history">
<h2>SciPy History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2001</td><td>SciPy initially released by Travis Oliphant</td></tr>
<tr><td>2005</td><td>Expansion of modules for signal, image, and stats</td></tr>
<tr><td>2010</td><td>Integration with NumPy and scientific ecosystem</td></tr>
<tr><td>Present</td><td>Widely used for scientific computing and research</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>