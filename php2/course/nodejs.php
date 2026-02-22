<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Node.js Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #68a063, #2e8b57);
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
    background: #2e8b57;
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
nav a:hover { background: #68a063; color: #fff; }

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
    background: linear-gradient(to right, #68a063, #2e8b57);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #68a063;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #2e8b57;
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
    border: 1px solid #2e8b57;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #2e8b57; color: #fff; }
tr:hover td { background: #d0f0c0; }

footer {
    background: #2e8b57;
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
    <h1>Node.js Full Tutorial</h1>
    <p>Complete Guide to Node.js Runtime Environment</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Usage</a>
    <a href="#commands">Common Modules</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Node.js Introduction</h2>
<hr>
<p>Node.js is an open-source, cross-platform JavaScript runtime environment that executes JavaScript code outside a web browser. It is widely used to build fast and scalable server-side applications.</p>

<h3>Why Learn Node.js?</h3>
<ul>
<li>Run JavaScript on the server</li>
<li>Non-blocking, event-driven architecture</li>
<li>Ideal for real-time applications</li>
<li>Large ecosystem of npm packages</li>
<li>High demand in backend development</li>
</ul>
</section>

<section id="features">
<h2>Features of Node.js</h2>
<hr>
<ul>
<li>Asynchronous and Event-Driven</li>
<li>Fast execution with V8 engine</li>
<li>Single-threaded but scalable</li>
<li>Cross-platform compatibility</li>
<li>Built-in modules for HTTP, file system, streams, etc.</li>
<li>Supports JSON APIs natively</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Usage</h2>
<hr>
<p>Installing Node.js and running scripts:</p>
<pre>
// Check version
node -v

// Run a JavaScript file
node app.js
</pre>

<p>Creating a basic server:</p>
<pre>
const http = require('http');

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello, Node.js!');
});

server.listen(3000, () => {
  console.log('Server running at http://localhost:3000/');
});
</pre>
</section>

<section id="commands">
<h2>Common Node.js Modules</h2>
<hr>
<ul>
<li><strong>http</strong> – Create web servers</li>
<li><strong>fs</strong> – File system operations</li>
<li><strong>path</strong> – File paths handling</li>
<li><strong>os</strong> – Operating system information</li>
<li><strong>events</strong> – Event handling</li>
<li><strong>express</strong> – Popular web framework (npm module)</li>
<li><strong>npm</strong> – Node Package Manager for installing libraries</li>
</ul>
</section>

<section id="history">
<h2>Node.js History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2009</td><td>Node.js created by Ryan Dahl</td></tr>
<tr><td>2010</td><td>npm package manager launched</td></tr>
<tr><td>Present</td><td>Widely used for backend and full-stack development</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>