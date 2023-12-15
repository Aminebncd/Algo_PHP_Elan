
<h1>Algorithmes en PHP</h1>


<?php

// Exo 13

// Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
// coefficient). Elle devra être affichée avec 2 décimales.

// Affichage :

// Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
// Sa moyenne générale est donc de : 11.22



$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

function calculerMoyenne(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}

echo "Les notes obtenues par l’élève sont : ". implode(' ', $notes)."<br>";
echo "Sa moyenne générale est donc de : ".calculerMoyenne($notes);