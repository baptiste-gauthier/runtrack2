<?php
    setcookie('prenom', $_POST['prenom'], time() + 300, null, null, false, true) ; 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Job 03 </title> 
    </head>

    <body>
        <form action ="index.php" method="POST">
            <label for="name"> Prénom : </label>
            <input type="texte" name="prenom" id="name">

            <input type="submit" value="Connexion">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['prenom']))
    {
        $_POST['prenom'] = $_COOKIE['prenom'] ;
    }

    if(isset($_COOKIE['prenom']))
    {
        echo 'Bonjour '.$_COOKIE['prenom'].'</br>' ;
    }
?>