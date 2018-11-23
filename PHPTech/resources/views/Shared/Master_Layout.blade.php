<!DOCTYPE html>
<html lang="en">
<head>
<title>Server &mdash; Colorlib Website Template</title>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/Layout.css">


<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/fl-bigmug-line.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/style.css">

</head>
<body>
	@yield('style')


	<div class="site-wrap">
		<div class="site-mobile-menu">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		<!-- .site-mobile-menu -->


		<div id="barreNavigation" class="site-navbar-wrap bg-white">
			<div class="site-navbar bg-dark">
				<div class="container py-1">
					<div class="row align-items-center">
						<div class="col-4 col-md-4 col-lg-8">
							<nav class="site-navigation text-left" role="navigation">
								<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
									<a href="#" class="site-menu-toggle js-menu-toggle text-white"><span
										class="icon-menu h3"></span></a>
								</div>

								<ul class="site-menu js-clone-nav d-none d-lg-block">
									<li class="active"><a href="Accueil">Accueil</a></li>
									<li><a href="domain.html">Domain</a></li>
									<li class="has-children"><a href="hosting.html">Hosting</a>
										<ul class="dropdown arrow-top">
											<li><a href="#">Shared Hosting</a></li>
											<li><a href="#">Dedicated Hosting</a></li>
											<li><a href="#">Premium Hosting</a></li>
											<li><a href="#">Cloud Hosting</a></li>
											<li class="has-children"><a href="#">Sub Menu</a>
												<ul class="dropdown">
													<li><a href="#">Menu One</a></li>
													<li><a href="#">Menu Two</a></li>
													<li><a href="#">Menu Three</a></li>
												</ul></li>
										</ul></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-8 col-md-8 col-lg-4 text-right">
							<a href="register.html"
								class="btn btn-primary btn-outline-primary rounded-0 text-white py-2 px-4">Register</a>
							<a href="register.html"
								class="btn btn-primary btn-primary rounded-0 py-2 px-4">Login</a>
						</div>


					</div>
				</div>
			</div>
		</div>
		<div id="content" class="container">
			<div class="row justify-content-center">@yield('content')</div>
		</div>


		<footer class="site-footer">
			<div class="container">


				<div class="row">
					<div class="col-lg-7">
						<div class="row">
							<div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
								<h3 class="footer-heading mb-4">Company</h3>
								<ul class="list-unstyled">
									<li><a href="#">About</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Servers</a></li>
									<li><a href="#">Hosting</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Careers</a></li>
								</ul>
							</div>
							<div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
								<h3 class="footer-heading mb-4">Navigations</h3>
								<ul class="list-unstyled">
									<li><a href="#">About</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Servers</a></li>
									<li><a href="#">Hosting</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Careers</a></li>
								</ul>
							</div>
							<div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
								<h3 class="footer-heading mb-4">Quick Menu</h3>
								<ul class="list-unstyled">
									<li><a href="#">About</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Servers</a></li>
									<li><a href="#">Hosting</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Careers</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="row mb-5">
							<div class="col-md-12">
								<h3 class="footer-heading mb-4">Europe</h3>
							</div>
							<div class="col-md-6">
								<p>
									London - 2398 <br> 10 Japson Street
								</p>
							</div>
							<div class="col-md-6">
								Tel. + (123) 3240-345-9348 <br> Mail. europe@youdomain.com
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h3 class="footer-heading mb-4">USA</h3>
							</div>
							<div class="col-md-6">
								<p>
									New York - 2398 <br> 10 Hadson Carl Street
								</p>
							</div>
							<div class="col-md-6">
								Tel. + (123) 3240-345-9348 <br> Mail. usa@youdomain.com
							</div>
						</div>

					</div>
				</div>
				<div class="row pt-5 mt-5 text-center">
					<div class="col-md-12">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script data-cfasync="false"
								src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
							<script>document.write(new Date().getFullYear());</script>
							All Rights Reserved | This template is made with <i
								class="icon-heart text-danger" aria-hidden="true"></i> by <a
								href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>

				</div>
			</div>
		</footer>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/aos.js"></script>

	<script src="js/main.js"></script>

</body>
</html>
