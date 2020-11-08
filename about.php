<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<div class="all">
		
		<div class="topbar clearfix">
			<div class="topBarLinks">
				<ul>
					<li><a href="singup.php">Sign up</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a style="margin-left: 400px;" href="index.php">HOME</a></li>
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
				<li><a href="#"></a></li>
				<li>About Us</li>
				<li><a href="#"></a></li>
					
				
			</ul>
		</nav>

		
			
			<h3 style="color: black; text-align: justify; padding-left: 80px; padding-right: 80px; ">We are a team of well-qualified eye care professionals who have been treating patients with all types of eye disorders for the last 20 years. One major observation during our service was that many patients had aggravated their eye conditions due to the negligence and lack of knowledge about their eye problem. Our prime task is to find a permanent solution to this issue and to help patients to detect their eye disorders as early as possible in order to get their conditions treated by trusted and qualified eye care professional throughout Sri Lanka.</h3>

		

		<div class="midbanner clearfix">
		
		<!--<img src="img/mid.jpg">-->

					<div class="baner clearfix">
								
							<div id="slider">
								<div id="box">
									<img src="a.jpg">
								</div>

								<!-- buttons for controls slider -->
								<button class="prew " onclick="prewImage()"></button>
								<button class="next " onclick="nextImage()"></button>
							</div>



						  <script type="text/javascript">

						  	var slider_content = document.getElementById('box');

						  	// contain images in an array
						    var image = ['a','b', 'c', 'd','e'];

						    var i = image.length;


						    // function for next slide 

						    function nextImage(){
						    	if (i<image.length) {
						    		i= i+1;
						    	}else{
						    		i = 1;
						    	}
						    	  slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
						    }


						    // function for prew slide

						    function prewImage(){

						    	if (i<image.length+1 && i>1) {
						    		i= i-1;
						    	}else{
						    		i = image.length;
						    	}
						    	  slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";

						    }

						  
						  // script for auto image slider

						  setInterval(nextImage , 3000);

						  </script>

					</div><!--baner-->	

		</div><!--midbanner-->

		<table style="background-color: #0d0d0d;">
			<tr>
				<td width="500px;" style="padding-left: 100px;  color: white;"><h1><i>Our Mission</i></h1>
					<p><i>"To present an online platform to find the best suited eye care optical servicers"</i></p>
				</td>
				<td  style="padding-left: 100px; color: white;"><h1><i>Our Vision</i></h1>
					<p><i>"To be the best online service provider in Sri Lanka for patients with all eye disorders to meet the most qualified eye care professionals within their proximity."</i></p>
				</td>
			</tr>


		</table>

		<table style="background-color: black">
			<tr>
				<td style="text-align: center;"> <h1>Vision Center</h1>
                 <i>We are a team of well-qualified eye care professionals who have been treating patients with all types of eye disorders for the last 20 years. One major observation during our service was that many patients had aggravated their eye conditions due to the negligence and lack of knowledge about their eye problem. Our prime task is to find a permanent solution to this issue and to help patients to detect their eye disorders as early as possible in order to get their conditions treated by trusted and qualified eye care professional throughout Sri Lanka.
					</i>
				</td>
			</tr>
		</table>

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