<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cybersecurity Full Tutorial</title>
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

/* Navigation */
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

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #283e51;
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
    border: 1px solid #283e51;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #283e51; color: #fff; }
tr:hover td { background: #a0c4ff; }

/* Footer */
footer {
    background: #283e51;
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
    <h1>Cybersecurity Full Tutorial</h1>
    <p>Learn Python, JavaScript, C/C++, SQL & Cybersecurity Concepts</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#tools">Tools & Techniques</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Introduction to Cybersecurity</h2>
<hr>
<p>Cybersecurity involves protecting computer systems, networks, and data from digital attacks, unauthorized access, or damage. It is critical for organizations and individuals to safeguard sensitive information.</p>

<h3>Why Learn Cybersecurity?</h3>
<ul>
<li>Protect against cyber threats and attacks</li>
<li>High-demand skill in tech industry</li>
<li>Essential for IT, network, and software professionals</li>
<li>Work with security tools and ethical hacking</li>
<li>Ensure data integrity and privacy</li>
</ul>
</section>

<section id="features">
<h2>Key Features of Cybersecurity</h2>
<hr>
<ul>
<li>Network Security – Protecting networks and communications</li>
<li>Application Security – Ensuring software is safe</li>
<li>Data Security – Protecting sensitive information</li>
<li>Ethical Hacking – Testing vulnerabilities</li>
<li>Incident Response – Managing security breaches</li>
<li>Compliance & Risk Management</li>
</ul>
</section>

<section id="tools">
<h2>Tools & Techniques</h2>
<hr>
<ul>
<li>Firewalls & Intrusion Detection Systems (IDS)</li>
<li>Penetration Testing Tools (Kali Linux, Metasploit)</li>
<li>Encryption (AES, RSA, SSL/TLS)</li>
<li>Antivirus and Malware Analysis</li>
<li>Network Monitoring (Wireshark, Nmap)</li>
<li>Secure Coding Practices (Python, JavaScript, C/C++)</li>
</ul>
</section>

<section id="examples">
<h2>Example Concepts</h2>
<hr>
<p>Simple Python encryption example:</p>
<pre>
from cryptography.fernet import Fernet

key = Fernet.generate_key()
cipher = Fernet(key)
message = b"Hello, Cybersecurity!"
encrypted = cipher.encrypt(message)
print(encrypted)
</pre>
</section>

<section id="history">
<h2>Cybersecurity History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>1970s</td><td>Early computer viruses detected</td></tr>
<tr><td>1983</td><td>First cybersecurity policies introduced</td></tr>
<tr><td>1990s</td><td>Rise of firewalls and antivirus software</td></tr>
<tr><td>2000s</td><td>Expansion of network security and ethical hacking</td></tr>
<tr><td>Present</td><td>Advanced cybersecurity frameworks & global standards</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>