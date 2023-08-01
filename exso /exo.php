Exercice 8 algorithmique :
```<?php
//algorithme qui demande 2 nombres et informe si c'est negatif ou positif;
// INITIALISATION
$nombre1 = 0;
$nombre2 = 0;
// VALEURS SAISIES
$nombre1 = intval(readline("Veuillez saisir un nombre : ") . "\n");
$nombre2 = intval(readline("Veuillez saisir un nombre : ") . "\n");
// print_r(gettype($nombre2));
// print_r(strlen($nombre2));
// PROCEDURE
if (($nombre1 < 0 && $nombre2 > 0) || ($nombre1 > 0 && $nombre2 < 0)) {
    echo ("Votre produit est négatif");
} else if ($nombre1 === 0 || $nombre2 === 0) {
    echo ('Le produit est neutre');
} else {
    echo ("Votre produit est positif");
}