<!DOCTYPE html>
<html>
<head>
<title>JavaScript Live Playground</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #111827;
    color: white;
    padding: 20px;
}

textarea {
    width: 100%;
    height: 220px;
    font-family: monospace;
    font-size: 15px;
    padding: 10px;
    border-radius: 8px;
}

button {
    margin-top: 10px;
    padding: 10px 25px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    background: #4f46e5;
    color: white;
    font-size: 16px;
}

#output {
    margin-top: 20px;
    padding: 15px;
    background: #1f2933;
    border-radius: 8px;
    min-height: 80px;
}
</style>
</head>

<body>

<h2>JavaScript Live Example</h2>

<textarea id="jsCode">
// Try JavaScript here
let name = "Student";
document.getElementById("output").innerHTML = "Hello " + name;
</textarea>

<button onclick="runJS()">Run Code</button>

<div id="output">Output will appear here...</div>

<script>
function runJS(){
    try {
        document.getElementById("output").innerHTML = "";
        eval(document.getElementById("jsCode").value);
    } catch (error) {
        document.getElementById("output").innerHTML = error;
    }
}
</script>

</body>
</html>
