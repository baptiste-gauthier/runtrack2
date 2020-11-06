<?php

function jour($jour)
{
    if($jour)
    {
        echo 'Bonjour' ;
    }
    else{
        echo 'Bonsoir' ; 
    }
}

jour(true) ; 
jour(false)  ;

?>