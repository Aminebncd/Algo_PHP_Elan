
<h1>Algorithmes en PHP</h1>


<?php


// exo 10


// A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
// affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
// 1 €.
// Affichage :
// Montant à payer : 152 €
// Montant versé : 200 €
// Reste à payer : 48 €
// ***************************************************
// Rendue de monnaie : 
// 4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €


function rendreMonnaie($montantAPayer, $montantVerse) {
    // Calcul du reste à payer
    $resteAPayer = $montantVerse - $montantAPayer;

      // Copie du reste à payer pour l'affichage
      $resteAffichage = $resteAPayer;

    // Tableau des billets et pièces disponibles
    $billetsPieces = array(
        10 => "billet de 10 €",
        5 => "billet de 5 €",
        2 => "pièce de 2 €",
        1 => "pièce de 1 €"
    );

   

    // Calcul du rendu de monnaie
    foreach ($billetsPieces as $valeur => $nom) {
        if ($resteAPayer >= $valeur) {
            // Calcul du nombre de billets ou pièces de cette valeur
            $quantite = floor($resteAPayer / $valeur);

            // Ajout au tableau de rendu de monnaie
            $renduMonnaie[] = "$quantite $nom";

            // Mise à jour du reste à payer
            $resteAPayer -= $quantite * $valeur;
        }
    }

    // Affichage des résultats
    echo "Montant à payer : $montantAPayer €<br>";
    echo "Montant versé : $montantVerse €<br>";
    echo "Reste à payer : -$resteAffichage €<br>";
    echo "***************************************************<br>";
    echo "Rendu de monnaie :<br>";
    echo implode(" - ", $renduMonnaie);
}

// Exemple d'utilisation
rendreMonnaie(152, 200);






echo "<br><br><br><br><br><br><br><br><br><br>";