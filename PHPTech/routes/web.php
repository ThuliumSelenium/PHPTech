<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Administrateur */
Route::get('/', 'AdministrateurController@VoirListeComptes');

/* Utilisateur */
Route::get('/Formation', 'UtilisateurController@VoirFormation');
Route::get('/ListeDeFormations', 'UtilisateurController@VoirListeFormations');
Route::get('/Compte', 'UtilisateurController@VoirCompte');
Route::get('/Formulaire', 'UtilisateurController@VoiFormulaire');

/* Visiteur */
Route::get('/Connexion', 'VisiteurController@VoirConnexion');
Route::get('/Inscription', 'VisiteurController@VoirInscription');
Route::get('/Accueil', 'VisiteurController@VoirAccueil');
Route::get('/', 'VisiteurController@VoirAccueil');
