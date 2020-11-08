<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="css/singup.css">

	<script type="text/javascript">  

function  funk(){  
		var number=document.getElementById("nic").value; 
		var len = number.length;
		if (len != 10) {
			alert("NIC should be 10 characters!!!");  
		}

		
} 

function fun(){
	 var number=document.getElementById("name").value; 
	 var letters = /^[A-Za-z]+$/;
      if(!isNaN(number)){
      		alert("name should not  be  a no");  
      }
}




</script>  

</head>
<body>

	<div class="all">
		<div class="topbar clearfix">
			<div class="topBarLinks">
				<ul>
					<li><a href="singup.php">Sign up</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a style="margin-left: 400px;" href="index.php">HOME</a></li>
					
				</ul>
			</div><!--topBarLinks-->
			
		</div><!--topbar-->


		<header class="clearfix">
			<div class="logo">
				<table>
					<tr>
						<td><img src="img/l111.jpg"></td>
						<td><h1>VISION CENTER</h1></td>
					</tr>
				</table>
				
				
				

			</div><!--logo-->
			<div class="socialmedia">
				<ul>
					<li><a href="https://www.facebook.com"><img src="img/fb.png"></i></a></li>
					<li><a href="https://www.instagram.com/nibmpune"><img src="img/insta.jpg"></i></a></li>
					<li><a href="https://www.twitter.com/nibmofficial"><img src="img/twitter.png"></i></a></li>
					<li><a href="https://plus.google.com/108626736288103864338"><img src="img/gp.png"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCiPesfrP9o0VW_TOgQpW0Hg"><img src="img/ytd.png"></i></a></li>
				</ul>
				
			</div><!--socialmedia-->
	</header>

		<nav>
			<ul>
				<li><a href="#"></a></li>
				<li>Signup</li>
				<li><a href="#"></a></li>
					
				
			</ul>
	</nav>


	<img src="img/sign1.jpg" style="width: 1000px; height: 400px;">
	<hr>

	<div class="bottom">
		<table>
			
			<tr> 
				<td>
					<div class="leftbottom ">
						<h3>RAYBAN</h3>
						<ul><li> Rayban sunglasses from 5000/= </li>
							<li> Plastic frames 2000/= </li>

						</ul> 
						<h3>POLICE</h3>
						<ul><li> Police sunglasses from 8500/= </li>
							<li> Police frames from 5000/= </li>

						</ul> 
						<h3>FRAMES</h3>
						<ul><li> Plastic frames from 6000/= </li>
							<li> Plastic frames from 4000/= </li>

						</ul> 

					</div><!--leftbottom-->
					
				</td>
				<td>
					
					<div class="rightbottom ">
			<div class="lform clearfix">
						
					<form action="midsingup.php" method="GET">
							<h1>Applicant Details</h1>
						<table border="0" style="font-size: 18px">
							<tr>
								<td>NIC :</td>
								<td><input type="text" name="nic" id="nic" required onblur="funk()"></td>
							</tr>
							<tr>
								<td>name :</td>
								<td> <input type="text" name="name" id="name" required onblur="fun()"></td>
							</tr>
							<tr>
								<td>address :</td>
								<td><input type="text" name="address" id="ads" required></td>
							</tr>
							<tr>
								<td>gender :</td>
								<td> <input type="radio" name="gender" value="male" checked>Male <input type="radio" name="gender" value="Female">Female</td>
							</tr>

							<tr>
								<td>Email :</td>
								<td><input type="text" name="Email" id="eml" required></td>
							</tr>
							<tr>
								<td>Password :</td>
								<td><input type="password" name="passord" id="pass" required></td>

							</tr>
							<tr>
								<td><input type="submit" name="" value="create account"></td>
								<td><input type="reset" name="" value="Reset"></td>
							</tr>
						</table>


					</form>

			</div><!--lform-->

		</div><!--rightbottom-->

				</td>
			</tr>

		</table>

		<div class="marq">
			<marquee behavior=scroll direction="right" scrollamount="12">
				<img src="img/marr.jpg">
				</marquee>
				
		</div>	

	</div><!--bottom-->

		<div class="bottomdown">
			
			<div class="object">
				<h1>Vison Center</h1>
				<p><b>42/35,Bus Stand,Negambo.
				</p>
				<p><b>25/48Negambo Road,Negambo.
				</p>
			</div>
			<div class="object clearfix">
				<h1>Contacts</h1>

				Hotline Numbers
				+94 115 321 000 - 31 <br> 
				+94 117 322 000 <br>	
				 
				+94 112 667 779 <br>
				
				+94 112 685 706 <br>
				
				+94 115 650 656 <br>
				General Numbers
				+94 112 673 404,<br> +94 112 692 372, +94 112 684 805 <br>
			</div>
			<div class="object clearfix">
				<h1>Branches</h1>
				Nigambo <br>
				Jaela <br>
				
			</div>

		</div><!--bottomdown-->

	</div><!--all-->

</body>
</html>