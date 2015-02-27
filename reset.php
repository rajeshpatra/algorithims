<?php 
	require 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<h2><a href="home.php">HOME</a></h2>
		<?php
			if(isset($_POST['change'])){
				$email = $_POST['email'];
				$pass = $_POST['password'];
				$pass1 = $_POST['confpassword'];
				if($pass == $pass1){
					$pass = md5($pass1);
					$query = "UPDATE electricals_tbl SET pass='{$pass}' WHERE email='{$email}'";
					$result = mysql_query($query);
					if (!$result){
						die('error' . mysql_errro());
					}else {
						echo "password changed.";
					}
				}else{
					echo "password doesn't match." . mysql_error();
				}
			}
		?>
	<h3>Enter your new password.</h3>
	<form method="post" action="reset.php">
		<table>
			<tr>
				<td><label>Email</label></td>
				<td><input name="email" type="text" placeholder="Your Email" ></td>
			</tr>
			<tr>
				<td><label>Pssword</label></td>
				<td><input name="password" type="password" id="new_pass" placeholder="New Password" ></td>
			</tr>
			<tr>
				<td><label>Confirm Password</label></td>
				<td><input name="confpassword" type="password" id="new_conf_pass" placeholder="Confirm Password" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input name="change" type="submit" value="Reset" ></td>
			</tr>
		</table>
	</form>
</body>
</html>