
<h1>Algorithmes en PHP</h1>


<?php

// exo 15

// Créer une classe Personne (nom, prénom et date de naissance).
// Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.

// $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
// $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

// Affichage :

// Michel DUPONT a … ans
// Alice DUCHEMIN a … ans



class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $dateCourante = new DateTime();
        $diff = $dateNaissance->diff($dateCourante);

        return $diff->y;
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->getPrenom() . ' ' . $p1->getNom() . ' a ' . $p1->getAge() . ' ans' ."<br>";
echo $p2->getPrenom() . ' ' . $p2->getNom() . ' a ' . $p2->getAge() . ' ans' . PHP_EOL;

