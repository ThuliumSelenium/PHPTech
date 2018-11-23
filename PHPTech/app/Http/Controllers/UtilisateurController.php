<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function VoirFormation()
    {
        return view('Utilisateur/VoirFormation');
    }

    public function VoirListeFormations()
    {
        return view('Utilisateur/VoirListeFormations');
    }

    public function VoirCompte()
    {
        return view('Utilisateur/VoirCompte');
    }
}
