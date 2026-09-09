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
    
    $x = 3;
    $y = -3;
    $resultaat = 1;
    if($y>0){
    for($i=0;$i<$y;$i++){
        $resultaat = $x*$resultaat;
    }}else{
    for($i=0;$i>$y;$i--){
        $resultaat=$resultaat/$x;
    }}


     
?>
        <p><?= $x ?><sup><?= $y ?></sup> = <?= $resultaat ?></p>
    </body>
</html>