<?php

// function calcule($a , $b)
// {
//     $addition = $a + $b ; 
//     $soustraction = $a - $b ;  
//     $modulo = $a % $b ; 
//     $division = $a / $b ; 
//     $multiplication = $a * $b ;

//     return ($addition) ;
// }

// $result = calcule(12, 14) ; 
// echo $result ; 


function calcule($a , $operation, $b)
{
    if($operation == '+')
    {
        return($a + $b) ; 
    }
    elseif($operation == '-')
    {
        return($a - $b) ;  
    }
    elseif($operation == '/')
    {
        return($a / $b) ;
    }
    elseif($operation == '%')
    {
        return ($a % $b) ;
    }

    elseif($operation == '*')
    {
        return($a * $b) ;
    }

    // return($addition,$soustraction,$division,$modulo,$multiplication) ; 
}

$result = calcule(5,'-', 18 ) ; 
echo 'le resultat est '.$result.'</br>' ; 
?>

