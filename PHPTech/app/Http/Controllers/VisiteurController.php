<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteurController extends Controller
{
  public function VoirAccueil()
  {
      return view('VoirAccueil');
  }

  public function VoirConnexion()
  {
      return view('VoirConnexion');
  }

  public function VoirInscription()
  {
      return view('VoirInscription');
  }
}
