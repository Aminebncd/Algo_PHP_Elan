
<h1>Algorithmes en PHP</h1>


<?php

// exo8



// Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
// forme :
// Affichage (pour la table de 8) :
// Table de 8 :
// 1 x 8 = 8
// 2 x 8 = 16
// 3 x 8 = 24 …
// Remarque : proposer 2 solutions avec 2 types de boucles.

// echo "Entrez un nombre : ";
// $nombre = readline();

$nombre = 5; //pour l'exemple
//methode for
for($i = 1; $i <= 10; $i++) {
    echo $i." x ".$nombre." = ".$i*$nombre."<br>";
}


echo "<br>";

//methode while
$i = 1;
while($i <= 10) {
    echo $i." x ".$nombre." = ".$i*$nombre."<br>";
    $i++;
}

echo "<br><br>";
