<?php

$str = 'I\'m sorry Dave I\'m afraid I can\'t do that.' ; 
$table_voyelle = array('a' , 'e' , 'i' , 'o', 'u' ,'y') ;
$table = str_split($str) ;

// print_r($table) ;
// print_r($table_voyelle) ;

 for($i = 0 ; $i != count($table_voyelle) ; $i++) 
{
    foreach ($table as $element) 
    {
        // echo $element  ;
        if ($element == $table_voyelle[$i])
        {
            echo $element ; 
        }
    }    
}

?>