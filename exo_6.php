
<h1>Algorithmes en PHP n°1</h1>


<?php


// exo6
$prixUnitaire = 9.99;
$quantité = 5;
$tauxTVA = 0.2;

$montantFacture = ($quantité * $prixUnitaire) + ( $quantité * $prixUnitaire * $tauxTVA);
$montantArrondi = round($montantFacture, 2); 

echo "Prix unitaire de l'article : $prixUnitaire<br>";
echo "Quantité : $quantité<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à regler est de : $montantArrondi<br><br>";
