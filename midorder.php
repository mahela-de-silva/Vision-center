
<?php require_once('connection/conn.php');  ?>
<?php 
		
		$nic=$_GET["nn"];
		$name1=$_GET["name"];
		$tele=$_GET["tp"];
		$email=$_GET["eml"];
		$password=$_GET["psd"];
		$item=$_GET["ino"];
		
		
		

		echo $nic;
		echo $name1;
		echo $tele;
		echo $email;
		echo $password;
		echo $item;

		

		$sql="insert into purches values('$nic','$name1','$tele','$email','$password',' $item')";

		if (mysqli_query($connection,$sql)) {
			
			header('Location: items.php');
			 echo "order sucsess";
		}
		else
		{
			echo "Error".mysqli_error($connection);
		}



	mysqli_close($connection);
	

	//move_uploaded_file($tmp_name, $rsheet)




 ?>