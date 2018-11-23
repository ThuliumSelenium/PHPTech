<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteurController extends Controller
{
  public function VoirAccueil()
  {
      return view('Visiteur/VoirAccueil');
  }

  public function VoirConnexion()
  {
      return view('Visiteur/VoirConnexion');
  }

  public function VoirInscription()
  {
      return view('Visiteur/VoirInscription');
  }
}
