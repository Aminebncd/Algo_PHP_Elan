
<h1>Algorithmes en PHP n°1</h1>


<?php


//exo5
 $valFrancs = 100;
 $tauxDeConversion = 0.1524;

 $valEnEuro = $valFrancs * $tauxDeConversion;
 $valEnEuroArrondi = round($valEnEuro, 2);

 echo "Montant en francs : $valFrancs<br>";
 echo "Montant en euros : $valEnEuroArrondi<br><br>" ;
