<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Top 40</title>
        <link rel="stylesheet" href="top40.css" />
    </head>
    <body>
      <<img id="logo" src="https://www.top40.nl/img/generic/logo/top40.svg" alt="Top 40" /> 
<?php

    include("top40.php");

    for ($i = 0; $i < count($top40); $i++ ) {

    $nummer = $top40[$i];
?>
<table>
<<?= $nummer["notering"] ?>
<td><?= $nummer["vorige"] ?>
<p><?= $nummer["weken"] ?></p>
<p><?= $nummer["titel"] ?></p>
<p><?= $nummer["artiest"] ?></p>
<p><?= $nummer["afbeelding"] ?></p>
</table>
<?php

    }

?>
    </body>
</html> 