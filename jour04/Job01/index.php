
<form action = "index.php" method = "GET">

    <label for="name"> Nom : </label>
    <input type ="text" id="name" name="nom">

    <label for="prenom"> Prénom : </label>
    <input type ="text" id="prenom" name="prenom">

    <input type="submit" value="Envoyer">

</form>

<?php



var_dump($_GET) ; 
// echo 'Bonjour '.$_GET['nom']. ' ' .$_GET['prenom']. ' </br>' ; 
$i = 0 ;

foreach($_GET as $_GET[$i])
{
    $i++ ;  
}

echo 'le nombre d\'arguments get est'.$i.'</br>' ; 

?>