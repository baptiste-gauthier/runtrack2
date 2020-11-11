<?php

$str = 'Silver chariot !' ; 
$char = 'i' ; 

function occurences($str, $char)
{
    $i = 0 ;
    $nb_occurence = 0 ; 

    if(isset($str[$i])){

        while (isset($str[$i]))
        {
            $i++ ; 

            if((@$str[$i]) == @$char)
            {
                $nb_occurence = $nb_occurence + 1 ; 

            }
            
        }
    }

    return $nb_occurence ; 
}

$result = occurences($str, $char) ; 
echo $result ; 
// $nb_occurence = occurences($str, $i) ; 
// echo $nb_occurence ; 

?>