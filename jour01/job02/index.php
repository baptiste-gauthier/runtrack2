<?php

/* CAS NUMERO 1 */
$nb1 = 1 ; 

while ($nb1 <= 2 )
{
    echo '<p> Hello LaPlateforme ! </p><br>' ; 
    $nb1++; // $nb1 = $nb1 + 1
}

/* CAS NUMERO 2 */

for ($nb1 = 1 ; $nb1 <= 2 ; $nb1++)
{
    echo '<p> Hello LaPlateforme ! </p><br>' ; 
}

/* CAS NUMERO 3 */

$val = 'Hello LaPlateforme' ; 
echo '<p> Hello LaPlateforme </p>' ; // On utilise seulement du texte
echo $val ; // On affiche la variable  ;

?>