<form action = "index.php" method = "POST">

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
            foreach ($_POST as $v)
            {
                echo $v ;
            }
            ?>
        </td>
        <td>
        <?php
            foreach ($_POST as $k => $v)
            {
                echo $k ;
            }

            ?>
        </td>
    <tr>

</table>