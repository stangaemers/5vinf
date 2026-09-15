<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> wandelen</title>
        
    </head>
    <body>
        <h1>x tot de macht y</h1>
<?php
$dagen = 10;       // Aantal dagen
$afstand = 6;     // Afstand per dag in km
$afgelegd = 0;    // Totaal afgelegde afstand

echo "<p>Ik ga de komende {$dagen} dagen een challenge aan. Iedere dag ben ik van plan {$afstand} kilometer te gaan wandelen.</p>";
echo "<p>In het onderstaande schema kan ik voor iedere dag zien hoeveel kilometer ik op dat moment in totaal al heb gewandeld.</p>";
echo "<table border='1'>";
echo "<tr><th>Dag</th><th>Totaal afstand (km)</th></tr>";

for ($i = 1; $i <= $dagen; $i++) {
    $afgelegd += $afstand; // Tel afstand op
    echo "<tr><td>{$i}</td><td>{$afgelegd}</td></tr>";
}

echo "</table>";
?>

        </table>
          
 </body>
</html>
