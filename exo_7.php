
<h1>Algorithmes en PHP</h1>


<?php

// exo7

// Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
// Poussin : entre 6 et 7 ans
// Pupille : entre 8 et 9 ans
// Minime : entre 10 et 11 ans
// Cadet : à partir de 12 ans
// Si la catégorie n’est pas gérée, merci de le préciser.
// Affichage :
// L’enfant qui a 10 ans appartient à la catégorie « Minime »

echo "Entrez votre âge : ";
$age = readline();

if ($age >= 6 && $age <=7) {
    echo "L’enfant qui a $age appartient à la catégorie « Poussin »<br><br>";
}
elseif ($age >= 8 && $age <=9){
    echo "L’enfant qui a $age appartient à la catégorie « Pupille »<br><br>";
}
elseif ($age >= 10 && $age <=11){
    echo "L’enfant qui a $age appartient à la catégorie « Minime »<br><br>";
}
elseif ($age <12){
    echo "L’enfant qui a $age appartient à la catégorie « Cadet »<br><br>";
}
else {
    echo "catégorie non gérée<br><br>";
}
