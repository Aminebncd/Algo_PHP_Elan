
<h1>Algorithmes en PHP n°1</h1>


<?php


//exo4
$palindrome = ['e', 'n', 'g', 'a', 'g', 'e', 'l', 'e', 'j', 'e', 'u', 'q', 'u', 'e', 'j', 'e', 'l', 'e', 'g', 'a', 'g', 'n', 'e'];

$reversed = array_reverse($palindrome);

if ($palindrome === $reversed) {
    echo "c'est un palindrome !<br><br>";
} else {
    echo "pas un palindrome...<br><br>";
} 
