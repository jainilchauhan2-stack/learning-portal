<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>React Live Editor</title>
<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
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
    background: #111827;
    color: #fff;
    padding: 20px;
    margin-top: 15px;
    border-radius: 10px;
    min-height: 100px;
}
</style>
</head>
<body>

<h2>React Live Editor</h2>
<textarea id="reactCode">
// Example: Simple React component
function App() {
    const [count, setCount] = React.useState(0);
    return (
        <div>
            <h1>Hello React!</h1>
            <p>Count: {count}</p>
            <button onClick={() => setCount(count + 1)}>Increment</button>
        </div>
    );
}
ReactDOM.render(<App />, document.getElementById('output'));
</textarea>
<br>
<button onclick="runReact()">Run React Code</button>

<h3>Output:</h3>
<div id="output"></div>

<script>
function runReact(){
    const code = document.getElementById("reactCode").value;
    try {
        // Clear previous output
        document.getElementById('output').innerHTML = '';
        // Transpile JSX to JS
        const transpiledCode = Babel.transform(code, { presets: ['react'] }).code;
        // Execute the code
        new Function(transpiledCode)();
    } catch(e) {
        document.getElementById('output').innerHTML = "Error: " + e.message;
    }
}
</script>

</body>
</html>