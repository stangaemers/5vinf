<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>streamingplatform</title>
        <link rel="stylesheet" href="streamingplatform.css" />
    </head>
    <body>
<?php
    include("films.php");
?>
        <main>
            <table>
<?php
    for ($i = 0; $i < count($films); $i++) {
        $film = $films[$i];
?>
                <tr>
                    <td><img class="poster" src="foto's/<?= $film["image"] ?>" alt="<?= $film["titel"] ?>" /></td>
                    <td>
                        <strong><?= $film["titel"] ?></strong><br />
                        Notering: <?= $film["notering"] ?><br />
                        Jaar: <?= $film["jaar"] ?><br />
                        Duur: <?= $film["duur"] ?> minuten<br />
                        Genre: <?= $film["genre"] ?><br />
                        Leeftijd: <?= $film["leeftijd"] ?><br />
                        Synopsis: <?= $film["synopsis"] ?><br />
                        Nieuw: <?= $film["nieuw"] ? "Ja" : "Nee" ?><br />
                        Cast: <?= implode(", ", $film["cast"]) ?><br />
                        IMDb: <?= $film["ratings"]["imdb"] ?><br />
                        Rotten Tomatoes: <?= $film["ratings"]["rotten_tomatoes"] ?><br />
                        Metacritic: <?= $film["ratings"]["metacritic"] ?>
                    </td>
                </tr>
<?php } ?>
            </table>
        </main>
    </body>
</html>