<?php



$myBool = true ; 
$string = 'hello la plateforme' ; 
$int = 10 ; 
$float = 1.58 ; 


?> 


    <table>

        <tr>
            <th> Type </th>
            <th> Nom </th>
            <th> Valeur </th>
        </tr>
        <tr>
            <td> <?php echo gettype($myBool) ?> </td>
            <td> <?php echo '$myBool' ?> </td>
            <td> <?php echo $myBool ?> </td>
        </tr>
        <tr>
            <td> <?php echo gettype($string) ?> </td>
            <td> <?php echo '$string' ?> </td>
            <td> <?php echo $string ?> </td>
        </tr>
        <tr>
            <td> <?php echo gettype($int) ?> </td>
            <td> <?php echo '$int' ?> </td>
            <td> <?php echo $int ?> </td>
        </tr>
        <tr>
            <td> <?php echo gettype($float) ?> </td>
            <td> <?php echo '$float' ?> </td>
            <td> <?php echo $float ?> </td>
        </tr>

    </table>
