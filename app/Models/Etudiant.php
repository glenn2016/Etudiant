<?php
namespace App\Models;

class Etudiant
{
    public int $idEtudiant;
    public string $matricule;
    public string $nom;
    public string $prenom;
    public string $niveau;
    public string $langage;
    public int $age;
    public int $etat;
    public function __construct()
    {
    }
    

}

?>