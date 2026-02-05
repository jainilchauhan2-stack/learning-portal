<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Body with gradient */
body {
    height: 100vh;
    background: linear-gradient(135deg, #00c6ff, #0072ff); /* Cool blue gradient */
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Login card */
.login-box {
    background: #fff;
    width: 360px;
    padding: 50px 40px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    position: relative;
    text-align: center;
    animation: slideUp 0.8s ease;
    overflow: hidden;
}

/* Background decorative circles */
.login-box::before,
.login-box::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    opacity: 0.2;
}

.login-box::before {
    width: 150px;
    height: 150px;
    background: #00f0ff;
    top: -50px;
    right: -50px;
}

.login-box::after {
    width: 200px;
    height: 200px;
    background: #0052ff;
    bottom: -80px;
    left: -80px;
}

/* Slide-up animation */
@keyframes slideUp {
    from { transform: translateY(50px); opacity:0; }
    to { transform: translateY(0); opacity:1; }
}

.login-box h2 {
    margin-bottom: 30px;
    color: #333;
    font-weight: 600;
    font-size: 28px;
}

/* Input boxes with icons */
.input-box {
    margin-bottom: 20px;
    position: relative;
}

.input-box i {
    position: absolute;
    top: 12px;
    left: 12px;
    color: #0072ff;
}

.input-box input {
    width: 100%;
    padding: 12px 12px 12px 40px;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 15px;
    outline: none;
    transition: 0.3s;
}

.input-box input:focus {
    border-color: #0072ff;
    box-shadow: 0 0 8px rgba(0,114,255,0.4);
}

/* Button */
.login-box button {
    width: 100%;
    padding: 14px;
    margin-top: 10px;
    border: none;
    border-radius: 50px;
    background: linear-gradient(135deg, #00c6ff, #0072ff);
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.login-box button:hover {
    background: linear-gradient(135deg, #0072ff, #00c6ff);
    transform: scale(1.05);
}

/* Footer text */
.login-box p {
    margin-top: 20px;
    font-size: 14px;
    color: #555;
}

.login-box a {
    color: #0072ff;
    text-decoration: none;
    font-weight: 600;
}

/* Responsive */
@media(max-width: 420px) {
    .login-box {
        width: 90%;
        padding: 40px 20px;
    }
}
</style>
</head>
<body>

<div class="login-box">
    <h2>Welcome Back</h2>

    <form method="post">
        <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" name="login">Login</button>
    </form>

    <p>New user? <a href="signup.php">Create account</a></p>
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
        header("Location: home.php?name=".$username);
        exit;
    }else{
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

</body>
</html>
