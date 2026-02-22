<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Swift Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #ff7f50, #ff4500);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffe4b5; }

nav {
    background: #ff4500;
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
    background: linear-gradient(to right, #ff7f50, #ff4500);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #ff4500;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #ff4500;
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
    border: 1px solid #ff4500;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #ff4500; color: #fff; }
tr:hover td { background: #ffe4b5; }

footer {
    background: #ff4500;
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
    <h1>Swift Full Tutorial</h1>
    <p>Complete Guide to Swift Programming Language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Swift Introduction</h2>
<hr>
<p>Swift is a powerful, general-purpose, open-source programming language developed by Apple for iOS, macOS, watchOS, and tvOS. It is designed to be safe, fast, and expressive, making development easier and more enjoyable.</p>

<h3>Why Learn Swift?</h3>
<ul>
<li>Used to develop iOS and macOS apps</li>
<li>Safe and easy to read syntax</li>
<li>High performance and fast execution</li>
<li>Open-source with growing community</li>
<li>Supports modern programming paradigms</li>
</ul>
</section>

<section id="features">
<h2>Features of Swift</h2>
<hr>
<ul>
<li>Strongly Typed Language</li>
<li>Optionals for safer code</li>
<li>Powerful type inference</li>
<li>Protocol-Oriented Programming</li>
<li>Closures and Functional Programming support</li>
<li>Interoperable with Objective-C</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Swift Syntax</h2>
<hr>

<p>Declaring variables:</p>
<pre>
var name: String = "Alice"
let age: Int = 25
</pre>

<p>Functions:</p>
<pre>
func greet(person: String) -> String {
    return "Hello, \\(person)!"
}
print(greet(person: "Bob"))
</pre>
</section>

<section id="examples">
<h2>Example Code Snippets</h2>
<hr>

<p>Using Classes:</p>
<pre>
class User {
    var name: String
    var age: Int
    
    init(name: String, age: Int) {
        self.name = name
        self.age = age
    }
    
    func greet() {
        print("Hello, \\(name)!")
    }
}

let user = User(name: "Charlie", age: 30)
user.greet()
</pre>
</section>

<section id="history">
<h2>Swift History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2014</td><td>Swift first announced by Apple</td></tr>
<tr><td>2015</td><td>Swift 2.0 released with error handling</td></tr>
<tr><td>2016</td><td>Swift 3.0 introduced major syntax changes</td></tr>
<tr><td>Present</td><td>Swift 5.x widely adopted for iOS/macOS development</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>