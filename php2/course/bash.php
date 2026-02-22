<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bash Full Tutorial</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}


header {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #d1d9ff; }

nav {
    background: #2575fc;
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
nav a:hover { background: #6a11cb; color: #fff; }

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
    background: linear-gradient(to right, #6a11cb, #2575fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #2575fc;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

pre {
    background: #f0f4f8;
    border-left: 5px solid #2575fc;
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
    border: 1px solid #2575fc;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #2575fc; color: #fff; }
tr:hover td { background: #d6e0ff; }

footer {
    background: #2575fc;
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
    <h1>Bash Tutorial</h1>
    <p>Learn the basics of Bash scripting and command line</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#basics">Bash Basics</a>
    <a href="#commands">Important Commands</a>
    <a href="#scripts">Writing Scripts</a>
    <a href="#examples">Examples</a>
</nav>

<section id="intro">
<h2>Introduction to Bash</h2>
<hr>
<p>Bash (Bourne Again SHell) is a command-line shell and scripting language used in Linux and Unix environments. It allows users to interact with the operating system, automate tasks, and write scripts for various purposes.</p>
</section>

<section id="basics">
<h2>Bash Basics</h2>
<hr>
<ul>
<li>Access Bash via terminal in Linux or macOS, or Git Bash on Windows.</li>
<li>Commands are typed and executed line by line.</li>
<li>Basic command syntax: <code>command [options] [arguments]</code></li>
<li>Common navigation commands: <code>cd</code>, <code>ls</code>, <code>pwd</code></li>
</ul>
</section>

<section id="commands">
<h2>Important Bash Commands</h2>
<hr>
<ul>
<li><strong>ls</strong> – List files and directories</li>
<li><strong>cd</strong> – Change directory</li>
<li><strong>pwd</strong> – Show current directory</li>
<li><strong>mkdir</strong> – Create a directory</li>
<li><strong>rm</strong> – Remove files or directories</li>
<li><strong>cp</strong> – Copy files or directories</li>
<li><strong>mv</strong> – Move or rename files</li>
<li><strong>echo</strong> – Print output to terminal</li>
</ul>
</section>

<section id="scripts">
<h2>Writing Bash Scripts</h2>
<hr>
<p>Bash scripts allow you to automate tasks using a series of commands.</p>
<pre>
#!/bin/bash
# This is a comment
echo "Hello, World!"
name="John"
echo "My name is $name"
</pre>
<p>Make a script executable:</p>
<pre>
chmod +x script.sh
./script.sh
</pre>
</section>

<section id="examples">
<h2>Example Bash Script</h2>
<hr>
<pre>
#!/bin/bash
# Backup Script
source_dir="/home/user/Documents"
backup_dir="/home/user/Backup"

echo "Backing up files..."
cp -r $source_dir/* $backup_dir/
echo "Backup completed!"
</pre>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>