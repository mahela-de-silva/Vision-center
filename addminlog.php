<?php 
	
	if (isset($_POST['email'])) {
		$uemail=$_POST['email'];
		$pass=$_POST['password'];

			
			if ($uemail == "addmin" && $pass == "add")
			{
				 //echo "login sucses";
				echo "<script type='text/javascript'>alert('login sucess');</script>";
				header('Location: view.php');
				

				
			}
			else
			{
				echo "<script type='text/javascript'>alert('login Fail check email and password ');</script>";
			}

		//echo $uemail;
		//echo $pass;
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/addminlog.css">
</head>
<body>

	<div class="all">
		<form method="POST" action="#">
			<h1>Login </h1>
			<div class="frm">
					<div class="form_input">
						
							<input type="text" name="email" id="eml" placeholder="Enter your email " required/>
					</div>
					<div class="form_input">
						
							
							<input type="password" name="password" id="pas" placeholder="Enter your password " required/>

					</div>

						<input type="submit" name="submit" value="login" class="btnlogin" >
			</div>
			
			
		</form>

	</div><!--all-->

</body>
</html>