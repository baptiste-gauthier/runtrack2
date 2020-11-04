<?php

$str  = 'On n\'est pas le meilleur quand on le croit mais quand on le sait.' ; 

$dico = array (
  'voyelles' => 'aeiouy' ,
  'consonnes' => 'bcdfghjqlmnpqrstvwxz'); 

for($i = 0 ; isset($str[$i]); $i++){
    while($dico['voyelles'] == $str[$i]) {
        echo $str[$i]; 
    }
}

?>