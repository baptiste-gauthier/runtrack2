<?php


$str = 'Les choses que l\'on possede finissent par nous posseder.' ;
$i = 0 ; 

while(isset($str[$i])) {

    // echo $str[$i] ;
    $i++ ;
}

//  à ce niveau là $i vaut le nb de caractere 

while($i >= 0)
{
    echo $str[$i] ; 
    $i-- ; 
}

?>