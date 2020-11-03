<?php
    $nb = 0 ; 

    while ($nb <= 100)
    {
        echo ($nb.'<br>') ;
        $nb ++ ; 

        if ((!($nb % 3 )) && (!($nb % 5 )) )
        {
            echo 'FizzBuzz' ; 
        }
        
        elseif (!($nb % 3 )) {
            echo 'Fizz ' ; 
        }

        elseif (!($nb % 5 )) {
            echo 'Fuzz ' ; 
        }

    }

?>