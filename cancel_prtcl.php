<?php
	require_once 'dbconnect.php';
	
		extract($_GET);
		
		$query = 'UPDATE topup
				SET
				id_statustrx = 3
				WHERE id_topup = "'.$f.'"';			

		$result = mysqli_connect($query);
		
		if($result)
		{
			$_SESSION['cancel'] = 1;
			header('Location: index.php');
		}
		else
		{
			echo 'Query insert failed';
		}

?>