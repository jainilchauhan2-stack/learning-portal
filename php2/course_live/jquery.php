<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery Live Practice</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
body {
    font-family: Arial, sans-serif;
    background: #1f2933;
    color: #fff;
    padding: 20px;
}
textarea {
    width: 100%;
    height: 120px;
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
#demoArea {
    margin-top: 20px;
    padding: 20px;
    background: #374151;
    border-radius: 8px;
}
</style>
</head>
<body>

<h2>jQuery Live Practice</h2>

<textarea id="jqueryCode">
// Example:
// $("#demoText").text("Hello, jQuery!");
</textarea>
<br>
<button onclick="runjQuery()">Run jQuery Code</button>

<h3>Demo Area:</h3>
<div id="demoArea">
    <p id="demoText">This is a demo paragraph.</p>
    <button id="demoBtn">Click Me!</button>
</div>

<script>
function runjQuery() {
    const code = document.getElementById("jqueryCode").value;
    try {
        // Use Function constructor to run jQuery code safely
        new Function("$", code)(jQuery);
    } catch(e) {
        alert("Error: " + e.message);
    }
}
</script>

</body>
</html>