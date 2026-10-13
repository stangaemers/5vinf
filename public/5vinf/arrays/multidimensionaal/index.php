<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Top 40</title>
        <link rel="stylesheet" href="top40.css" />
    </head>
    <body>
      <img id="logo" src="https://www.top40.nl/img/generic/logo/top40.svg" alt="Top 40" /> 
      <table>
<?php

    include("top40.php");

    for ($i = 0; $i < count($top40); $i++ ) {

    $nummer = $top40[$i];
      $huidige_positie = $nummer["notering"];
    $vorige_positie =   $nummer["vorige"]; 


    if ($vorige_positie == "-") {
        $verandering = "nieuw";
    } elseif ($huidige_positie < $vorige_positie) {
        $verandering = "gestegen";
    } elseif ($huidige_positie > $vorige_positie) {
        $verandering = "gezakt";
    } else {
        $verandering = "gelijk";    
    }


?>

    <tr class= "<?= $verandering ?>">
        <td  rowspan="4 class = nummer<?= $verandering ?>"><h1><?= $nummer["notering"] ?></h1></td>
        <td rowspan="4 <?= $verandering ?>"><img src="<?= $nummer["afbeelding"] ?>" alt="<?= $nummer["titel"] ?>"></td>
        <td class="titel <?= $verandering ?>"><?= $nummer["titel"] ?></td>
    </tr>
    <tr>
        <td class="artiest <?= $verandering ?>"><?= $nummer["artiest"] ?></td>
    </tr>
    <tr>
        <td class="vorige <?= $verandering ?>">Vorige: <?= $nummer["vorige"] ?></td>
    </tr>
    <tr>
        <td class="weken <?= $verandering ?>">Weken: <?= $nummer["weken"] ?></td>
    </tr>

<?php } ?>
</table>
    </body>
</html> 