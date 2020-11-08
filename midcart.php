<?php require_once('connection/conn.php');  ?>

<?php 
	
	
		$item=$_POST['it'];
		$tele=$_POST['t'];
		$nic=$_POST['nic'];

		
			
		echo $nic;
		echo $item;
		echo $tele;

		$sql="insert into cart values('$nic','$item','$tele')";

		if (mysqli_query($connection,$sql)) {

			echo "<script type='text/javascript'>alert('Added to cart');</script>";

			header('Location: items.php');
			 
		}
		else
		{
			echo "Error".mysqli_error($connection);
		}



	mysqli_close($connection);
	

 ?>