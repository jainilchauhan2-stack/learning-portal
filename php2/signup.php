<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Body gradient background */
body {
    height: 100vh;
    background: linear-gradient(135deg,#667eea,#764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Card container */
.card {
    background: #fff;
    width: 380px;
    padding: 50px 40px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    position: relative;
    overflow: hidden;
    text-align: center;
    animation: slideUp 0.8s ease;
}

/* Background animated circles */
.card::before,
.card::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    opacity: 0.2;
}

.card::before {
    width: 200px;
    height: 200px;
    background: #ff6a95;
    top: -80px;
    right: -80px;
}

.card::after {
    width: 300px;
    height: 300px;
    background: #6a11cb;
    bottom: -150px;
    left: -150px;
}

/* Slide animation */
@keyframes slideUp {
    from { transform: translateY(50px); opacity:0; }
    to { transform: translateY(0); opacity:1; }
}

.card h2 {
    margin-bottom: 30px;
    color: #333;
    font-weight: 600;
    font-size: 28px;
}

/* Input boxes */
.input-box {
    margin-bottom: 20px;
    position: relative;
}

.input-box i {
    position: absolute;
    top: 12px;
    left: 12px;
    color: #667eea;
}

.input-box input {
    width: 100%;
    padding: 12px 12px 12px 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 15px;
    outline: none;
    transition: 0.3s;
}

.input-box input:focus {
    border-color: #667eea;
    box-shadow: 0 0 8px rgba(102,126,234,0.4);
}

/* Button */
.btn {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 50px;
    background: linear-gradient(135deg,#667eea,#764ba2);
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.btn:hover {
    background: linear-gradient(135deg,#764ba2,#667eea);
    transform: scale(1.05);
}

/* Footer text */
.card p {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #555;
}

.card a {
    text-decoration: none;
    color: #667eea;
    font-weight: 600;
}

/* Responsive */
@media(max-width: 420px) {
    .card {
        width: 90%;
        padding: 40px 20px;
    }
}
</style>
</head>
<body>

<div class="card">
    <h2>Create Account</h2>

    <form method="post">
        <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="input-box">
            <i class="fas fa-user-circle"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn" type="submit" name="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="login.php">Login</a></p>
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
    header("Location: login.php?name=".$username);
    exit;
}
?>

</body>
</html>
