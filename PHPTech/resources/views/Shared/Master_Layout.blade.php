<!DOCTYPE html>
<html lang="en">
<head>
<title>FormaTech</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Styles -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
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
<link rel="stylesheet" href="css/Shared/Master_Layout.css">

</head>
<body>

 <!-- Barre de navigation -->
	<div class="site-wrap">
		<div class="site-mobile-menu">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
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
									<li><a href="ListeDeFormations">Formations</a></li>
									<li><a href="Compte">Paramètres</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-8 col-md-8 col-lg-4 text-right">
							<a href="Inscription"
								class="btn btn-success btn-outline-success rounded-0 text-white py-2 px-4">S'inscrire</a>
							<a href="Connexion"
								class="btn btn-primary btn-primary rounded-0 py-2 px-4">Se connecter</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contenu -->
		<div id="content" class="container">
			<div class="row justify-content-center">@yield('content')</div>
		</div>

		<!-- Pied de page -->
		<footer class="site-footer" id="enleverDansAccueil">
			<div class="container">
				<div class="text-center" id="piedDePage">
					<div class="col-md-12">
						<p>
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script>
							Tous droits réservés à FormaTech
							<a href="https://colorlib.com" target="_blank" style="display:none"></a>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Scripts -->
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
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

</body>
</html>
