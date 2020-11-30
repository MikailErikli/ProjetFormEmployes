<?php
namespace App\Metier;
use DB;
/**
 * Description of Employe
 *
 * @author adminlabo
 */

class Employe {
    protected $table = 'employe';
    protected $primaryKey = 'numEmp';

    private $civilite;
    private $prenom;
    private $nom;
    private $pwd;
    private $profil;
    private $interet;
    private $message;

    public $timestamps = false;
    protected $fillable = [
        'numEmp',
        'civilite',
        'nom',
        'prenom',
        'profil',
        'interet',
        'message'
    ];


    public function getCivilite() {
        return $this->civilite;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function getProfil() {
        return $this->profil;
    }

    public function getInteret() {
        return $this->interet;
    }

    public function getMessage() {
        return $this->message;
    }

    public function ajoutEmploye($civilite, $prenom, $nom, $pwd, $profil, $interet, $message)
    {
try {
    DB::table('employe')->insert(
        ['civilite' => $civilite, 'nom' => $nom,
            'prenom' => $prenom, 'pwd' => md5($pwd),
            'profil' => $profil, 'interet' => $interet,
            'message' => $message]);
}catch (\illuminate\Database\QueryException $e) {
    throw new MonException($e -> getMessage(),5);
}


}








    public function getListeEmployes() {
        try {
            $mesEmployes = DB::table('employe')
                    ->Select()
                    ->get();
            return $mesEmployes;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(),5);
        }


    }
}

