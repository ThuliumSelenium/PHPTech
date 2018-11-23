@extends('Shared/Master_Layout')
@section('content')

<!-- Styles -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="Css/Visiteur/VoirConnexion.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="Css/Visiteur/VoirAccueil.css">

<!-- Vidéo -->
<video autoplay muted loop id="myVideo">
  <source src="videos/cegep.mp4" type="video/mp4">
  Votre navigateur ne supporte pas les vidéo MP4.
</video>

<!-- Contenu -->
<div class="content">
  <h1>Bienvenue sur FormaTech</h1>
  <p>Un site web conçu à votre image et selon vos besoins. S'inscrire à des formations en tout genre, en tout temps et en toute simplicité comme jamais auparavant. </p>
</div>

<!-- Scripts -->
<script src="js/Visiteur/VoirAccueil.js"></script>

@endsection
