<form action = "index.php" method = "GET">

    <label for="name"> Nom : </label>
    <input type ="text" id="name" name="nom">

    <label for="prenom"> Prénom : </label>
    <input type ="text" id="prenom" name="prenom">

    <input type="submit" value="Envoyer">

</form>


<table>
    <tr>
        <td>
            <?php
            foreach ($_GET as $v)
            {
                echo $v ;
            }
            ?>
        </td>
        <td>
        <?php
            foreach ($_GET as $k => $v)
            {
                echo $k ;
            }

            ?>
        </td>
    <tr>

</table>