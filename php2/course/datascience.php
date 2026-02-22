<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Science Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #4b79a1, #283e51);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #a0c4ff; }

nav {
    background: #283e51;
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
nav a:hover { background: #4b79a1; color: #fff; }

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
    background: linear-gradient(to right, #4b79a1, #283e51);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #283e51;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #283e51;
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
    border: 1px solid #283e51;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #283e51; color: #fff; }
tr:hover td { background: #a0c4ff; }

footer {
    background: #283e51;
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
    <h1>Data Science Full Tutorial</h1>
    <p>Learn Python, R, SQL & Data Analysis Techniques</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#tools">Tools & Techniques</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Introduction to Data Science</h2>
<hr>
<p>Data Science is an interdisciplinary field focused on extracting knowledge and insights from structured and unstructured data using scientific methods, algorithms, and tools. It combines statistics, programming, and domain expertise to analyze data for decision-making.</p>

<h3>Why Learn Data Science?</h3>
<ul>
<li>High demand in tech, finance, healthcare, and more</li>
<li>Ability to make data-driven decisions</li>
<li>Work with large datasets and predictive models</li>
<li>Essential for AI, Machine Learning, and Analytics</li>
<li>Career opportunities in Data Analyst, Data Engineer, Data Scientist</li>
</ul>
</section>

<section id="features">
<h2>Key Features of Data Science</h2>
<hr>
<ul>
<li>Data Collection and Cleaning</li>
<li>Data Analysis and Visualization</li>
<li>Predictive Modeling</li>
<li>Machine Learning Algorithms</li>
<li>Statistical Analysis</li>
<li>Big Data Processing and Cloud Integration</li>
</ul>
</section>

<section id="tools">
<h2>Tools & Techniques</h2>
<hr>
<ul>
<li>Programming Languages: Python, R, SQL</li>
<li>Data Visualization: Matplotlib, Seaborn, Plotly</li>
<li>Machine Learning: Scikit-learn, TensorFlow, Keras</li>
<li>Data Handling: Pandas, Numpy</li>
<li>Big Data Tools: Hadoop, Spark</li>
<li>Database Management: MySQL, MongoDB</li>
</ul>
</section>

<section id="examples">
<h2>Example Code</h2>
<hr>
<p>Simple Python Data Analysis using Pandas:</p>
<pre>
import pandas as pd

# Load dataset
data = pd.read_csv('data.csv')

# Display first 5 rows
print(data.head())

# Describe dataset
print(data.describe())
</pre>
</section>

<section id="history">
<h2>Data Science History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1960s</td><td>Early statistics and analytics methods</td></tr>
<tr><td>1990s</td><td>Data warehousing and data mining emerges</td></tr>
<tr><td>2000s</td><td>Big data and machine learning become mainstream</td></tr>
<tr><td>2010s</td><td>AI and deep learning applied to data analysis</td></tr>
<tr><td>Present</td><td>Data science integrates AI, cloud computing, and IoT</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>