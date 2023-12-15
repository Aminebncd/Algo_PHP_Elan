
<h1>Algorithmes en PHP</h1>


<?php


// Exo 11

// Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
// tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
// d’afficher le nombre de marques de voitures présentes dans le tableau.

// Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »

// Affichage (attention à utiliser une liste à puces)

// Il y a 4 marques de voitures dans le tableau :
// Peugeot
// Renault
// BMW
// Mercedes


$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($marques);


echo "Il y a ".count($marques)." marques de voitures dans le tableau :<br><br>";

foreach($marques as $marque) {
    echo "• ".$marque."<br>";
}

