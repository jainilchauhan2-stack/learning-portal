<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Full Tutorial</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f7f8;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #4CAF50, #2E8B57);
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        header h1 {
            margin: 0;
            font-size: 3em;
        }

        header p {
            font-size: 1.2em;
        }

        nav {
            background-color: #333;
            text-align: center;
            padding: 15px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            font-size: 1em;
            transition: 0.3s;
        }

        nav a:hover {
            color: #4CAF50;
        }

        section {
            background-color: #fff;
            margin: 30px auto;
            padding: 40px 30px;
            border-radius: 12px;
            max-width: 900px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        section h2 {
            color: #2E8B57;
            margin-bottom: 20px;
            text-align: center;
        }

        hr {
            border: 0;
            height: 3px;
            background: #4CAF50;
            width: 50%;
            margin: 20px auto;
        }

        p, li {
            font-size: 16px;
            margin: 10px 0;
        }

        ul {
            padding-left: 25px;
            margin-bottom: 30px;
        }

        pre {
            background-color: #f4f4f4;
            border-left: 5px solid #4CAF50;
            padding: 15px;
            overflow-x: auto;
            margin-bottom: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #4CAF50;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:hover {
            background-color: #f1f9f1;
        }

        form {
            background-color: #fefefe;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            max-width: 600px;
            margin: 0 auto;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="text"], input[type="email"], textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2E8B57;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav a {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>HTML Full Tutorial</h1>
    <p>Learn HTML with examples, tags, history, and exercises</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#elements">Elements</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
    <h2>HTML Introduction</h2>
    <hr>
    <p>HTML is the standard markup language for creating Web pages. It describes the structure of a web page using elements.</p>

    <h3>What is HTML?</h3>
    <ul>
        <li>HTML stands for Hyper Text Markup Language</li>
        <li>HTML consists of a series of elements</li>
        <li>Elements label pieces of content like headings, paragraphs, and links</li>
    </ul>

    <h3>A Simple HTML Document</h3>
    <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Page Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;My First Heading&lt;/h1&gt;
&lt;p&gt;My first paragraph.&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;
    </pre>
</section>

<section id="elements">
    <h2>HTML Elements</h2>
    <ul>
        <li>&lt;h1&gt; to &lt;h6&gt; — Headings</li>
        <li>&lt;p&gt; — Paragraph</li>
        <li>&lt;a&gt; — Hyperlink</li>
        <li>&lt;img&gt; — Image</li>
        <li>&lt;ul&gt; / &lt;ol&gt; / &lt;li&gt; — Lists</li>
        <li>&lt;table&gt; / &lt;tr&gt; / &lt;th&gt; / &lt;td&gt; — Tables</li>
        <li>&lt;form&gt; / &lt;input&gt; / &lt;textarea&gt; — Forms</li>
        <li>&lt;br&gt; — Line break</li>
        <li>&lt;hr&gt; — Horizontal rule</li>
        <li>&lt;header&gt;, &lt;footer&gt;, &lt;section&gt;, &lt;article&gt;, &lt;nav&gt;, &lt;aside&gt; — Semantic elements</li>
    </ul>

    <h3>Examples:</h3>
    <table>
        <tr>
            <th>Start Tag</th>
            <th>Content</th>
            <th>End Tag</th>
        </tr>
        <tr>
            <td>&lt;h1&gt;</td>
            <td>Heading Example</td>
            <td>&lt;/h1&gt;</td>
        </tr>
        <tr>
            <td>&lt;p&gt;</td>
            <td>Paragraph Example</td>
            <td>&lt;/p&gt;</td>
        </tr>
        <tr>
            <td>&lt;br&gt;</td>
            <td>Line break</td>
            <td>None</td>
        </tr>
    </table>
</section>

<section id="history">
    <h2>HTML History</h2>
    <table>
        <tr><th>Year</th><th>Event / Version</th></tr>
        <tr><td>1989</td><td>Tim Berners-Lee invented WWW</td></tr>
        <tr><td>1991</td><td>Tim Berners-Lee invented HTML</td></tr>
        <tr><td>1993</td><td>Dave Raggett drafted HTML+</td></tr>
        <tr><td>1995</td><td>HTML Working Group defined HTML 2.0</td></tr>
        <tr><td>1997</td><td>W3C Recommendation: HTML 3.2</td></tr>
        <tr><td>1999</td><td>W3C Recommendation: HTML 4.01</td></tr>
        <tr><td>2000</td><td>W3C Recommendation: XHTML 1.0</td></tr>
        <tr><td>2008</td><td>WHATWG HTML5 First Public Draft</td></tr>
        <tr><td>2012</td><td>WHATWG HTML5 Living Standard</td></tr>
        <tr><td>2014</td><td>W3C Recommendation: HTML5</td></tr>
        <tr><td>2016</td><td>W3C Candidate Recommendation: HTML 5.1</td></tr>
        <tr><td>2017</td><td>W3C Recommendation: HTML5.1 2nd Edition</td></tr>
        <tr><td>2017</td><td>W3C Recommendation: HTML5.2</td></tr>
    </table>
</section>



<footer>
    <p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>
