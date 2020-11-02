<?php

// $myBool = true ; 
// $string = 'hello la plateforme' ; 
// $int = 10 ; 
// $float = 1.58 ; 

$tableaux1 = array ('type' => 'booléen', 'Nom' => '$myBool', 'Valeur' => 'True') ; 
$tableaux2 = array ('type' => 'string', 'Nom' => '$string', 'Valeur' => 'Hello la plateforme') ; 
$tableaux3 = array ('type' => 'int', 'Nom' => '$int', 'Valeur' => '10') ; 
$tableaux4 = array ('type' => 'float', 'Nom' => '$float', 'Valeur' => '1.58') ;

?>

<table style="width:60%; border-collapse:collapse ; border : 1px black solid">
    <tr>
        <td>
            <?php
                foreach($tableaux1 as $element)
                {
                    echo $element . '</br>' ; 
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                foreach($tableaux2 as $element)
                {
                    echo $element . '</br>' ; 
                }
            ?>
        </td>

        <td>
            <?php
                foreach($tableaux3 as $element)
                {
                    echo $element . '</br>' ; 
                }
            ?>
        </td>

        <td>
            <?php
                foreach($tableaux4 as $element)
                {
                    echo $element . '</br>' ; 
                }
            ?>
        </td>
    </tr>
</table>