<?php
	session_start();
	include ("module/modul-conectare.php");
    include ("module/modul-functii.php");
    include ("module/modul-setari.php");
    $pagina = 'index';
    if (isset($_GET['pagina']))
        $pagina = $_GET['pagina'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Club de voluntariat </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
        <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="freehtml5.co" />

        <!-- 
        //////////////////////////////////////////////////////

        FREE HTML5 TEMPLATE 
        DESIGNED & DEVELOPED by FreeHTML5.co
            
        Website: 		http://freehtml5.co/
        Email: 			info@freehtml5.co
        Twitter: 		http://twitter.com/fh5co
        Facebook: 		https://www.facebook.com/fh5co

        //////////////////////////////////////////////////////
        -->

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

	<div id="page">
	<nav class="fh5co-nav " role="navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-sm-7 text-left menu-1">
								<ul>
                                    <li class="active"><a href="./?pagina=index">Acasa</a></li>
                                    <li><a href="./?pagina=about">Despre noi</a></li>
                                    <li><a href="./?pagina=proiecte">Proiecte</a></li>
									<!--<li class="has-dropdown">
										<a href="./?pagina=rotaQR">RotaQR</a>
										<ul class="dropdown">
											<li><a href="#">Liviu Rebreanu</a></li>
											<li><a href="#">Gheorghe Sincai</a></li>
										</ul>-->
                                    </li>
                                    
                                    <?php
                                        if( login() === false )
                                        {
                                            
                                            ?>
                                            <li><a href="./?pagina=logIn">Log in</a></li>
                                            <li><a href="./?pagina=signUp">Sign up</a></li>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <li class="nav-item">
												<a class="nav-link" href="logout.php">Log out</a>
												<li><a href="./?pagina=contact">Contact</a></li>
											</li>
											<?php
                                        }
									?>
									<li><a href="./?pagina=mesaje">Mesaje</a></li>
								</ul>
							</div>
							<div class="col-sm-5">
								<ul class="fh5co-social-icons">
									<li><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="https://www.facebook.com/" target="_blank"><i class="icon-instagram-with-circle"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
            </div>

            
            <div class="fh5co-loader"></div>
                
			

		<div class="container">
			<?php
				
				AfisareAlerta();
				
				$nf = "pagini/pagina-{$pagina}.php";
				if (file_exists($nf))
					include $nf;
				else
				{
					print("Boo-hoo-hoo!");
					?><img src="https://destepti.ro/wp-content/uploads/2014/04/Bufnita.jpg" height="auto" width="600"><?php 
				}
			?>
        </div>
		
		<br> <br>

        <div id="fh5co-facebook">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-0 text-center fh5co-heading ">
						<h2><span >Pozele noastre</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 nopadding animate-box">
					<div class="insta" style="background-image: url(images/1.jpg);"></div>
				</div>
				<div class="col-md-3 nopadding animate-box">
					<div class="insta" style="background-image: url(images/2.jpg);"></div>
				</div>
				<div class="col-md-3 nopadding animate-box">
					<div class="insta" style="background-image: url(images/3.jpg);"></div>
				</div>
				<div class="col-md-3 nopadding animate-box">
					<div class="insta" style="background-image: url(images/4.jpg);"></div>
				</div>
			</div>
		</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-6 fh5co-widget">
					<h4>Povestea noastra</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla. Ornare aenean euismod elementum nisi quis eleifend quam. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Libero justo laoreet sit amet cursus. Pulvinar mattis nunc sed blandit libero volutpat. Urna porttitor rhoncus dolor purus non enim praesent. Quam vulputate dignissim suspendisse in. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Duis convallis convallis tellus id interdum velit laoreet id. Amet nisl suscipit adipiscing bibendum est ultricies. Vulputate sapien nec sagittis aliquam malesuada.</p>
				</div>

				<div class="col-md-6 col-md-push-1">
					<h4>Informatii de contact</h4>
					<ul class="fh5co-footer-links">
						<li>
							str. Oarecare, nr. 1 (0.36 mi)
							<br> Londra 420266
						</li>
						<br>
						<li>1235 2355 98</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Club de voluntariat</small> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.facebook.com" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com" target="_blank"><i class="icon-instagram"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
        
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