<html>

    <head>
        <meta charset="UTF-8">
        <title> Job 05 </title>
    </head>    
    <body>



<form action = "index.php" method = "POST">

<label for="username"> Nom : </label>
<input type ="text" id="username" name="nom">

<!-- <label for="mail"> E mail  : </label>
<input type ="email" id="mail" name="email"> -->

<label for="password"> Mot de passe </label>
<input type ="text" id="password" name="mot_de_passe">

<input type="submit" value="Envoyer">

</form>

    </body>
</html>


<?php

var_dump($_POST) ; 

if(isset($_POST['nom']) && (isset($_POST['mot_de_passe']))) {

    if (($_POST['nom']  == 'John') && ($_POST['mot_de_passe'] == 'Rambo'))
    {
        echo 'C’est pas ma guerre' ; 
    }

    else {
        echo ' Votre pire cauchemar' ; 
    }
}

?>
