<style>

        #form {
			display: none;
            border: solid gray 1px;
            width: 50%;
            border-radius: 5px;
            margin: 100px auto;
            background: white;
		}
		
		.input {
			width: 100%;
		}

</style>

<script>
function openForm() {
  document.getElementById("form").style.display = "block";
}

function closeForm() {
  document.getElementById("form").style.display = "none";
}
</script>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	

	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>

	<br>

	<div id="fh5co-content" class="fh5co-no-pd-top">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Despre noi</span></h2>
				</div>
			</div>
			</div>
			<div class="row">
			<div class = "container">
						<div class="side animate-box">
							<div class="fh5co-staff">
								<img src="images/hands.jpg">
								<h3>Club</h3>
								<strong class="role">voluntariat</strong>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla. 
									
									Ornare aenean euismod elementum nisi quis eleifend quam. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Libero justo laoreet sit amet cursus. Pulvinar mattis nunc sed blandit libero volutpat. Urna porttitor rhoncus dolor purus non enim praesent. Quam vulputate dignissim suspendisse in. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Duis convallis convallis tellus id interdum velit laoreet id. Amet nisl suscipit adipiscing bibendum est ultricies. Vulputate sapien nec sagittis aliquam malesuada.
								 </p>
								<ul class="fh5co-social-icons">
									<li><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/" target="_blank"><i class="icon-instagram"></i></a></li>
								</ul>
							</div>
						</div>
				</div>
				
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2><span>Membri</span></h2>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3">
					<div class="fh5co-staff">
						<?php
							$link = mysqli_connect("localhost", "root", "", "login");
							if (!$link)
								die("Nu ma pot conecta la server! Citeste o carte!");
						
							$mysql_server = "localhost";
							$mysql_user = "root";
							$mysql_password = "";
							$mysql_database = "login";

							$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_database);

							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
							
							$sql = "SELECT poza, nume, functie, descriere, facebook FROM membri";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									?>
										<img src="<?=$row['poza']?>">
										<h3><?=$row['nume']?></h3>
										<strong class="role"><?=$row['functie']?></strong>
										<p><?=$row['descriere']?></p>
										<ul class="fh5co-social-icons">
											<li><a href="<?=$row['facebook']?>"><i class="icon-facebook"></i></a></li>
										</ul>
									<?php
								}
							} else {
								echo "0 results";
							}
							
							$conn->close(); 

							?>

					</div>
					

				</div>

				<?php
					if(isAdmin(login()))
							{
								?>
									<div class="form-group row">
										<div class="col-md-6 col-md-offset-3">
											<input type="button" id="submit" class="btn btn-primary" onclick="openForm()" value="Adauga Membru">
										</div>
									</div>

									<div class="container" id="form">
										<form class="form-group" action="add.php" method="POST">
											<br>
											<p>
												<label> Nume: </label>
												<br>
												<input class="input" type="text" id="nume" name="nume">  
											</p>
											
											<p>
												<label> Link pentru poza: </label>
												<br>
												<input class="input" type="text" id="poza" name="poza">  
											</p>
											
											<p>
												<label> Functie: </label>
												<br>
												<input class="input" type="text" id="functie" name="functie">  
											</p>
											
											<p>
												<label> Descriere: </label>
												<br>
												<input class="input" type="text" id="descriere" name="descriere">  
											</p>
											<p>
												<label> Link de la profilul de Facebook: </label>
												<br>
												<input class="input" type="text" id="facebook" name="facebook">  
											</p>
											<p>
												<button class="btn btn-primary" type="submit" id="btn" value="Add">
													Adauga
												</button>  
												<button type="button" class="btn btn-secondary" onclick="closeForm()">
													Inchide
												</button>
											</p>
										</form>
									</div>

								<?php
							}
							?>
			</div>
		</div>
	</div>
<!--
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>My Posts</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<div class="title text-center">
							<span class="posted-on">Nov. 15th 2016</span>
							<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
							<span class="category">Lifestyle</span>
						</div>
						<a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
						<div class="blog-text text-center">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="fh5co-social-icons">
								<li>Share:</li>
								<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<div class="title text-center">
							<span class="posted-on">Nov. 15th 2016</span>
							<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
							<span class="category">Lifestyle</span>
						</div>
						<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
						<div class="blog-text text-center">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="fh5co-social-icons">
								<li>Share:</li>
								<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<div class="title text-center">
							<span class="posted-on">Nov. 15th 2016</span>
							<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
							<span class="category">Lifestyle</span>
						</div>
						<a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
						<div class="blog-text text-center">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="fh5co-social-icons">
								<li>Share:</li>
								<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
						-->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

