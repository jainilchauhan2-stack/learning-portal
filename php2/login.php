<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
*{
    font-family: Arial, Helvetica, sans-serif;
}

body{
    height: 100vh;
    background: linear-gradient(135deg,#667eea,#764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-box{
    background: #fff;
    padding: 35px;
    width: 320px;
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0,0,0,.3);
    text-align: center;
}

.login-box h2{
    margin-bottom: 25px;
    color: #333;
}

.login-box input{
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

.login-box input:focus{
    border-color: #667eea;
}

.login-box button{
    width: 100%;
    padding: 10px;
    margin-top: 15px;
    border: none;
    border-radius: 5px;
    background: #667eea;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

.login-box button:hover{
    background: #5a67d8;
}

.login-box p{
    margin-top: 15px;
    font-size: 14px;
}

.login-box a{
    color: #667eea;
    text-decoration: none;
}
</style>
</head>

<body>

<div class="login-box">
    <h2>Welcome Back</h2>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <p>New user?
        <a href="signup.php">Create account</a>
    </p>
</div>

<?php
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cn = mysqli_connect("localhost","root","","login");
    if(!$cn){
        die("Database connection failed");
    }

    $stmt = mysqli_prepare($cn,
        "SELECT * FROM login WHERE username=? AND password=?");
    mysqli_stmt_bind_param($stmt,"ss",$username,$password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['user'] = $username;
        header("Location: logout.php?name=".$username);
        exit;
    }else{
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

</body>
</html>
