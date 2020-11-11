<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Job 03 </title> 
    </head>

    <body>
        <form action ="index.php" method="POST">
            <label for="name"> Nom : </label>
            <input type="texte" name="name" for="name">

            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>

<?php

var_dump($_SESSION ); 

// function ajoutPrenom()
// {
//     if(isset($_POST['name']))
//     {
//         $_SESSION['name'] = $_POST['name'] ; 
//         return $_SESSION['name'] ; // On garde la variable associé au champ de texte 
//     }
// }

if(isset($_POST['name']))
{
   $_SESSION['name'] = $_POST['name']  ;

}

$table = array ('name' => $_POST['name']) ; 

foreach ($table as $key => $value)
{
    echo $value ;
}







?>
