<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}

body{
    height: 100vh;
    background: linear-gradient(120deg,#667eea,#764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
}

.card{
    background: white;
    width: 360px;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 25px 50px rgba(0,0,0,.3);
    animation: slideUp .8s ease;
}

@keyframes slideUp{
    from{ transform: translateY(50px); opacity:0; }
    to{ transform: translateY(0); opacity:1; }
}

.card h2{
    text-align: center;
    margin-bottom: 25px;
    color: #333;
}

.input-box{
    margin-bottom: 15px;
}

.input-box input{
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 15px;
    outline: none;
}

.input-box input:focus{
    border-color: #667eea;
}

.btn{
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: #667eea;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: .3s;
}

.btn:hover{
    background: #5a67d8;
}

.card p{
    text-align: center;
    margin-top: 18px;
    font-size: 14px;
}

.card a{
    text-decoration: none;
    color: #667eea;
    font-weight: 600;
}
</style>
</head>

<body>

<div class="card">
    <h2>Create Account</h2>

    <form method="post">
        <div class="input-box">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="input-box">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="input-box">
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn" type="submit" name="submit">Sign Up</button>
    </form>

    <p>Already have an account?
        <a href="login.php">Login</a>
    </p>
</div>

<?php
if(isset($_POST['submit']))
{
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cn = mysqli_connect("localhost","root","","login");
    if(!$cn){
        die("Database connection failed");
    }

    $stmt = mysqli_prepare($cn,
        "INSERT INTO login (name,email,username,password) VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$password);
    mysqli_stmt_execute($stmt);

    $_SESSION['user'] = $username;
    header("Location: logout.php?name=".$username);
    exit;
}
?>

</body>
</html>
