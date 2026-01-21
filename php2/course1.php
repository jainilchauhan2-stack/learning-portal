<?php
$courses = [
	[	
		"title" => "HTML",
        "desc"  => "The language for building web pages",
        "btn"   => "Learn Html",
        "color" => "#d9eee1",
	],
	[	
		"title" => "CSS",
        "desc"  => "The language for styling web pages",
        "btn"   => "Learn Css",
        "color" => "#fff4a3",
	],
	[	
		"title" => "Javascript",
        "desc"  => "The language for programming web pages",
        "btn"   => "Learn JavaScript",
        "color" => "#fff4a3",
	],
	[	
		"title" => "SQL",
        "desc"  => "A language for accessing databases",
        "btn"   => "Learn Sql",
        "color" => "#d9eee1",
	],
	[	
		"title" => "PYTHON",
        "desc"  => "A popular programming language",
        "btn"   => "Learn Python",
        "color" => "#cde6b0",
	],
    [
        "title" => "JAVA",
        "desc"  => "A programming language",
        "btn"   => "Learn PHP",
        "color" => "#ffc0c7"
    ],
    [
        "title" => "PHP",
        "desc"  => "A web server programming language",
        "btn"   => "Learn Php",
        "color" => "#ffc0c7"
    ],
    [
        "title" => "C",
        "desc"  => "Mother of all programming language",
        "btn"   => "Learn C",
        "color" => "#cde6b0"
    ],
    [
        "title" => "C++",
        "desc"  => "General-purpose,compiled programming language",
        "btn"   => "Learn C++",
        "color" => "#96d4d4"
    ],
    [
        "title" => "C#",
        "desc"  => "General-purpose,compiled programming language",
        "btn"   => "Learn C#",
        "color" => "#e9d2d4"
    ],
    [
        "title" => "REACT",
        "desc"  => "Core language for react devlopment",
        "btn"   => "Learn React",
        "color" => "#e9d2d4"
    ],
    [
        "title" => "MYSQL",
        "desc"  => "Database management system",
        "btn"   => "Learn Mysql",
        "color" => "#96d4d4"
    ],
    [
        "title" => "JQUERY",
        "desc"  => "A JS library for developing web pages",
        "btn"   => "Learn Jquery",
        "color" => "#e7e9eb"
    ],
    [
        "title" => "EXCEL",
        "desc"  => "Database management system",
        "btn"   => "Learn Excel",
        "color" => "#d9eee1"
    ],
    [
        "title" => "XML",
        "desc"  => "Extensible markup language",
        "btn"   => "Learn Xml",
        "color" => "#d9eee1"
    ],
    [
        "title" => "DJANGO",
        "desc"  => "Batteries included framework",
        "btn"   => "Learn Django",
        "color" => "#e7e9eb"
    ],
    [
        "title" => "NUMPY",
        "desc"  => "Numerical python",
        "btn"   => "Learn Numpy",
        "color" => "#fca49e"
    ],
    [
        "title" => "PANDAS",
        "desc"  => "Python data analysis library",
        "btn"   => "Learn Pandas",
        "color" => "#38e6e6"
    ],
    [
        "title" => "NODEJS",
        "desc"  => "Javascript runtime enviroment",
        "btn"   => "Learn Nodejs",
        "color" => "#38e6e6"
    ],
    [
        "title" => "DSA",
        "desc"  => "Data structure and algorithms",
        "btn"   => "Learn Dsa",
        "color" => "#fca49e"
    ],
     [
        "title" => "TYPESCRIPT",
        "desc"  => "A typed superset of javascript",
        "btn"   => "Learn Typescript",
        "color" => "#f5ee90"
    ],
     [
        "title" => "SWIFT",
        "desc"  => "A powerful,general-purpose,and open-source programming language devloped of appplce inc",
        "btn"   => "Learn Swift",
        "color" => "#cbddf7"
    ],
 [
        "title" => "SASS",
        "desc"  => "A powerful css preprocessor scripting language",
        "btn"   => "Learn Sass",
        "color" => "#cbddf7"
    ],
     [
        "title" => "VUE",
        "desc"  => "an open-source JavaScript framework used for building user interfaces (UIs) and single-page applications",
        "btn"   => "Learn Vue",
        "color" => "#f5ee90"
    ],
    [
        "title" => "SCIPY",
        "desc"  => "an open-source library for the Python programming language used for scientific and technical computing",
        "btn"   => "Learn Scipy ",
        "color" => "#ffc0c7"
    ],
    [
        "title" => "AWS",
        "desc"  => "Amazon Web Services",
        "btn"   => "Learn Aws",
        "color" => "#cde6b0"
    ],
    [
        "title" => "CYBERSCURITY",
        "desc"  => "Python, JavaScript, C/C++, and SQL",
        "btn"   => "Learn Cyberscurity",
        "color" => "#cde6b0"
    ],
    [
        "title" => "DATASCIENCE",
        "desc"  => "Python, R, and SQL",
        "btn"   => "Learn Datascience",
        "color" => "#ffc0c7"
    ],
    [
        "title" => "INTRO TO PROGRAMMING",
        "desc"  => "teaches you how to give instructions to a computer using specific languages (like Python, Java, C++) by learning core concepts like syntax, variables, data types, logic, and problem-solving to build software, focusing on common principles applicable across languages rather than just one specific syntax",
        "btn"   => "Learn Intro to programming",
        "color" => "#96d4d4"
    ],
    [
        "title" => "HTML & CSS",
        "desc"  => "foundational technologies or building blocks of the web",
        "btn"   => "Learn Html & Css",
        "color" => "#e9d2d4"
    ],
    [
        "title" => "BASH",
        "desc"  => "Bourne-again shell",
        "btn"   => "Learn Bash",
        "color" => "#e9d2d4"
    ],
    [
        "title" => "RUST",
        "desc"  => "Rust is a modern systems programming language",
        "btn"   => "Learn Rust",
        "color" => "#96d4d4"
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Courses</title>
<style>
    body {
        margin: 0;
        background: #2b2f3a;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 1200px;
        margin: 40px auto;
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 🔑 2 columns */
        gap: 40px;
        padding: 20px;
    }

    .card {
        padding: 50px 30px;
        text-align: center;
        border-radius: 16px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }

    .card h1 {
        margin: 0;
        font-size: 40px;
        color: #555;
    }

    .card p {
        margin: 15px 0 30px;
        font-size: 18px;
        color: #666;
    }

    .card button {
        padding: 14px 40px;
        border: none;
        border-radius: 30px;
        background: #4a4a4a;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .card button:hover {
        background: #000;
    }

    /* 📱 Mobile responsive */
    @media (max-width: 768px) {
        .container {
            grid-template-columns: 1fr;
        }
    }
</style>
</head>

<body>

<div class="container">
    <?php foreach ($courses as $course): ?>
        <div class="card" style="background: <?= $course['color']; ?>">
            <h1><?= $course['title']; ?></h1>
            <p><?= $course['desc']; ?></p>
            <button><?= $course['btn']; ?></button>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
