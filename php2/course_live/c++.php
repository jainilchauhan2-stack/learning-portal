<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C++ Live Practice</title>
<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #1f2933, #111827);
    color: #fff;
    padding: 20px;
    min-height: 100vh;
}

h2 {
    text-align: center;
    font-size: 36px;
    margin-bottom: 20px;
    background: linear-gradient(to right, #4f46e5, #6366f1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

textarea {
    width: 100%;
    min-height: 180px;
    padding: 15px;
    font-family: monospace;
    font-size: 14px;
    border-radius: 10px;
    border: none;
    outline: none;
    resize: vertical;
    margin-bottom: 15px;
}

button {
    display: block;
    margin: 0 auto 20px auto;
    padding: 12px 30px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 999px;
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    color: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
}

button:hover {
    background: linear-gradient(135deg, #4f46e5, #3730a3);
    transform: scale(1.05);
}

#output {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 12px;
    min-height: 120px;
    overflow-x: auto;
    white-space: pre-wrap;
}

/* Code block style for simulation */
code {
    font-family: monospace;
}
</style>
</head>
<body>

<h2>C++ Live Practice</h2>

<textarea id="cppCode">
// Example:
#include <iostream>
using namespace std;

int main() {
    cout << "Hello World!" << endl;
    return 0;
}
</textarea>

<button onclick="runCPP()">Run C++ Code</button>

<h3>Output:</h3>
<div id="output">Results will appear here...</div>

<script>
function runCPP() {
    const code = document.getElementById("cppCode").value.trim();
    const outputDiv = document.getElementById("output");

    if(!code) {
        outputDiv.innerHTML = "Please enter C++ code!";
        return;
    }

    // Simulated execution for cout statements
    try {
        const simulatedOutput = code.match(/cout\s*<<\s*"([^"]*)"/);
        if(simulatedOutput) {
            outputDiv.innerHTML = simulatedOutput[1];
        } else {
            outputDiv.innerHTML = "Code received (simulation) - Cannot execute C++ directly in browser.";
        }
    } catch(e) {
        outputDiv.innerHTML = `Error: ${e.message}`;
    }
}
</script>

</body>
</html>