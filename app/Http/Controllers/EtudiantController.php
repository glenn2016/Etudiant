<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;

use App\Models\Cours;
use App\Models\Etudiants;

class EtudiantController extends Controller
{


    public function index()
    {
    $etudiants =Etudiants::all();
    return view('etudiants/liste', ['etudiants' => $etudiants]);
}

    public function maman()
    {

        $etudiant = new Etudiant();
        $etudiant->nom = "Elmane";
        $etudiant->age = 23;
        return view('etudiants/liste', ['etudiants' => $etudiant]);
    }
    public function cours()
    {

        $cours = [
            [1, "JAVA", 30],
            [2, "PHP", 60],
            [3, "JavaScript", 100],
        ];
        return view('etudiants/cours', ['cours' => $cours]);
    }
}
