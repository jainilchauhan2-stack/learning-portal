<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XML Full Tutorial</title>
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
    background: linear-gradient(135deg, #4b6cb7, #182848);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #cce0ff; }

/* Navigation */
nav {
    background: #182848;
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
nav a:hover { background: #4b6cb7; color: #fff; }

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
    background: linear-gradient(to right, #4b6cb7, #182848);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #4b6cb7;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #4b6cb7;
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
    border: 1px solid #4b6cb7;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #4b6cb7; color: #fff; }
tr:hover td { background: #d1e0ff; }

/* Footer */
footer {
    background: #182848;
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
    <h1>XML Full Tutorial</h1>
    <p>Complete Guide to Extensible Markup Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#commands">XML Tags</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>XML Introduction</h2>
<hr>
<p>XML (Extensible Markup Language) is a markup language designed to store and transport data. It is both human-readable and machine-readable, making it widely used for data exchange between systems.</p>

<h3>Why Learn XML?</h3>
<ul>
<li>Facilitates data storage and transport</li>
<li>Platform independent</li>
<li>Used in web services and APIs</li>
<li>Supports structured and hierarchical data</li>
<li>Compatible with many programming languages</li>
</ul>
</section>

<section id="features">
<h2>Features of XML</h2>
<hr>
<ul>
<li>Extensible: You can create custom tags</li>
<li>Self-descriptive data format</li>
<li>Structured and hierarchical</li>
<li>Platform and language independent</li>
<li>Supports validation via DTD or XSD</li>
<li>Widely used in web services (SOAP, REST)</li>
</ul>
</section>

<section id="syntax">
<h2>Basic XML Syntax</h2>
<hr>
<p>Example of an XML document:</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;note&gt;
    &lt;to&gt;John&lt;/to&gt;
    &lt;from&gt;Jane&lt;/from&gt;
    &lt;heading&gt;Reminder&lt;/heading&gt;
    &lt;body&gt;Meeting at 10 AM&lt;/body&gt;
&lt;/note&gt;
</pre>

<p>Key rules:</p>
<ul>
<li>Tags must be properly nested</li>
<li>Case-sensitive</li>
<li>Root element is required</li>
<li>All elements must have a closing tag</li>
</ul>
</section>

<section id="commands">
<h2>Common XML Tags</h2>
<hr>
<ul>
<li><strong>&lt;note&gt;</strong> – Defines the root element</li>
<li><strong>&lt;to&gt;</strong> – Recipient of the note</li>
<li><strong>&lt;from&gt;</strong> – Sender of the note</li>
<li><strong>&lt;heading&gt;</strong> – Heading of the note</li>
<li><strong>&lt;body&gt;</strong> – Main content</li>
<li><strong>&lt;!-- Comment --&gt;</strong> – Comment</li>
<li><strong>Attributes</strong> – Additional information inside tags, e.g., &lt;note type="reminder"&gt;</li>
</ul>
</section>

<section id="history">
<h2>XML History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1996</td><td>XML 1.0 published by W3C</td></tr>
<tr><td>1998</td><td>Widespread adoption for web applications</td></tr>
<tr><td>2000s</td><td>Used extensively in SOAP, RSS, and web services</td></tr>
<tr><td>Present</td><td>Standard format for data exchange and storage</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>