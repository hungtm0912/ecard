<?php
	require_once 'dbconnect.php';
	extract($_POST);
	$query = 'SELECT * 
			FROM user
			WHERE email ="'.$email.'" AND password ="'.$password.'"';
	
	$result = mysqli_connect($query);
	
		
		$_SESSION['email'] = $email;
		$_SESSION['id_user'] = $row['id_user'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['id_status'] = $row['id_status'];
		$_SESSION['no_hp'] = $row['no_hp'];
		$_SESSION['saldo'] = $row['saldo'];

		//echo $row['uname'];
		$_SESSION['login'] = 1;
		if($_SESSION['level'] == 1)
			header('Location: indexadmin.php');
		else
			header('Location: index.php');
		$_SESSION['login'] = 2;

?>