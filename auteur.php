<?php
class Auteur{
    private string $_nom;
    private string $_prenom;
    private array $_biblio;
    public function __construct(string $nom, string $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_biblio = [];
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
    public function setBiblio($biblio){
        $this->_biblio = $biblio;
    }
    // Uses the toString in Class Livre to display the bibliography
    public function afficherBibliographie(){
        $result = "";
        $result .= "<h1>Livres de $this->_prenom $this->_nom </h1>";
        foreach ($this->_biblio as $livre){
            $result .= "$livre <br>";
        }
        return $result;
    }
    public function __toString(){
        return $this->_nom . $this->_prenom;
    }
}

?>