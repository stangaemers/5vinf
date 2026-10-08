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
  //  if ( $nummer["vorige"] = "-") {
   // $verandering = "nieuw";
//}
?>

    <tr>
        <td rowspan="4"><?= $nummer["notering"] ?></td>
        <td rowspan="4"><img src="<?= $nummer["afbeelding"] ?>" alt="<?= $nummer["titel"] ?>"></td>
        <td class="titel"><?= $nummer["titel"] ?></td>
    </tr>
    <tr>
        <td class="artiest"><?= $nummer["artiest"] ?></td>
    </tr>
    <tr>
        <td>Vorige: <?= $nummer["vorige"] ?></td>
    </tr>
    <tr>
        <td>Weken: <?= $nummer["weken"] ?></td>
    </tr>

<?php } ?>
</table>
    </body>
</html> 