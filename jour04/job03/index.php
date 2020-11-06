<form action = "index.php" method = "POST">

    <label for="name"> Nom : </label>
    <input type ="text" id="name" name="nom">

    <label for="prenom"> Prénom : </label>
    <input type ="text" id="prenom" name="prenom">

    <input type="submit" value="Envoyer">

</form>

<?php



var_dump($_POST) ; 
// echo 'Bonjour '.$_GET['nom']. ' ' .$_GET['prenom']. ' </br>' ; 
$i = 0 ;

foreach($_POST as $_POST[$i])
{
    $i++ ;  
}

echo 'le nombre d\'arguments post est'.$i.'</br>' ; 

?>