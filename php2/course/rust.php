<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rust Full Tutorial</title>
<style>
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #dea584, #b7410e);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffe1d6; }

nav {
    background: #b7410e;
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
nav a:hover { background: #dea584; color: #000; }

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
    background: linear-gradient(to right, #dea584, #b7410e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #b7410e;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #b7410e;
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
    border: 1px solid #b7410e;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #b7410e; color: #fff; }
tr:hover td { background: #ffe1d6; }

footer {
    background: #b7410e;
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
    <h1>Rust Tutorial</h1>
    <p>Learn Rust – a modern systems programming language</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#basics">Rust Basics</a>
    <a href="#commands">Key Concepts</a>
    <a href="#scripts">Writing Programs</a>
    <a href="#examples">Examples</a>
</nav>

<section id="intro">
<h2>Introduction to Rust</h2>
<hr>
<p>Rust is a modern systems programming language focused on speed, memory safety, and concurrency. It is widely used for building reliable and high-performance software, including operating systems, web servers, and applications.</p>
</section>

<section id="basics">
<h2>Rust Basics</h2>
<hr>
<ul>
<li>Install Rust from <a href="https://www.rust-lang.org/tools/install" target="_blank">official website</a>.</li>
<li>Rust programs are compiled using the <code>rustc</code> compiler.</li>
<li>Basic syntax follows <code>fn main() { }</code> structure.</li>
<li>Variables are immutable by default; use <code>mut</code> to make them mutable.</li>
<li>Use <code>cargo</code> for project management and building larger applications.</li>
</ul>
</section>

<section id="commands">
<h2>Key Concepts in Rust</h2>
<hr>
<ul>
<li><strong>Variables:</strong> Immutable by default, e.g., <code>let x = 5;</code></li>
<li><strong>Data Types:</strong> integers, floats, booleans, strings</li>
<li><strong>Functions:</strong> <code>fn add(a:i32, b:i32) -&gt; i32 { a+b }</code></li>
<li><strong>Ownership & Borrowing:</strong> Unique feature for memory safety</li>
<li><strong>Control Flow:</strong> <code>if</code>, <code>loop</code>, <code>while</code>, <code>for</code></li>
<li><strong>Structs & Enums:</strong> Define custom data types</li>
<li><strong>Modules & Crates:</strong> Organize code and use external libraries</li>
</ul>
</section>

<section id="scripts">
<h2>Writing Rust Programs</h2>
<hr>
<p>Basic Rust program:</p>
<pre>
fn main() {
    println!("Hello, Rust!");
    let mut x = 5;
    x += 2;
    println!("x = {}", x);
}
</pre>

<p>Compile & run:</p>
<pre>
rustc main.rs
./main
</pre>

<p>Using Cargo:</p>
<pre>
cargo new my_project
cd my_project
cargo build
cargo run
</pre>
</section>

<section id="examples">
<h2>Example Rust Program</h2>
<hr>
<pre>
// Program to calculate factorial
fn factorial(n: u32) -> u32 {
    if n == 0 { 1 } else { n * factorial(n-1) }
}

fn main() {
    let num = 5;
    println!("Factorial of {} is {}", num, factorial(num));
}
</pre>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>