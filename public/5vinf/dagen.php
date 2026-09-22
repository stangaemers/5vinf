<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>x tot de macht y</title>
    </head>
    <body>
        
<?php


$dagen = array ( "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag" 
);
 



?>

<p> <?= $dagen [5] ?> </P>

<ul>
    <?php
        for ( $i = 0; $i < count($dagen); $i++){
    ?>
<li> <?= $dagen [$i] ?></li>


<?php
        }
?>
</ul>


 </body>
</html>