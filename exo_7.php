
<h1>Algorithmes en PHP n°1</h1>


<?php

// exo7
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
