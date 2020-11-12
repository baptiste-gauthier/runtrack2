<?php

$db = mysqli_connect("localhost", "root","","jour08") ;

$requete = "SELECT * FROM etudiants WHERE prenom LIKE 'T%';"; 

$query = mysqli_query($db, $requete) ;
$resultats = mysqli_fetch_all($query) ;

mysqli_close($db);

var_dump($resultats) ; 

?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th> id </th>
                    <th> prenom </th>
                    <th> nom </th>
                    <th> naissance </th>
                    <th> sexe </th>
                    <th> email </th>
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
