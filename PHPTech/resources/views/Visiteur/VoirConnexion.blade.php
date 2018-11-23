@extends ('Shared/Master_Layout')
@section ('content')

<!-- Styles -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="Css/Visiteur/VoirConnexion.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Contenu -->
<div class="container">
    <div class="row">
		<div class="col-md-12">
    <div class="card">
		<form>
    		<div id="login-form" class="form-container" data-form-container>
			<div class="row">
				<div class="form-title">
					<div id="titre">Se connecter</div>
				</div>
			</div>
			<div class="input-container">
				<div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Veuillez entrer votre courriel."> </span>
						<input type="email" data-min-length="8" placeholder="Courriel">
					</span>
				</div>
				<div class="row">
					<span class="req-input input-password">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Veuillez entrer votre mot de passe"> </span>
						<input type="password" data-min-length="8" placeholder="Mot de passe">
					</span>
				</div>
				<div class="row">
					<a class="create-account">S'inscrire </a>
				</div>
				<div class="row submit-row">
					<button type="button" class="btn btn-block submit-form">Se connecter</button>
				</div>
			</div>
			</div>
			</form>
		</div>
	</div>
</div>
</div>

<!-- Scripts -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/Visiteur/VoirInscription.js"></script>

@endsection
