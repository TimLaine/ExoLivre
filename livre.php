<?php
class Livre{
    private string $_titre;
    private int $_pages;
    private int $_paru;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre,int $pages,int $paru, int $prix, Auteur $auteur){
        $this->_titre = $titre;
        $this->_pages = $pages;
        $this->_paru = $paru;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        // We use the function from Class Auteur in the construct to add each Book in Auteur $biblio
        $this->_auteur->ajoutLivre($this);
    }
    public function getTitre(){
        return $this->_titre;
    }
    public function getPages(){
        return $this->_pages;
    }
    public function getParu(){
        return $this->_paru;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function getAuteur(){
        return $this->_auteur;
    }
    public function setTitre($titre){
        $this->_titre = $titre;
    }
    public function setPages($pages){
        $this->_pages = $pages;
    }
    public function setParu($paru){
        $this->_paru = $paru;
    }
    public function setPrix($prix){
        $this->_prix = $prix;
    }
    public function setAuteur($auteur){
        $this->_titre = $auteur;
    }
    // The toString is preformated to allow its use in Class Auteur
    public function __toString(){
        $result = "";
        $result .= ucfirst($this->_titre);
        $result .= " ($this->_paru) : $this->_pages pages / $this->_prix €";
        return $result;
    }
}
?>