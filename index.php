<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<div class="all">
		<div class="topbar clearfix">
			<div class="topBarLinks">
				<ul>
					<li><a href="singup.php">Sign up</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="addminlog.php">Addmin</a></li>
					
				</ul>
			</div><!--topBarLinks-->
			
		</div><!--topbar-->


		<header class="clearfix">
			<div class="logo">
				<div class="logo">
				<table>
					<tr>
						<td><img src="img/l111.jpg"></td>
						<td><h1>VISION CENTER</h1></td>
					</tr>
				</table>
				

			</div><!--logo-->
			<div class="socialmedia" style="padding-left: 150px;">
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
				
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="items.php">items</a></li>
				<li><a href="branch.php">Centers</a></li>
					
				
			</ul>
	</nav>

	<article>

			<p>

				We are a team of well-qualified eye care professionals who have been treating patients with all types of eye disorders for the last 20 years. One major observation during our service was that many patients had aggravated their eye conditions due to the negligence and lack of knowledge about their eye problem. Our prime task is to find a permanent solution to this issue and to help patients to detect their eye disorders as early as possible in order to get their conditions treated by trusted and qualified eye care professional throughout Sri Lanka. 
			</p>

	</article>


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

		

		<div class="bottom clearfix">
			

			<article>
				
				<h1>Our Service</h1>

				<li><h3>For Customers</h3></li>
					<p><ul><li>Registration is completely free of charge for all the patients.</li></p>
					<p><li>If you are not quite sure as to what exactly your eye problem is, we will help you to understand your eye condition and guide you to find <br> the most appropriate consultant ophthalmologist who can treat your eye condition</li></p>
					<p><li>We are a team of well-qualified eye care professionals who have been treating patients with all types of eye disorders for the last 20 years.</li></p>
					<P><li>One major observation during our service was that many patients had aggravated their eye conditions due to the negligence and lack <br> of knowledge about their eye problem.</li></P>
					<p><li>It is sure to keep up with the fast developing world by improving its service standards, 
                       products & technologies in the Optical business.</li></p>
                    <P><li>Vision Care introduced new technologies to the Eye Care field in Sri Lanka.</li></P>
                     <P><li>We provide scientifically a good service of well trained Optometrists using High Tech Equipment and 
                     offering world famous brands of<br> Spectacles, Contact lenses, Sunglasses & other optical /Ophthalmic products 
                     at reasonable prices.</li></P>   
				</ul>
			</article>

			</div><!--col-->

			
		<hr>

		<div class="partnars clearfix">
			
			<div class="item clearfix" style="background-color: black;">
				<marquee behavior=scroll direction="right" scrollamount="12">
				<img src="img/marr.jpg">
				</marquee>
				<marquee behavior=scroll direction="right" scrollamount="12">
				<h2 style="color: white;"> BEST OPTICALS COMPANY IN THE SRILANKA VISION CENTER IN COLOMBO </h2>
				</marquee>
			</div>
			

		</div><!--partnars-->
		<hr>
			
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