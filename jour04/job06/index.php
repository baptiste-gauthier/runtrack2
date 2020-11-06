<html>

    <head>
        <meta charset="UTF-8">
        <title> Job 06 </title>
    </head>    
    <body>



<form action = "index.php" method = "POST">

<label for="nombre"> Nombre :  </label>
<input type ="number" id="nombre" name="nombre">

<input type="submit" value="Envoyer">

</form>

    </body>
</html>

<?php

if(isset($_POST['nombre'])) {

    if($_POST['nombre']%2 == 1)
    {
        echo 'ce nombre est impair</br>' ; 
    }

    else 
    {
        echo 'ce nombre est pair </br>' ; 
    }
}

?>