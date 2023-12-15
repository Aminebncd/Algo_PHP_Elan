
<h1>Algorithmes en PHP</h1>


<?php


// exo6


// Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
// d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
// Affichage :
// Prix unitaire de l’article : 9.99 €
// Quantité : 5
// Taux de TVA : 0.2
// Le montant de la facture à régler est de : 59.94 €



$prixUnitaire = 9.99;
$quantité = 5;
$tauxTVA = 0.2;

$montantFacture = ($quantité * $prixUnitaire) + ( $quantité * $prixUnitaire * $tauxTVA);
$montantArrondi = round($montantFacture, 2); 

echo "Prix unitaire de l'article : $prixUnitaire<br>";
echo "Quantité : $quantité<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à regler est de : $montantArrondi<br><br>";
