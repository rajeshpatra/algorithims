<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
<?php 
	require "connection.php";
	if(isset($_POST['change'])){

		$email = $_POST['email'];
		$pass = $_POST['password'];
		$pass1 = $_POST['confpassword'];
		if ($pass == $pass1){

			$query = "SELECT * FROM electricals_tbl WHERE email='{$email}' ";
			$result = mysql_query($query);

			if($result){
				if(mysql_num_rows($result) == 1){

					$query1 = "UPDATE electricals_tbl SET pass='{$pass}' WHERE email='{$email}' ";
					$result1 = mysql_query($query1)

					if($result1){
						echo "password changed.";
					}
				}
			}
		}
	}
 ?>
<h3>Enter your new password.</h3>
	<form>
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