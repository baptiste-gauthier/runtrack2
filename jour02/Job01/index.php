<?php

$nb = 0 ;


while ($nb <= 1337)
{
    $nb = $nb + 1 ; 

    if ($nb != 42) 
    {
        echo ($nb.'</br>') ;
    }
    
    else 
    {
        echo ('<b><u>'.$nb.'</u></b></br>') ;
    }
}


?>