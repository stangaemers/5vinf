<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>x tot de macht y</title>
    </head>
    <body>
        <h1>x tot de macht y</h1>
<?php

    $x = 8;
    $y = 4;
    $resultaat = 1 ;
    // variabelen intieren 
    
    // reken uit x tot de macht y, voor iedere waarde van x en/of y
    
    // NIET   $resultaat = pow($x, $y);
    //        $resultaat = $x ** $y;
    
    // WEL    zelf een loop schrijven...
    for ( $i = 1 ; $i <= $y ; $i++ ) {

    $resultaat = $resultaat * $x;
    }



?>
  <p><?= $x ?><sup><?= $y ?></sup> = <?= $resultaat ?></p>

    </body>
</html>