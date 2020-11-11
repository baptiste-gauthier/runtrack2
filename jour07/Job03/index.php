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
            <input type="submit" value="Reset" name="reset">
        </form>
    </body>
</html>

<?php

var_dump($_SESSION ); 

if(isset($_POST['name']))
{
   $_SESSION['name'][] = $_POST['name']  ;

}

for($i = 0 ; isset($_SESSION['name'][$i]); $i++)
{
    echo '<p>'.$_SESSION['name'][$i].'</p></br>' ; 
}

if(isset($_POST['reset']))
{
    session_destroy(); 
}


?>
