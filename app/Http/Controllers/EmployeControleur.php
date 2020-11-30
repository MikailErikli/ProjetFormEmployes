<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Request;
use App\Metier\Employe;
use App\Metier\MonException;


class EmployeControleur extends Controller
{
    public function postAfficherEmploye()
    {
        $civilite = Request::input("civilite");
        $prenom = Request::input("prenom");
        $nom = Request::input("nom");
        $pwd = Request::input("passe");
        $profil = Request::input("profil");
        $interet = Request::input("interet");
        $message = Request::input("le-message");


        try {
            $unEmploye = new Employe();
            $unEmploye->ajoutEmploye($civilite, $prenom, $nom, $pwd, $profil, $interet, $message);
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }

        return view("vues/pageMenu");


    }


    public function listerEmployes()
    {
        $unEmploye = new Employe();
        try {
            $mesEmployes = $unEmploye->getListeEmployes();
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('MonErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        return view('vues/formEmployeLister', compact('mesEmployes'));
    }

}
