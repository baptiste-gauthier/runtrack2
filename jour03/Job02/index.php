<?php

$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.' ;

// $table = str_split($str) ; // le str_split donne également une donnée à un espace de caractere

// for($i = 0 ; $i <= count($table) ; $i= $i + 2)
// {
//     echo $table[$i] ; 
    
// }

for($i = 0 ; isset($str[$i]); $i = $i + 2)
{
    echo $str[$i] ; 
}

?>