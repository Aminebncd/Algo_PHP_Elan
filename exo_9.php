
<h1>Algorithmes en PHP n°1</h1>


<?php

// exo9

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
