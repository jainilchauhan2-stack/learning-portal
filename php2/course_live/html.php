<?php
// Ultimate HTML Reference + Live Playground in PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate HTML Reference & Playground</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<style>
:root {
    --primary: #3498db;
    --secondary: #2c3e50;
    --bg: #f4f6f8;
    --card: #fff;
    --text: #2c3e50;
    --hover: #2980b9;
}

[data-theme="dark"] {
    --bg: #1f1f1f;
    --card: #2c2c2c;
    --text: #ecf0f1;
    --primary: #3498db;
    --hover: #1abc9c;
}

body {
    margin:0; padding:20px;
    font-family:'Roboto', sans-serif;
    background: var(--bg);
    color: var(--text);
    transition: 0.3s;
}

h1 { text-align:center; color: var(--secondary); }
.theme-toggle {
    position:fixed; top:20px; right:20px;
    background: var(--primary); color:#fff;
    border:none; padding:10px 15px;
    cursor:pointer; border-radius:5px;
    z-index:1000; transition:0.3s;
}
.theme-toggle:hover { background: var(--hover); }

.container { display:flex; gap:20px; flex-wrap:wrap; margin-top:30px; }
.sidebar { flex:1 1 250px; min-width:200px; }
.content { flex:2 1 600px; min-width:300px; }

ul.tag-list { list-style:none; padding:0; }
ul.tag-list li { background: var(--card); margin-bottom:10px;
    padding:10px; border-radius:8px; cursor:pointer;
    transition:0.3s; border-left:5px solid var(--primary); }
ul.tag-list li:hover { transform:translateY(-3px); box-shadow:0 4px 15px rgba(0,0,0,0.1); }

textarea { width:100%; height:300px; padding:10px; font-family:monospace;
    font-size:16px; border-radius:8px; border:1px solid #ccc; resize: vertical; margin-bottom:10px; }

iframe { width:100%; height:300px; border:1px solid #ccc; border-radius:8px; }

h2 { margin-top:0; }
</style>
</head>
<body data-theme="light">

<button class="theme-toggle" onclick="toggleTheme()">Toggle Dark/Light</button>
<h1>Ultimate HTML Reference & Playground</h1>

<div class="container">
    <!-- Sidebar: Tag List -->
    <div class="sidebar">
        <h2>HTML Tags</h2>
        <ul class="tag-list">
            <li onclick="loadExample('headings')">Headings (h1-h6)</li>
            <li onclick="loadExample('paragraph')">Paragraph (p)</li>
            <li onclick="loadExample('link')">Link (a)</li>
            <li onclick="loadExample('image')">Image (img)</li>
            <li onclick="loadExample('lists')">Lists (ul, ol, li)</li>
            <li onclick="loadExample('table')">Table (table, tr, td, th)</li>
            <li onclick="loadExample('form')">Form (input, textarea, button)</li>
            <li onclick="loadExample('video')">Multimedia (video, audio)</li>
            <li onclick="loadExample('semantic')">Semantic Tags (header, footer, section)</li>
        </ul>
    </div>

    <!-- Content: Live Editor & Preview -->
    <div class="content">
        <h2>Live Example</h2>
        <textarea id="codeArea"></textarea>
        <iframe id="previewFrame"></iframe>
    </div>
</div>

<script>
// Theme toggle
function toggleTheme(){
    let body = document.body;
    body.setAttribute('data-theme', body.getAttribute('data-theme')==='light'?'dark':'light');
}

// Live preview update
const codeArea = document.getElementById('codeArea');
const previewFrame = document.getElementById('previewFrame');

function updatePreview(){
    const code = codeArea.value;
    const frameDoc = previewFrame.contentDocument || previewFrame.contentWindow.document;
    frameDoc.open();
    frameDoc.write(code);
    frameDoc.close();
}

// Update preview on typing
codeArea.addEventListener('input', updatePreview);

// Pre-made examples
const examples = {
    headings: `<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>`,

    paragraph: `<p>This is a paragraph of text.</p>
<p>You can write multiple paragraphs and see them here.</p>`,

    link: `<a href="https://www.example.com" target="_blank">Visit Example.com</a>`,

    image: `<img src="https://via.placeholder.com/200" alt="Sample Image">`,

    lists: `<ul>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
</ul>
<ol>
<li>First</li>
<li>Second</li>
<li>Third</li>
</ol>`,

    table: `<table border="1" cellpadding="5">
<tr><th>Name</th><th>Age</th></tr>
<tr><td>John</td><td>25</td></tr>
<tr><td>Jane</td><td>30</td></tr>
</table>`,

    form: `<form>
<label for="name">Name:</label>
<input type="text" id="name" name="name"><br><br>
<label for="email">Email:</label>
<input type="email" id="email" name="email"><br><br>
<textarea placeholder="Write your message here"></textarea><br><br>
<button type="submit">Submit</button>
</form>`,

    video: `<video width="320" height="240" controls>
  <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<audio controls>
  <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mp3">
  Your browser does not support the audio element.
</audio>`,

    semantic: `<header><h1>Header Section</h1></header>
<nav><a href="#">Home</a> | <a href="#">About</a></nav>
<section><h2>Section Title</h2><p>Content goes here.</p></section>
<article><h3>Article Title</h3><p>Article content.</p></article>
<footer><p>Footer content</p></footer>`
};

// Load example when clicked
function loadExample(tag){
    codeArea.value = examples[tag];
    updatePreview();
}

// Load default example
loadExample('headings');
</script>

</body>
</html>
