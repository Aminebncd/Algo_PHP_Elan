
<h1>Algorithmes en PHP</h1>


<?php


// Exo 12

// A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
// (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
// respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)

// Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG

// Affichage :

// Salut Mickaël
// Hola Virgile
// Hello Marie-Claire



function disBonjour() {
    $prenoms = array(
        "marie-claire" => "eng",
        "virgile" => "esp",
        "mickaël" => "fra",
    );

    foreach ($prenoms as $prenom => $langue) {
        switch ($langue) {
            case "eng":
                echo "Hello " . ucfirst($prenom) ." <br>"; 
                break;
            case "esp": 
                echo "Hola " . ucfirst($prenom) ." <br>"; 
                break;
            default: 
                echo "Salut " . ucfirst($prenom) ." <br>";
        }
    }
}

disBonjour();


// // Variante : trier d’abord le tableau par ordre alphabétique du prénom

// Affichage :

// Hello Marie-Claire
// Salut Mickaël
// Hola Virgile



// ksort($prenoms); 

// foreach ($prenoms as $prenom => $langue) {
//     switch ($langue) {
//         case "eng":
//             echo "Hello " . ucfirst($prenom) ." <br>"; 
//             break;
//         case "esp": 
//             echo "Hola " . ucfirst($prenom) ." <br>"; 
//             break;
//         default: 
//             echo "Salut " . ucfirst($prenom) ." <br>";
//     }
// }

// disBonjour();
