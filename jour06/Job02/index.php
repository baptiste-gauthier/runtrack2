
<?php

if((isset($_POST['reset'])))
{
    $visite = 0 ; /* remet le conteur à 0 */
}

elseif (!isset($_COOKIE['nbvisites'])){
    $visite = 0;
}
else{
    $visite = $_COOKIE['nbvisites'] + 1;
}

setcookie('nbvisites', $visite, time() + 10);

echo $visite ; 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Job 02 </title> 
    </head>

    <body>
        <form action ="index.php" method="POST">
            <input type="submit" value="Envoyer" name ='reset'>
        </form>
    </body>
</html>






