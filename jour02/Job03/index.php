<?php

    $nb = 0 ; 

    while ($nb < 100)
    {
        $nb++ ; 

        if ($nb <= 20)
        {
            echo ('<i>'.$nb.'</i></br>') ;
        }

        elseif (($nb >= 25) && ($nb <= 50) && ($nb != 42))
        {
            echo ('<u>'.$nb.'</u></br>') ;
        }
        
        elseif ($nb != 42)
        {
            echo ($nb.'</br>') ; 
        }
        
        else 
        {
            echo "La Plateforme_</br>" ; 
        }
    }


?>