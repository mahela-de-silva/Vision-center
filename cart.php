<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<script>
		function  funk(){  
		var number=document.getElementById("nic").value; 
		var len = number.length;
		if (len != 10) {
			alert("NIC should be 10 characters!!!");  
		}



		
} 

function  myFunction(){  
		var number=document.getElementById("t").value; 
		var len = number.length;
		if (len != 10) {
			alert("telephone no should be 10 characters!!!");  
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
					
				</ul>
			</div><!--topBarLinks-->
			
		</div><!--topbar-->


		<header class="clearfix">
			<div class="logo">
				<h1>VISION CENTER</h1>
				

			</div><!--logo-->
			<div class="socialmedia">
				<ul>
					<li><a href="https://www.nibm.lk"><img src="img/fb.png"></i></a></li>
					<li><a href="https://www.instagram.com/nibmpune"><img src="img/insta.jpg"></i></a></li>
					<li><a href="https://www.twitter.com/nibmofficial"><img src="img/twitter.png"></i></a></li>
					<li><a href="https://plus.google.com/108626736288103864338"><img src="img/gp.png"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCiPesfrP9o0VW_TOgQpW0Hg"><img src="img/ytd.png"></i></a></li>
				</ul>
				
			</div><!--socialmedia-->
	</header>

	<nav>
			<ul>
				
				<li><a href="gallery.php"></a></li>
				<li>CART</li>
				<li><a href="branch.php"></a></li>
					
				
			</ul>
	</nav>


					<div class="mform">
						
						<form  method="POST" action="midcart.php">
							<h1 style="padding-top: 50px; color: blue">Cart Details</h1>
						<table border="0" style="font-size: 30px; margin-left: 350px; border: solid 1px white; color: blue;">
							<tr>
								<td>
									NIC : 
								</td>
								<td>
									<input type="text" name="nic" id="nic" required onblur=" funk()">
								</td>
							</tr>
							<tr>
								<td>
									 Item no : 
								</td>
								 <td>
								<input type="text" name="it" required >
								</td>
							</tr>

							<tr>
								<td>
									Telephone NO :
								</td>
								<td>
									<input type="text" name="t" id="t" required onblur="myFunction()">
								</td>
							</tr>
							<tr>
								<td><input type="submit" name="" value="Add cart" ></td>
								<td><input type="reset" name="" value="Reset"></td>
							</tr>

						</table>


						</form>

					</div><!--mform-->

					<div class="marq">
			<marquee behavior=scroll direction="right" scrollamount="12">
				<img src="img/marr.jpg">
				</marquee>
				
			</div>	<!--mrq-->

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