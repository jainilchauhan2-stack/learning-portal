<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate CSS Reference & Playground</title>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<style>
:root {
    --primary:#3498db;
    --bg:#f4f6f8;
    --card:#fff;
    --text:#2c3e50;
}

body {
    margin:0;
    padding:20px;
    font-family:Roboto, sans-serif;
    background:var(--bg);
    color:var(--text);
}

h1 { text-align:center; }

.container {
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.sidebar {
    flex:1 1 250px;
}

.content {
    flex:2 1 600px;
}

ul {
    list-style:none;
    padding:0;
}

li {
    background:var(--card);
    padding:10px;
    margin-bottom:10px;
    cursor:pointer;
    border-left:5px solid var(--primary);
    border-radius:6px;
}

textarea {
    width:100%;
    height:250px;
    font-family:monospace;
    font-size:15px;
    padding:10px;
    border-radius:6px;
}

.preview {
    margin-top:15px;
    padding:20px;
    border:1px solid #ccc;
    border-radius:8px;
    background:white;
}

.demo-box {
    padding:20px;
    background:#3498db;
    color:white;
}
</style>
</head>

<body>

<h1>Ultimate CSS Reference & Playground</h1>

<div class="container">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>CSS Properties</h2>
        <ul>
            <li onclick="loadCSS('color')">Color</li>
            <li onclick="loadCSS('background')">Background</li>
            <li onclick="loadCSS('border')">Border</li>
            <li onclick="loadCSS('padding')">Padding</li>
            <li onclick="loadCSS('margin')">Margin</li>
            <li onclick="loadCSS('font')">Font</li>
            <li onclick="loadCSS('shadow')">Box Shadow</li>
            <li onclick="loadCSS('flex')">Flexbox</li>
        </ul>
    </div>

    <!-- Editor -->
    <div class="content">
        <h2>Live CSS Editor</h2>

        <textarea id="cssArea"></textarea>

        <div class="preview">
            <div id="target" class="demo-box">
                Style Me with CSS ✨
            </div>
        </div>
    </div>

</div>

<script>
const cssArea = document.getElementById("cssArea");
const target = document.getElementById("target");

function updateCSS(){
    target.style = cssArea.value;
}

cssArea.addEventListener("input", updateCSS);

const examples = {
    color: `
color: white;
background-color: #e74c3c;
`,

    background: `
background: linear-gradient(45deg, #3498db, #9b59b6);
`,

    border: `
border: 4px solid #2c3e50;
border-radius: 12px;
`,

    padding: `
padding: 40px;
`,

    margin: `
margin: 50px auto;
width: 200px;
`,

    font: `
font-size: 24px;
font-weight: bold;
text-transform: uppercase;
`,

    shadow: `
box-shadow: 0 10px 25px rgba(0,0,0,0.3);
`,

    flex: `
display: flex;
justify-content: center;
align-items: center;
height: 150px;
`
};

function loadCSS(type){
    cssArea.value = examples[type];
    updateCSS();
}

// Load default
loadCSS('color');
</script>

</body>
</html>
