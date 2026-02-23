<?php
$output = "";
if(isset($_POST['run'])){
    // Save the C# code to a temporary file
    $csCode = $_POST['csCode'];
    $filename = "TempProgram.cs";
    file_put_contents($filename, $csCode);

    // Compile the C# code using csc
    $compile = shell_exec("csc $filename 2>&1"); // For Windows
    // For Linux with .NET SDK, you can use: 
    // file_put_contents("TempProgram.cs", $csCode);
    // $compile = shell_exec("dotnet new console -o TempApp && mv $filename TempApp/Program.cs && cd TempApp && dotnet run 2>&1");

    if($compile){
        $output = "Compilation Error:\n" . $compile;
    } else {
        // Run the compiled C# program
        $run = shell_exec("TempProgram.exe 2>&1"); // For Windows
        $output = $run;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C# Live Editor</title>
<style>
body { font-family: Arial, sans-serif; background:#f4f4f4; padding:20px; }
h1 { text-align:center; color:#333; }
textarea { width:100%; height:300px; font-family: monospace; font-size:16px; padding:10px; }
button { padding:10px 20px; font-size:16px; margin-top:10px; cursor:pointer; }
pre { background:#222; color:#0f0; padding:15px; border-radius:8px; overflow-x:auto; }
.container { max-width:900px; margin:auto; }
</style>
</head>
<body>
<div class="container">
<h1>C# Live Editor & Output</h1>
<form method="POST">
<textarea name="csCode"><?php
if(!isset($_POST['csCode'])){
echo "using System;\n\nclass Program {\n    static void Main() {\n        Console.WriteLine(\"Hello, World!\");\n    }\n}";
}else{
echo htmlspecialchars($_POST['csCode']);
}
?></textarea>
<br>
<button type="submit" name="run">Run C# Code</button>
</form>

<h2>Output:</h2>
<pre><?php echo htmlspecialchars($output); ?></pre>
</div>
</body>
</html>