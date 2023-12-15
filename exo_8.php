
<h1>Algorithmes en PHP n°1</h1>


<?php

// exo8

// echo "Entrez un nombre : ";
// $nombre = readline();

$nombre = 5; //pour l'exemple
//methode for
for($i = 1; $i <= 10; $i++) {
    echo $i." x ".$nombre." = ".$i*$nombre."<br>";
}


echo "<br>";

//methode while
$i = 1;
while($i <= 10) {
    echo $i." x ".$nombre." = ".$i*$nombre."<br>";
    $i++;
}

echo "<br><br>";
