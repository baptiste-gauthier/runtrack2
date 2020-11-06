<html>

    <head>
        <meta charset="UTF-8">
        <title> Job 07 </title>
    </head>    
    <body>

        <form action = "index.php" method = "POST">

            <label for="largeur"> Largeur :  </label>
            <input type ="texte" id="largeur" name="largeur">

            <label for="hauteur"> Hauteur :  </label>
            <input type ="texte" id="hauteur" name="hauteur">


            <input type="submit" value="Envoyer">

        </form>

    </body>
</html>



<?php

foreach ($_POST as $key => $x) {    
    $hauteur = $_POST['hauteur'];
    $largeur = $_POST['largeur'];     
}


if (isset($hauteur)&&isset($largeur)) {
    if ($largeur % $hauteur == 0) { 
        for ($i=1; $i <= $hauteur ; $i++) {
            if($i = 0) {
                
                echo '_';
                }
                elseif($i == $largeur) {
                    echo '_';
                }
        }
            
                
            
        for ($i=1; $i <=$largeur ; $i++) {

            // if($i = 0) {
                
            // echo '_';
            // }
            // elseif($i == $largeur) {
            //     echo '_';
            // }
        }
            
    }

}

?>

 
