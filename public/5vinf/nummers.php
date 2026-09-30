<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>meest gestreamde nummer op Spotify</title>
         <style>

            table {
                border-collapse: collapse
            }

            td, th, tr {
                border: 2px solid #221e1e;
            }


        </style>
    </head>
    <body>
        <h1>meest gestreamde nummer op Spotify</h1>
<?php

    $nummer = array( "titel"       => "Blinding Lights"
                   , "artiest"     => "The Weeknd"
                   , "album"       => "After Hours"
                   , "duur"        => "3:22"
                   , "afbeelding"  => "blinding-lights.png"
                   );

?>

  <table>
     <tr>    <td> titel </td> <td> <?= $nummer["titel"] ?></td> </tr>
     <tr>    <td> artiest </td> <td> <?= $nummer["artiest"] ?></td> </tr>
     <tr>    <td> album </td> <td> <?= $nummer["album"] ?> </td> </tr>
     <tr>    <td> duur </td> <td> <?= $nummer["duur"] ?> </td>  </tr>
    <tr>     <td> afbeelding </td>  <td><img src="<?= $nummer["afbeelding"] ?>"</td>  </tr>
</table>
    </body>
</html>