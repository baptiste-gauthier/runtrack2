<?php

$table = array ( '200' , '204' , '173' , '98' , '171' , '404' , '459') ;

for($i = 0 ; $i <= 6 ; $i++)
{
    echo $table[$i] ; 
    if ($table[$i]%2 == 1)
    {
        echo ' ce nombre est impair </br>'; 
    }
    else 
    {
        echo ' ce nombre est pair </br>' ; 
    }
}
?>