<html lang="fr">
    <head>
        <title> Exo 7 </title>
        <meta charset="utf-8">
    </head>

    <body>
        <form action ="index.php" method ="POST">
            <label for ="texte"> Str : </label>
            <input type="text" name="texte" id= "str">

            <select name="fonction" id ="select_function">
                <option value="">--Choisir une option--</option>
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="plateforme">Plateforme</option>
            </select>

            <input type ="submit" value="Envoyer">
        </form>

    </body>
</html>

<?php

var_dump($_POST) ; 

if ($_POST['fonction'] == 'gras')
{
    gras($var) ; 
}


``function gras($var)
{
   
    $var = $_POST['texte'] ; 
    for ($i = 0 ; isset($var[$i]) ; $i++)
    {   
        if (ctype_upper($var[$i])){
            echo '<b>' .$var[$i].'</b>' ; 
        }
    }
    // echo 'zeubi' ; 
}

function cesar($str,$decalage)
{

}

``

?>