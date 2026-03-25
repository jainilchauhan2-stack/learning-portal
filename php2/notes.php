<?php

$notes = [
    ["title"=>"HTML Notes","file"=>"../assets/pdf/html.pdf"],
    ["title"=>"CSS Notes","file"=>"../assets/pdf/css.pdf"],
    ["title"=>"JavaScript Notes","file"=>"../assets/pdf/javascript.pdf"],
    ["title"=>"Sql Notes","file"=>"../assets/pdf/sql.pdf"],
    ["title"=>"Python Notes","file"=>"../assets/pdf/python.pdf"],
    ["title"=>"Java Notes","file"=>"../assets/pdf/java.pdf"],
    ["title"=>"Php Notes","file"=>"../assets/pdf/php.pdf"],
    ["title"=>"C Notes","file"=>"../assets/pdf/c.pdf"],
    ["title"=>"C++ Notes","file"=>"../assets/pdf/c2.pdf"],
    ["title"=>"C# Notes","file"=>"../assets/pdf/c3.pdf"],
    ["title"=>"React Notes","file"=>"../assets/pdf/react.pdf"],
    ["title"=>"Mysql Notes","file"=>"../assets/pdf/mysql.pdf"],
    ["title"=>"Jquery Notes","file"=>"../assets/pdf/jquery.pdf"],
    ["title"=>"Excel Notes","file"=>"../assets/pdf/excel.pdf"],
    ["title"=>"Xml Notes","file"=>"../assets/pdf/xml.pdf"],
    ["title"=>"Django Notes","file"=>"../assets/pdf/django.pdf"],
    ["title"=>"Numpy Notes","file"=>"../assets/pdf/numpy.pdf"],
    ["title"=>"Pandas Notes","file"=>"../assets/pdf/pandas.pdf"],
    ["title"=>"Nodejs Notes","file"=>"../assets/pdf/nodejs.pdf"],
    ["title"=>"Dsa Notes","file"=>"../assets/pdf/dsa.pdf"],
    ["title"=>"Typescript Notes","file"=>"../assets/pdf/typescript.pdf"],
    ["title"=>"Swift Notes","file"=>"../assets/pdf/swift.pdf"],
    ["title"=>"Sass Notes","file"=>"../assets/pdf/sass.pdf"],
    ["title"=>"Vue Notes","file"=>"../assets/pdf/vue.pdf"],
    ["title"=>"Scipy Notes","file"=>"../assets/pdf/scipy.pdf"],
    ["title"=>"Aws Notes","file"=>"../assets/pdf/aws.pdf"],
    ["title"=>"Cybersecurity Notes","file"=>"../assets/pdf/cybersecurity.pdf"],
    ["title"=>"Datascience Notes","file"=>"../assets/pdf/datascience.pdf"],
    ["title"=>"Html & Css Notes","file"=>"../assets/pdf/htmlcss.pdf"],
    ["title"=>"Bash Notes","file"=>"../assets/pdf/bash.pdf"],
    ["title"=>"Rust Notes","file"=>"../assets/pdf/rust.pdf"],
];

if(isset($_GET['file'])){
    $file = $_GET['file'];


    $allowed = array_column($notes, 'file');

    if(in_array($file, $allowed) && file_exists($file)){
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    } else {
        echo "❌ File not found or not allowed!";
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Download Notes</title>

<style>
body{
    font-family: Arial;
    background: linear-gradient(135deg,#1e3a8a,#020617);
    color:#fff;
    text-align:center;
}

.container{
    max-width:800px;
    margin:50px auto;
}

.card{
    background: rgba(255,255,255,0.1);
    padding:20px;
    margin:15px 0;
    border-radius:12px;
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

button{
    padding:10px 20px;
    border:none;
    border-radius:20px;
    background:#22c55e;
    color:#fff;
    cursor:pointer;
}
</style>
</head>

<body>

<h1>📚 Download Course Notes</h1>

<div class="container">
<?php foreach($notes as $note): ?>
    <div class="card">
        <h3><?= $note['title']; ?></h3>

        <a href="?file=<?= $note['file']; ?>">
            <button>⬇ Download</button>
        </a>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>