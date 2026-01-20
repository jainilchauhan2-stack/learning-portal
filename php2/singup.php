<html>
<head>
<title>sing up page</title>
</head>
<center>
<h2> WELCOME TO REGISTER PAGE </h2>
<body>
<style>
h2{
	color:white;
  }
body{
	margin-top:10%;
	background-color:#b1a377;
	}
form{
	background-color:white;
	padding:50px;
	border:1px solid black;
	margin-left:33%;
	margin-right:33%;
	}
	</style>
<form method="post">
		SIGN UP PAGE<br>
		<br>
NAME : <input type="text" name="name" required maxlength=10<br>
<br><br>
EMAIL : <input type="text" name="email" required maxlength=10<br>
<br><br>
USERNAME : <input type="text" name="username" required maxlength=10<br>
<br><br>
PASSWORD : <input type="text" name="password" required maxlength=10<br>
<br><br>
<input type="submit" name="submit" value="sing up"><br><br>
you have allready account : <a href="login.php">login</a>
</form>
</body>
<?php
if(isset($_REQUEST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	extract($_REQUEST);
	$cn=mysqli_connect("localhost","root","")or die("connection is faild");
	mysqli_select_db($cn,"login")or die("data base not found");
$result=mysqli_query($cn,"insert into login(name,email,username,password)values('$name','$email','$username','$password')")or die("data is not found");
    header("location:logout.php? name=".$username);
	//$insert=mysqli_query($cn,$result);
	
	/*if(mysqli_num_rows($result)>0)
	{
		$_SESSION['user']=$username;
		header("location:logout.php? name=".$username);
	}
	else
	{
		echo "<br><br>invaild username and password";
	}*/
}
?>
	</center>
	</html>