<?php
include "auteur.php";
include "livre.php";
$king = new Auteur("King","Stephen");
$ca = new Livre("Ca",1138,1983,20,$king);
echo $ca;
?>