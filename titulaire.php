<?php

class Titulaire

{
    private string $_nom;
    private string $_prenom;
    private string $_dateDeNaissance;
    private string $_ville;
    private array $_comptes;

    public function __construct($nom,  $prenom, $dateDeNaissance, $ville) {
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _dateDeNaissance = $dateDeNaissance;
        $this -> _ville = $ville;
        $this -> _comptes = [];
    }

    public function getNom() {
        return $this -> _nom;
    }
    public function getPrenom() {
        return $this -> _prenom;
    }
    public function getDateDeNaissance() {
        return $this -> _dateDeNaissance;
    }
    public function getVille() {
        return $this -> _ville;
    }
    public function getComptes() {
        return $this -> _comptes;
    }

    public function setNom($nom) {
        $this -> _nom = $nom;
    }
    public function setPrenom($prenom) {
        $this -> _prenom = $prenom;
    }
    public function setDateDeNaissance($dateDeNaissance) {
        $this -> _dateDeNaissance = $dateDeNaissance;
    }
    public function setVille($ville) {
        $this -> _ville = $ville;
    }
    public function setComptes(CompteBancaire $comptes) {
        // $this -> _comptes[] = $comptes;
        array_push($this -> _comptes, $comptes);
    }

    public function afficherComptes() {

        $result = "<h3>Comptes de ".$this->getPrenom()." ".$this->getNom()."</h3><ul>";
        foreach($this -> _comptes as $compte){
            $result .= "<li> $compte </li> ";
        }
        $result .= "<ul>";

        return $result;
    }

    public function __toString()
    {
        return "
                Nom: " . $this -> _nom . "<br>
                Prenom: " . $this -> _prenom . "<br>
                Date de naissance: " . $this -> _dateDeNaissance . "<br>
                Ville: " . $this -> _ville . "<br>
                ";
    }

}

?>