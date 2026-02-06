<?php
$output = "";
if(isset($_POST['run'])){
    // Save the Java code to a temporary file
    $javaCode = $_POST['javaCode'];
    $filename = "TempProgram.java";
    file_put_contents($filename, $javaCode);

    // Compile the Java code
    $compile = shell_exec("javac $filename 2>&1");

    if($compile){
        $output = "Compilation Error:\n" . $compile;
    } else {
        // Run the compiled Java program
        $run = shell_exec("java TempProgram 2>&1");
        $output = $run;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Java Live Editor</title>
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
<h1>Java Live Editor & Output</h1>
<form method="POST">
<textarea name="javaCode"><?php
if(!isset($_POST['javaCode'])){
echo "public class TempProgram {\n    public static void main(String[] args) {\n        System.out.println(\"Hello, World!\");\n    }\n}";
}else{
echo htmlspecialchars($_POST['javaCode']);
}
?></textarea>
<br>
<button type="submit" name="run">Run Java Code</button>
</form>

<h2>Output:</h2>
<pre><?php echo htmlspecialchars($output); ?></pre>
</div>
</body>
</html>
