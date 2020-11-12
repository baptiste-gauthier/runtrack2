<?php

$db = mysqli_connect("localhost", "root","","jour08") ;

$requete = "SELECT prenom,nom,naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01';"; 

$query = mysqli_query($db, $requete) ;
$resultats = mysqli_fetch_all($query) ;

mysqli_close($db);

var_dump($resultats) ; 

?>

<html>
    <head>
        <meta charset='utf-8'>
        <title> Job 12 </title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th> prenom </th>
                    <th> nom </th>
                    <th> naissance </th>
                </tr>    
            </thead>
            <tbody>
                <?php
                    for($a = 0 ;isset($resultats[$a]); $a++)
                    {
                        echo '<tr></tr>' ; 
                        for($i = 0 ;isset($resultats[$a][$i]); $i++)
                        {
                            echo '<td>'.$resultats[$a][$i].'</td>' ; 
                        }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
