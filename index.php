<?php
include "auteur.php";
include "livre.php";
$king = new Auteur("King","Stephen");
$ca = new Livre("Ca",1138,1983,20,$king);
$simetierre = new Livre("Simetierre",374,1983,15,$king);
$fleau = new Livre("Le Fléau",823,1978,14,$king);
$shining = new Livre("Shining",447,1977,16,$king);
$biblio = [$ca,$simetierre,$fleau,$shining];
$king->setBiblio($biblio);
echo $king->afficherBibliographie();
?>