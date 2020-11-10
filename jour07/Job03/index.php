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


function ajoutPrenom()
{
    if(isset($_POST['name']))
    {
        $_SESSION['name'] = $_POST['name'] ; 
        return $_SESSION['name'] ; // On garde la variable associé au champ de texte 
    }
}

$name = ajoutPrenom(); 


$_SESSION['name'] = $name ; 
$_SESSION[1] = $name ;




var_dump($_SESSION ); 

?>
