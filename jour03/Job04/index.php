<?php

$str = 'Dans l\'espace, personne ne vous entend crier.' ;
$i = 0 ; 

while(isset($str[$i])) {

    echo $str[$i] ;
    $i++ ;
}

echo '<p>Le nombre de caractère présent sur cette chaine est '.$i.'.</p>' ; 


    // foreach ($table as $element)
    // {
    //     echo $element ; 
    // }

    // echo '<p> le nombre de caractère présent sur cette chaine est '.$str_lenght.'.</p>' ;

?>