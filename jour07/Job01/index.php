<?php
session_start() ;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Job 01 </title> 
    </head>

    <body>
        <form action ="index.php" method="POST">
            <input type="submit" value="Envoyer" name ='reset'>
        </form>
    </body>
</html>

<?php

var_dump($_SESSION['nbvisites']) ; 

if((isset($_POST['reset'])))
{
    $_SESSION['nbvisites'] = 0 ; /* remet le conteur à 0 */
}
elseif(!isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites'] = 1 ;
}
else
{
    $_SESSION['nbvisites'] = $_SESSION['nbvisites'] + 1 ; 
}

echo '<p> le nombre de visites est ' .$_SESSION['nbvisites']. '</p>' ; 

?>





