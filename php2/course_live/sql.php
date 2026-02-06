<!DOCTYPE html>
<html>
<head>
    <title>SQL Live Practice</title>
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

<h2>SQL Live Practice</h2>

<textarea id="sqlQuery">
// Example: SELECT * FROM users;
</textarea>
<br>
<button onclick="runSQL()">Run SQL</button>

<h3>Output:</h3>
<div id="output">Results will appear here...</div>

<script>
let db;

// Load SQL.js and create a database
initSqlJs({ locateFile: file => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.6.2/${file}` }).then(SQL => {
    db = new SQL.Database();
    
    // Create a sample table
    db.run(`
        CREATE TABLE users (id INTEGER, name TEXT, age INTEGER);
        INSERT INTO users VALUES (1, 'Alice', 25);
        INSERT INTO users VALUES (2, 'Bob', 30);
        INSERT INTO users VALUES (3, 'Charlie', 22);
    `);
});

function runSQL(){
    const query = document.getElementById("sqlQuery").value;
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
