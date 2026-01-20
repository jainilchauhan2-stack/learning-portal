<center>
<?php
session_start();
if(empty($_SESSION['user']))
	header("location:login.php");
else
	echo "welcome".$_REQUEST['name'];
?>
<html>
	
	<form>
	<input type="submit" name="logout" value="logout">
	</form>
	
</html>
<?php
if(isset($_REQUEST['logout']))
{
	unset($_SESSION["user"]);
	header("location:home.php");
}
?>
</center>
