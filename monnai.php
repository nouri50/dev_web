<?php
$prix = array(10, 5, 1);
$somme = 0;
$doit = 0;
$paye = 0;

// Lire la suite des prix
$prix = array(10, 5, 1);

// Calculer la somme qu'il doit
$doit = array_sum($prix);

// Lire la somme qu'il paye
$paye = $doit + 10;

// Simuler la remise de la monnaie en affichant les textes "10 Euros", "5 Euros" et "1 Euro" autant de fois qu'il y a de coupures de chaque sorte à rendre.
$rendu = $paye - $doit;
foreach ($prix as $p) {
    $nb = floor($rendu / $p);
    if ($nb > 0) {
        echo "$nb x $p Euros\n";
        $rendu -= $nb * $p;
    }
}
?>