
<h1>Algorithmes en PHP</h1>


<?php

//exo 14

// Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).

// Affichage 
// (si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985 :
// Age de la personne : 33 ans 4 mois 4 jours

function calculerAge($dateNaissance, $dateCourante) {
    $dateNaissance = new DateTime($dateNaissance);
    $dateCourante = new DateTime($dateCourante);

    $diff = $dateNaissance->diff($dateCourante);

    $annees = $diff->y;
    $mois = $diff->m;
    $jours = $diff->d;

    echo "Age de la personne : $annees ans $mois mois $jours jours";
}

$dateNaissance = "2001-01-15";
$dateCourante = "2023-12-15";

calculerAge($dateNaissance, $dateCourante);

