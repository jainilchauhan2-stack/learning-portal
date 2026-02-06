<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Python Live Playground</title>
<script src="https://cdn.jsdelivr.net/pyodide/v0.23.4/full/pyodide.js"></script>
<style>
body {
    font-family: Arial, sans-serif;
    background: #1f2933;
    color: #fff;
    padding: 20px;
}

textarea {
    width: 100%;
    height: 200px;
    padding: 10px;
    font-family: monospace;
    font-size: 14px;
    border-radius: 6px;
    border: none;
    resize: vertical;
}

button {
    margin-top: 10px;
    padding: 10px 20px;
    font-size: 15px;
    border: none;
    border-radius: 5px;
    background: #4f46e5;
    cursor: pointer;
    color: white;
}

#output {
    margin-top: 20px;
    padding: 15px;
    border-radius: 8px;
    background: #111827;
    min-height: 100px;
    white-space: pre-wrap;
}
</style>
</head>
<body>

<h2>Python Live Playground</h2>

<textarea id="pythonCode">
# Try Python here
print("Hello, Python!")
for i in range(5):
    print("Number", i)
</textarea>
<br>
<button onclick="runPython()">Run Python</button>

<h3>Output:</h3>
<div id="output">Waiting for Python to load...</div>

<script>
let pyodideReady = false;
let pyodide;

async function loadPyodideAndPackages() {
    document.getElementById("output").textContent = "Loading Python...";
    pyodide = await loadPyodide();
    pyodideReady = true;
    document.getElementById("output").textContent = "Python loaded! Ready to run code.";
}
loadPyodideAndPackages();

async function runPython() {
    if (!pyodideReady) {
        alert("Python is still loading. Please wait a few seconds...");
        return;
    }

    const code = document.getElementById("pythonCode").value;
    try {
        // Redirect stdout to capture print() outputs
        let output = "";
        pyodide.runPython(`
import sys
from js import console
class JSOutput:
    def write(self, s):
        console.log(s)
        import js
        js.output += s
    def flush(self):
        pass

sys.stdout = JSOutput()
sys.stderr = JSOutput()
`);
        window.output = "";
        await pyodide.runPythonAsync(code);
        document.getElementById("output").textContent = window.output || "Code executed successfully!";
    } catch (err) {
        document.getElementById("output").textContent = "Error: " + err;
    }
}
</script>

</body>
</html>
