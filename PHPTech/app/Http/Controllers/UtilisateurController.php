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
        return view('VoirFormation');
    }

    public function VoirListeFormations()
    {
        return view('VoirListeFormations');
    }

    public function VoirFormulaire()
    {
        return view('VoirFormulaire');
    }

    public function VoirCompte()
    {
        return view('VoirCompte');
    }
}
