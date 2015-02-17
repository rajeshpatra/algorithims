<!DOCTYPE html>
<html>
<head>
	<title> Creating database.
	</title>
</head>
<body>
<?php 
	require "connection.php";
	$query = 'CREATE DATABASE ELECTRICALS';
	$return = mysql_query($query, $con);
		if (!$return){
			die("Couldn't create database\n" . mysql_error());
		}
		echo "Database ELECTRICALS created successfully\n";
?>
</body>
</html>