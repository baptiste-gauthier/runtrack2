<?php
    @setcookie('prenom', $_POST['prenom'], time() + 300, null, null, false, true) ; 
?>

<!-- <!DOCTYPE html>
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
</html> -->

<?php


    if(!isset($_COOKIE['prenom']))
    {
        echo 
        '<html>
            <body>
                <form action ="index.php" method="POST">
                    <label for="name"> Prénom : </label>
                    <input type="texte" name="prenom" id="name">
        
                    <input type="submit" value="Connexion">
                </form>
            </body>
        </html>' ; 

        @$_POST['prenom'] = $_COOKIE['prenom'] ;
    }

    elseif(isset($_COOKIE['prenom']))
    {
        echo 'Bonjour '.$_COOKIE['prenom'].'</br>' ;

        echo '<form action ="index.php" method="POST">
        
        <input type="submit" value="Deconnexion" name="deco">
        </form>' ;
    }

    if (isset($_POST['deco']))
    {
        echo 
        '<html>
            <body>
                <form action ="index.php" method="POST">
                    <label for="name"> Prénom : </label>
                    <input type="texte" name="prenom" id="name">
        
                    <input type="submit" value="Connexion">
                </form>
            </body>
        </html>' ; 
    }
?>