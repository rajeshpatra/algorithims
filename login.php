<?php 
	require 'home.php';
	require 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php 
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$query = "SELECT * FROM electricals_tbl WHERE email='{$email}' AND pass='{$pass}' ";
		$result = mysql_query($query);
		if(!$result){
			die('error' . mysql_error());
		} else {
			$row = mysql_fetch_assoc($result);
			echo "Hello " . $row['name'];
		}
	}
 ?>
<h3>Login to drive your car.</h3>
	<form method="post" action="login.php">
		<table>
			<tr>
				<td><label>Email</label></td>
				<td><input name="email" type="text" id="user_email" placeholder="Your Email"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input name="password" type="password" id="pass" placeholder="Your Password" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input name="login" type="submit" value="Login" ></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="reset.php">Forgot Password? Click here.</a><td>
			</tr>
		</table>
	</form>
</body>
</html>