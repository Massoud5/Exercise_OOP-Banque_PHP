<?php

class CompteBancaire

{
    private string $_libelle;
    private int $_soldeInitial;
    private string $_deviseMonetaire;
    private Titulaire $_titulaireObject;

    public function __construct($libelle, $soldeInitial, $deviseMonetaire, Titulaire $titulaireObject) {
        $this -> _libelle = $libelle;
        $this -> _soldeInitial = $soldeInitial;
        $this -> _deviseMonetaire = $deviseMonetaire;
        $this -> _titulaireObject = $titulaireObject;
        $this -> _titulaireObject -> setComptes($this);
    }

    public function getLibelle() {
        return $this -> _libelle;
    }
    public function getSoldeInitial() {
        return $this -> _soldeInitial;
    }
    public function getDeviseMonetaire() {
        return $this -> _deviseMonetaire;
    }
    public function getTitulaire() {
        return $this -> _titulaire;
    }

    public function setLibelle($libelle) {
        $this -> _libelle = $libelle;
    }
    public function setSoldeInitial($soldeInitial) {
        $this -> _soldeInitial = $soldeInitial;
    }
    public function setDeviseMonetaire($deviseMonetaire) {
        $this -> _deviseMonetair = $deviseMonetaire;
    }
    public function setTitulaire(Titulaire $titulaireObject) {
        $this -> _titulaireObject = $titulaireObject;
    }

    public function crediterCompte($montant) {
        $this -> _soldeInitial += $montant;
    }
    public function debiterCompte($montant) {
        $this -> _soldeInitial -= $montant;
    }
    public function virementCompte($montant, $compteCible) { // compteCible = compte a créditer
        $this->debiterCompte($montant);
        $compteCible->crediterCompte($montant);
    }

    public function __toString()
    {
        return "
                Libellé: " . $this -> _libelle . "<br>
                Solde Initial: " . $this -> _soldeInitial . " " .$this -> _deviseMonetaire. "<br><hr>";
    }

}

?>