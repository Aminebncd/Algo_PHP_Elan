
<h1>Algorithmes en PHP</h1>


<?php

// exo9



// Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
// Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
// plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
// Affichage :
// Age : 32
// Sexe : F
// La personne est imposable.


$age = 32;
$sexe = "F";

if (($sexe == "F" && $age >=18 && $age <= 35 ) || ($sexe == "H" && $age < 20)) {
    echo "Age : $age<br>";
    echo " Sexe : $sexe<br>";
    echo "La personne est imposable.<br>";
} else {
    echo "Age : $age<br>";
    echo " Sexe : $sexe<br>";
    echo "La personne est non-imposable.<br>";
}

echo "<br><br>";
