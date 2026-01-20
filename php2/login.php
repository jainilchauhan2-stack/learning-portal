<?php
session_start()
?>
<html>
<head>
<title>login page</title>
</head>
<center>
<h2> WELCOME TO LOGIN PAGE </h2>
<style>
h2{
	color:black;
	}
body{
	margin-top:15%;
	background-color:#b1b1cf;
	}
form{
	background-color:white;
	padding:50px;
	border:1px solid black;
	margin-left:33%;
	margin-right:33%;
	}
	</style>
<body>
<form method="post">
		LOGIN PAGE<br>
		<br>
USERNAME : <input type="text" name="username" required maxlength=10<br>
<br><br>
PASSWORD : <input type="text" name="password" required maxlength=10<br>
<br><br>
<input type="submit" name="login"><br><br>
if you have first time use : <a href="singup.php">Sing up</a>
</body>
<?php
if(isset($_REQUEST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	extract($_REQUEST);
	$cn=mysqli_connect("localhost","root","")or die("connection is faild");
	mysqli_select_db($cn,"login")or die("data base not found");
	$result=mysqli_query($cn,"select * from login where username='$username' and password='$password'")or die("data is not found");
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['user']=$username;
		header("location:logout.php? name=".$username);
	}
	else
	{
		echo "<br><br>invaild username and password";
	}
}
?>
	</form>
	</center>
	</html>
		



