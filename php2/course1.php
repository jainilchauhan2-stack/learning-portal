<?php
$courses = [
	[	
		"title" => "HTML",
        "desc"  => "The language for building web pages",
        "btn"   => "Learn HTML",
        "color" => "#d9eee1",
	],
	[	
		"title" => "CSS",
        "desc"  => "The language for styling web pages",
        "btn"   => "Learn CSS",
        "color" => "#fff4a3",
	],
	[	
		"title" => "Javascript",
        "desc"  => "The language for programming web pages",
        "btn"   => "Learn JavaScript",
        "color" => "white",
	],
	[	
		"title" => "Python",
        "desc"  => "A popular programming language",
        "btn"   => "Learn Python",
        "color" => "#f3ecea",
	],
	[	
		"title" => "SQL",
        "desc"  => "A language for accessing databases",
        "btn"   => "Learn SQL",
        "color" => "#96d4d4",
	],
    [
        "title" => "PHP",
        "desc"  => "A web server programming language",
        "btn"   => "Learn PHP",
        "color" => "#f2b6d8"
    ],
    [
        "title" => "jQuery",
        "desc"  => "A JS library for developing web pages",
        "btn"   => "Learn jQuery",
        "color" => "#f4e4b3"
    ],
    [
        "title" => "Java",
        "desc"  => "A programming language",
        "btn"   => "Learn Java",
        "color" => "#eeeeee"
    ],
    [
        "title" => "C++",
        "desc"  => "A programming language",
        "btn"   => "Learn C++",
        "color" => "#e6f0fa"
    ]
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
