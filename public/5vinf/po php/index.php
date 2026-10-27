
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

<?php
    for ($i = 0; $i < count($films); $i++) {
        $film = $films[$i];
        $imdb = $film["ratings"]["imdb"];
        $rotten_tomatoes = $film["ratings"]["rotten_tomatoes"];
        $metacritic = $film["ratings"]["metacritic"];

        if ($imdb == "-") {
            $imdb = "geen";
        }
        if ($rotten_tomatoes == "-") {
            $rotten_tomatoes = "<b>geen</b>";
        }
        if ($metacritic == "-") {
            $metacritic = "<b>geen</b>";
        }
?>
            <div class="film-container">
                <table>
                    <tr>
                        <td>
                            <img class="poster" src="foto's/<?= $film["image"] ?>" alt="<?= $film["titel"] ?>" />
                        </td>
                        <td>
                            <h1><?= $film["titel"] ?></h1>
                            <span class="film-label">Notering:</span> <?= $film["notering"] ?><br />
                            <span class="film-label">Jaar:</span> <?= $film["jaar"] ?><br />
                            <span class="film-label">Duur:</span> <?= $film["duur"] ?> minuten<br />
                            <span class="film-label">Genre:</span> <?= $film["genre"] ?><br />
                            <span class="film-label">Leeftijd:</span> <?= $film["leeftijd"] ?><br />
                            <span class="film-label">Synopsis:</span> <?= $film["synopsis"] ?><br />
                            <span class="film-label">Nieuw:</span> <?= $film["nieuw"] ? "Ja" : "Nee" ?><br />
                            <span class="film-label">Cast:</span> <?= implode(", ", $film["cast"]) ?><br />
                            <span class="film-label">IMDb:</span> <?= $imdb ?><br />
                            <span class="film-label">Rotten Tomatoes:</span> <?= $rotten_tomatoes ?><br />
                            <span class="film-label">Metacritic:</span> <?= $metacritic ?>
                        </td>
                    </tr>
                </table>
            </div>
<?php
    }
?>

        </main>
    </body>
</html>
