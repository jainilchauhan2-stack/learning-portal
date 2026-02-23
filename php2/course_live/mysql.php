<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MySQL Live Practice</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.6.2/sql-wasm.js"></script>
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
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}
th, td {
    border: 1px solid #fff;
    padding: 8px;
    text-align: left;
}
</style>
</head>
<body>

<h2>MySQL Live Practice</h2>

<textarea id="mysqlQuery">
// Example: SELECT * FROM employees;
</textarea>
<br>
<button onclick="runMySQL()">Run Query</button>

<h3>Output:</h3>
<div id="output">Results will appear here...</div>

<script>
let db;

// Load SQL.js and create a database
initSqlJs({ locateFile: file => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.6.2/${file}` }).then(SQL => {
    db = new SQL.Database();

    // Sample table similar to MySQL
    db.run(`
        CREATE TABLE employees (
            id INTEGER PRIMARY KEY,
            name TEXT,
            department TEXT,
            salary INTEGER
        );
        INSERT INTO employees VALUES (1, 'Alice', 'HR', 5000);
        INSERT INTO employees VALUES (2, 'Bob', 'IT', 6000);
        INSERT INTO employees VALUES (3, 'Charlie', 'Finance', 5500);
    `);
});

function runMySQL(){
    const query = document.getElementById("mysqlQuery").value;
    try {
        const result = db.exec(query);
        if(result.length === 0) {
            document.getElementById("output").innerHTML = "Query executed successfully!";
            return;
        }
        let html = "<table><tr>";
        result[0].columns.forEach(col => html += `<th>${col}</th>`);
        html += "</tr>";
        result[0].values.forEach(row => {
            html += "<tr>";
            row.forEach(val => html += `<td>${val}</td>`);
            html += "</tr>";
        });
        html += "</table>";
        document.getElementById("output").innerHTML = html;
    } catch(e) {
        document.getElementById("output").innerHTML = "Error: " + e.message;
    }
}
</script>

</body>
</html>