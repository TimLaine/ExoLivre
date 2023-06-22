<?php
// include "livre.php";
class Auteur{
    private string $_nom;
    private string $_prenom;

    public function __construct(string $nom, string $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function afficherBibliographie(){
        $result = "";
        $result .= "<h1>Livres de $this->_prenom $this->_nom </h1>";
        // $result .= ;
        return $result;
    }
    public function __toString(){
        return $this->_nom . $this->_prenom;
    }
}

?>