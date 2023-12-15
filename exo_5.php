<h1>Algorithmes en PHP</h1>

<?php


//exo5

// Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
// Attention, la valeur générée devra être arrondie à 2 décimales.
// Affichage :
// Montant en francs : 100
// 100 francs = 15.24 €

 $valFrancs = 100;
 $tauxDeConversion = 0.1524;

 $valEnEuro = $valFrancs * $tauxDeConversion;
 $valEnEuroArrondi = round($valEnEuro, 2);

 echo "Montant en francs : $valFrancs<br>";
 echo "Montant en euros : $valEnEuroArrondi<br><br>" ;
