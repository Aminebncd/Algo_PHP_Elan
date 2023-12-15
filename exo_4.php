
<h1>Algorithmes en PHP</h1>


<?php


//exo4

// Ecrire un algorithme permettant de savoir si une phrase est palindrome.
// Affichage :
// La phrase « Engage le jeu que je le gagne » est palindrome



$palindrome = ['e', 'n', 'g', 'a', 'g', 'e', 'l', 'e', 'j', 'e', 'u', 'q', 'u', 'e', 'j', 'e', 'l', 'e', 'g', 'a', 'g', 'n', 'e'];

$reversed = array_reverse($palindrome);

if ($palindrome === $reversed) {
    echo "c'est un palindrome !<br><br>";
} else {
    echo "pas un palindrome...<br><br>";
} 
