<?php
	include "dbconnect.php";
	
	extract($_GET);
	
	$query = 'SELECT saldo, jml_topup, u.id_user
			  FROM user u 
			  	   JOIN topup tt
			  	   ON u.id_user = tt.id_user
			  WHERE tt.id_topup = '.$t;
	$result = mysqli_connect($query);
			if($result)
			{
				$query = 'UPDATE user
						  SET saldo = '.$saldoakhir.'
						  WHERE id_user = '.$row['id_user'];
				mysqli_connect($query);
				if($result)
					header('Location: index.php');
				else
					echo 'topup failed';
			}
			else
				echo 'update status failed';
?>