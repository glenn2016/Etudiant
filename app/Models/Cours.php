<?php
namespace App\Models;

class Cours
{
    public int $idCours;
    public string $nomCours;
    public string $dureeCours;
    public function __construct($idC,$nom,$duree)
    {
        $this->idCours = $idC;
        $this->nomCours = $nom;
        $this->dureeCours = $duree;
    }
    

}

?>