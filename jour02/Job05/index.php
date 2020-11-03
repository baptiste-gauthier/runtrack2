<?php

function nbpremier($number) {
    //boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du quotien de la division
        if (($number % $i) == 0) {
            return FALSE;
        }
    }
 
    //Aucun diviseur trouvé, c'est un nombre permier
    return TRUE;
}
 
// boucle de 0 à 99
echo '<br>Nombre premier de 0 à 1000: </br>';
for ($i = 3; $i < 1000; $i++) {
    if (nbpremier($i)) {
        echo $i.'</br> ';
    }
}

?>

