<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wandelchallenge</title>
        <link rel="stylesheet" href="wandelen.css" />
        <style>

            table {
                border-collapse: collapse
            }

            td, th {
                border: 1px solid #ff0000;
            }


        </style>
    </head>
    <body>
        <img src="wandelen.png" alt="wandelen" id="wandelen" />
        <h2>Wandelchallenge</h2>
<?php

    $dagen = array( "maandag", "dinsdag", "woensdag", "donderdag"
                  , "vrijdag", "zaterdag", "zondag"
                  );
    $afstand = 5;
    $totaal = 0;
    
   
?>
        <p>Ik ga de komende <?= count($dagen) ?> dagen een challenge aan. Iedere dag ben ik van plan <?= $afstand ?> kilometer te gaan wandelen.</p>
        <p>In het onderstaande schema kan ik voor iedere dag zien, hoeveel kilometer ik op dat moment in totaal al heb gewandeld.</p>
       
          
    
        -->
        <table>
            <tr>
                <th scope="col">dag</th>
                <th scope="col">afstand</th>
            </tr>
<?php
    
    for ($i = 0; $i < count($dagen); $i++) {
        $totaal = $totaal + $afstand;
?>
            <tr>
                <td><?= $dagen[$i] ?></td>
                <td><?= $totaal ?> km</td>
            </tr>
<?php
    }

?>
        </table>
    </body>
</html>