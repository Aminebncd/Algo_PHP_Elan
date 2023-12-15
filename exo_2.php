
<h1>Algorithmes en PHP</h1>


<?php

//exo2

// A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
// contenus dans celle-ci.

$compteMots = str_word_count($phrase);
echo "la phrase"." "."Notre formation DL commence aujourd'hui"." "."contient $compteMots mots.<br><br>" ;
