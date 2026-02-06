</*?php -->
ob_start();
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
$courses = [
	[	
		"title" => "HTML",
        "desc"  => "The language for building web pages",
        "btn"   => "Learn Html",
        "color" => "rgb(217, 238, 225)", 
        "link"  => "./course_live/html.php"
	],
	[	
		"title" => "CSS",
        "desc"  => "The language for styling web pages",
        "btn"   => "Learn Css",
        "color" => "#fff4a3",
        "link"  => "./course_live/css.php"
	],
	[	
		"title" => "Javascript",
        "desc"  => "The language for programming web pages",
        "btn"   => "Learn JavaScript",
        "color" => "#fff4a3",
        "link"  =>"./course_live/javascript.php"
	],
	[	
		"title" => "SQL",
        "desc"  => "A language for accessing databases",
        "btn"   => "Learn Sql",
        "color" => "#d9eee1",
        "link"  =>"./course_live/sql.php"
	],
	[	
		"title" => "PYTHON",
        "desc"  => "A popular programming language",
        "btn"   => "Learn Python",
        "color" => "#cde6b0",
        "link"  =>"./course_live/python.php"
	],
    [
        "title" => "JAVA",
        "desc"  => "A programming language",
        "btn"   => "Learn PHP",
        "color" => "#ffc0c7",
        "link"  =>"./course_live/java.php"
    ],
    [
        "title" => "PHP",
        "desc"  => "A web server programming language",
        "btn"   => "Learn Php",
        "color" => "#ffc0c7",
        "link"  =>"./course_live/php.php"
    ],
    [
        "title" => "C",
        "desc"  => "Mother of all programming language",
        "btn"   => "Learn C",
        "color" => "#cde6b0",
        "link"  =>"https://www.w3schools.com/c/index.php"
    ],
    [
        "title" => "C++",
        "desc"  => "General-purpose,compiled programming language",
        "btn"   => "Learn C++",
        "color" => "#96d4d4",
        "link"  =>"https://www.w3schools.com/cpp/default.asp"
    ],
    [
        "title" => "C#",
        "desc"  => "General-purpose,compiled programming language",
        "btn"   => "Learn C#",
        "color" => "#e9d2d4",
        "link"  =>"https://www.w3schools.com/cs/index.php"
    ],
    [
        "title" => "REACT",
        "desc"  => "Core language for react devlopment",
        "btn"   => "Learn React",
        "color" => "#e9d2d4",
        "link"  =>"https://www.w3schools.com/react/default.asp"
    ],
    [
        "title" => "MYSQL",
        "desc"  => "Database management system",
        "btn"   => "Learn Mysql",
        "color" => "#96d4d4",
        "link"  =>"https://www.w3schools.com/mysql/default.asp"
    ],
    [
        "title" => "JQUERY",
        "desc"  => "A JS library for developing web pages",
        "btn"   => "Learn Jquery",
        "color" => "#e7e9eb",
        "link"  =>"https://www.w3schools.com/jquery/default.asp"
    ],
    [
        "title" => "EXCEL",
        "desc"  => "Database management system",
        "btn"   => "Learn Excel",
        "color" => "#d9eee1",
        "link"  =>"https://www.w3schools.com/excel/index.php"
    ],
    [
        "title" => "XML",
        "desc"  => "Extensible markup language",
        "btn"   => "Learn Xml",
        "color" => "#d9eee1",
        "link"  =>"https://www.w3schools.com/xml/default.asp"
    ],
    [
        "title" => "DJANGO",
        "desc"  => "Batteries included framework",
        "btn"   => "Learn Django",
        "color" => "#e7e9eb",
        "link"  =>"https://www.w3schools.com/django/index.php"
    ],
    [
        "title" => "NUMPY",
        "desc"  => "Numerical python",
        "btn"   => "Learn Numpy",
        "color" => "#fca49e",
        "link"  =>"https://www.w3schools.com/python/numpy/default.asp"
    ],
    [
        "title" => "PANDAS",
        "desc"  => "Python data analysis library",
        "btn"   => "Learn Pandas",
        "color" => "#38e6e6",
        "link"  =>"https://www.w3schools.com/python/pandas/default.asp"
    ],
    [
        "title" => "NODEJS",
        "desc"  => "Javascript runtime enviroment",
        "btn"   => "Learn Nodejs",
        "color" => "#38e6e6",
        "link"  =>"https://www.w3schools.com/nodejs/default.asp"
    ],
    [
        "title" => "DSA",
        "desc"  => "Data structure and algorithms",
        "btn"   => "Learn Dsa",
        "color" => "#fca49e",
        "link"  =>"https://www.w3schools.com/dsa/index.php"
    ],
     [
        "title" => "TYPESCRIPT",
        "desc"  => "A typed superset of javascript",
        "btn"   => "Learn Typescript",
        "color" => "#f5ee90",
        "link"  =>"https://www.w3schools.com/typescript/index.php"
    ],
     [
        "title" => "SWIFT",
        "desc"  => "A powerful,general-purpose,and open-source programming language devloped of appplce inc",
        "btn"   => "Learn Swift",
        "color" => "#cbddf7",
        "link"  =>"https://www.w3schools.com/swift/default.asp"
    ],
 [
        "title" => "SASS",
        "desc"  => "A powerful css preprocessor scripting language",
        "btn"   => "Learn Sass",
        "color" => "#cbddf7",
        "link"  =>"https://www.w3schools.com/sass/default.asp"
    ],
     [
        "title" => "VUE",
        "desc"  => "an open-source JavaScript framework used for building user interfaces (UIs) and single-page applications",
        "btn"   => "Learn Vue",
        "color" => "#f5ee90",
        "link"  =>"https://www.w3schools.com/vue/index.php"
    ],
    [
        "title" => "SCIPY",
        "desc"  => "an open-source library for the Python programming language used for scientific and technical computing",
        "btn"   => "Learn Scipy ",
        "color" => "#ffc0c7",
        "link"  =>"https://www.w3schools.com/python/scipy/index.php"
    ],
    [
        "title" => "AWS",
        "desc"  => "Amazon Web Services",
        "btn"   => "Learn Aws",
        "color" => "#cde6b0",
        "link"  =>"https://www.w3schools.com/aws/index.php"
    ],
    [
        "title" => "CYBERSCURITY",
        "desc"  => "Python, JavaScript, C/C++, and SQL",
        "btn"   => "Learn Cyberscurity",
        "color" => "#cde6b0",
        "link"  =>"https://www.w3schools.com/cybersecurity/index.php"
    ],
    [
        "title" => "DATASCIENCE",
        "desc"  => "Python, R, and SQL",
        "btn"   => "Learn Datascience",
        "color" => "#ffc0c7",
        "link"  =>"https://www.w3schools.com/datascience/default.asp"
    ],
    [
        "title" => "INTRO TO PROGRAMMING",
        "desc"  => "Learning the Basics",
        "btn"   => "Learn Intro to programming",
        "color" => "#96d4d4",
        "link"  =>"https://www.w3schools.com/programming/index.php"
    ],
    [
        "title" => "HTML & CSS",
        "desc"  => "foundational technologies or building blocks of the web",
        "btn"   => "Learn Html & Css",
        "color" => "#e9d2d4",
        "link"  =>"https://www.w3schools.com/htmlcss/default.asp"
    ],
    [
        "title" => "BASH",
        "desc"  => "Bourne-again shell",
        "btn"   => "Learn Bash",
        "color" => "#e9d2d4",
        "link"  =>"https://www.w3schools.com/bash/index.php"
    ],
    [
        "title" => "RUST",
        "desc"  => "Rust is a modern systems programming language",
        "btn"   => "Learn Rust",
        "color" => "#96d4d4",
        "link"  =>"https://www.w3schools.com/rust/index.php"
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Courses</title>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        min-height: 100vh;
        background: linear-gradient(135deg, #1f2933, #111827);
        font-family: 'Segoe UI', system-ui, sans-serif;
        color: #111;
    }

    .container {
        max-width: 1300px;
        margin: 60px auto;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .card {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 45px rgba(0,0,0,0.4);
    }

    .card h1 {
        font-size: 32px;
        margin-bottom: 12px;
        letter-spacing: 1px;
        color: #111827;
    }

    .card p {
        font-size: 16px;
        line-height: 1.6;
        color: #374151;
        margin-bottom: 30px;
    }

    .card a {
        text-decoration: none;
    }

    .card button {
        padding: 14px 42px;
        border-radius: 999px;
        border: none;
        font-size: 15px;
        font-weight: 600;
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .card button:hover {
        background: linear-gradient(135deg, #4f46e5, #3730a3);
        transform: scale(1.05);
    }

    @media (max-width: 600px) {
        .card {
            padding: 30px 20px;
        }

        .card h1 {
            font-size: 26px;
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

            <?php if(isset($course['link'])): ?>
                <a href="<?= $course['link']; ?>">
                    <button><?= $course['btn']; ?></button>
                </a>
            <?php else: ?>
                <button><?= $course['btn']; ?></button>
            <?php endif; ?>

        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
