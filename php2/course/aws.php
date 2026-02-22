<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AWS Full Tutorial</title>
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
    background: linear-gradient(135deg, #ff9900, #cc7a00);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #ffe5b4; }

/* Navigation */
nav {
    background: #cc7a00;
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
nav a:hover { background: #ff9900; color: #fff; }

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
    background: linear-gradient(to right, #ff9900, #cc7a00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #cc7a00;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #cc7a00;
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
    border: 1px solid #cc7a00;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #cc7a00; color: #fff; }
tr:hover td { background: #ffe5b4; }

/* Footer */
footer {
    background: #cc7a00;
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
    <h1>AWS Full Tutorial</h1>
    <p>Complete Guide to Amazon Web Services</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#services">Core Services</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Introduction to AWS</h2>
<hr>
<p>Amazon Web Services (AWS) is a comprehensive cloud computing platform provided by Amazon. It offers a wide range of services like computing power, storage, and databases to help businesses scale and grow efficiently.</p>

<h3>Why Learn AWS?</h3>
<ul>
<li>Industry-leading cloud platform</li>
<li>Scalable and reliable services</li>
<li>Supports web hosting, machine learning, and analytics</li>
<li>High demand in cloud computing jobs</li>
<li>Global infrastructure and availability</li>
</ul>
</section>

<section id="features">
<h2>Features of AWS</h2>
<hr>
<ul>
<li>Elastic Compute Cloud (EC2) for scalable computing</li>
<li>Simple Storage Service (S3) for object storage</li>
<li>Managed databases (RDS, DynamoDB)</li>
<li>Networking & Content Delivery (VPC, CloudFront)</li>
<li>Machine Learning and AI services</li>
<li>Security and identity management (IAM)</li>
</ul>
</section>

<section id="services">
<h2>Core AWS Services</h2>
<hr>
<ul>
<li><strong>EC2</strong> – Virtual servers</li>
<li><strong>S3</strong> – Object storage</li>
<li><strong>Lambda</strong> – Serverless computing</li>
<li><strong>RDS</strong> – Managed relational databases</li>
<li><strong>DynamoDB</strong> – NoSQL database</li>
<li><strong>CloudFront</strong> – Content delivery network</li>
</ul>
</section>

<section id="examples">
<h2>Example Code Snippets</h2>
<hr>

<p>Launching an EC2 instance using AWS CLI:</p>
<pre>
aws ec2 run-instances \
    --image-id ami-0abcdef1234567890 \
    --count 1 \
    --instance-type t2.micro \
    --key-name MyKeyPair \
    --security-group-ids sg-12345678 \
    --subnet-id subnet-12345678
</pre>
</section>

<section id="history">
<h2>AWS History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2006</td><td>AWS officially launched with S3 and EC2</td></tr>
<tr><td>2010</td><td>Expanded services: RDS, CloudFront, SQS</td></tr>
<tr><td>2015</td><td>Major adoption in enterprise & startups</td></tr>
<tr><td>Present</td><td>Leader in cloud computing with hundreds of services</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>