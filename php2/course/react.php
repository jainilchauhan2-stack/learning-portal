<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>React Full Tutorial</title>
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
    background: linear-gradient(135deg, #61dafb, #21a1f1);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #e0f7ff; }

/* Navigation */
nav {
    background: #21a1f1;
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
nav a:hover { background: #61dafb; color: #fff; }

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
    background: linear-gradient(to right, #61dafb, #21a1f1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #61dafb;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #61dafb;
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
    border: 1px solid #61dafb;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #61dafb; color: #fff; }
tr:hover td { background: #cceeff; }

/* Footer */
footer {
    background: #21a1f1;
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
    <h1>React Full Tutorial</h1>
    <p>Complete Guide to React JS Library</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#components">Components</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>React Introduction</h2>
<hr>
<p>React is a popular open-source JavaScript library developed by Facebook for building interactive user interfaces, especially for single-page applications. It allows developers to create reusable UI components.</p>

<h3>Why Learn React?</h3>
<ul>
<li>Build dynamic, high-performance web apps</li>
<li>Reusable components for faster development</li>
<li>Virtual DOM for efficient rendering</li>
<li>Supported by a large community</li>
<li>Used by top companies like Facebook, Instagram, and Airbnb</li>
</ul>
</section>

<section id="features">
<h2>Features of React</h2>
<hr>
<ul>
<li>Component-Based Architecture</li>
<li>Virtual DOM for faster updates</li>
<li>Declarative UI</li>
<li>JSX Syntax (HTML in JavaScript)</li>
<li>Strong community support and ecosystem</li>
<li>Integration with other libraries and frameworks</li>
</ul>
</section>

<section id="syntax">
<h2>Basic React Syntax</h2>
<hr>
<p>Example of a simple React component:</p>
<pre>
import React from 'react';

function App() {
  return (
    &lt;div&gt;
      &lt;h1&gt;Hello, React!&lt;/h1&gt;
    &lt;/div&gt;
  );
}

export default App;
</pre>

<p>Using JSX with variables:</p>
<pre>
import React from 'react';

function App() {
  const name = "React Learner";
  return (
    &lt;div&gt;
      &lt;h2&gt;Welcome, {name}!&lt;/h2&gt;
    &lt;/div&gt;
  );
}

export default App;
</pre>
</section>

<section id="components">
<h2>React Components</h2>
<hr>
<ul>
<li><strong>Functional Components</strong> – Modern way, using functions</li>
<li><strong>Class Components</strong> – Older approach using ES6 classes</li>
<li><strong>Props</strong> – Pass data to components</li>
<li><strong>State</strong> – Component-level dynamic data</li>
<li><strong>Hooks</strong> – e.g., useState, useEffect for functional components</li>
</ul>

<p>Example of a functional component with state:</p>
<pre>
import React, { useState } from 'react';

function Counter() {
  const [count, setCount] = useState(0);

  return (
    &lt;div&gt;
      &lt;h3&gt;Count: {count}&lt;/h3&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;Increment&lt;/button&gt;
    &lt;/div&gt;
  );
}

export default Counter;
</pre>
</section>

<section id="history">
<h2>React History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2011</td><td>React created by Jordan Walke at Facebook</td></tr>
<tr><td>2013</td><td>React open-sourced</td></tr>
<tr><td>2015</td><td>React Native announced for mobile development</td></tr>
<tr><td>2017</td><td>Introduction of React Fiber for better rendering</td></tr>
<tr><td>2020</td><td>React 17 released with gradual upgrade support</td></tr>
<tr><td>2023</td><td>React 18 introduced concurrent features and hooks improvements</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>