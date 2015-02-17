<?php 
	require "home.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register With Us</title>
</head>
<body>
	<?php 
		require "connection.php";
		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobno = $_POST['phone'];
			$pass1 = $_POST['password'];
			$pass = $_POST['confpassword'];

			if($pass1 == $pass){
				$register = "INSERT INTO electricals_tbl(name, email, mobno, pass) VALUES ('{$name}','{$email}','{$mobno}','{$pass}')";
				echo "hey";
				$result = mysql_query($register);
				if($result){
					die('could not inserted into table.' . mysql_error());
				}
				echo 'inserted to table.';
			}
			echo "password does not match. Try again.";
		}
	?>
 <h3>Add details.</h3>
 <form>
 <table>
	 	<tr>
		 	<td><label>Name</label></td>
		 	<td><input name="name" type="text" id="user_name" ></td>
	 	</tr>
	 	<tr>
		 	<td><label>Email</label></td>
		 	<td><input name="email" type="text" id="user_email" ></td>
	 	</tr>
	 	<tr>
		 	<td><label>Phone</label></td>
		 	<td><input name="phone" type="text" id="user_phone" ></td>
	 	</tr>
	 	<tr>
	 		<td><label>Password</label></td>
	 		<td><input name="password" type="password" id="pass" ></td>
	 	</tr>
	 	<tr>
	 		<td><label>Confirm Password</label></td>
	 		<td><input name="confpassword" type="password" id="conf_pass" ></td>
	 	</tr>
	 	<tr>
		 	<td></td>
		 	<td><input name="submit" type="submit" value="Signup" ></td>
	 	</tr>
 	</table>
 </form>
</body>
</html>