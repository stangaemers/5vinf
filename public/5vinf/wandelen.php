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
 $dagen = 7;
    $afstand = 5;
    $resultaat = 1;
    $afgelegd = 0;
?>
 <p>Ik ga de komende <?= $dagen ?> dagen een challenge aan. Iedere dag ben ik van plan <?= $afstand ?> kilometer te gaan wandelen.</p>
        <p>In het onderstaande schema kan ik voor iedere dag zien, hoeveel kilometer ik op dat moment in totaal al heb gewandeld.</p>
    <table>
        
 <tr>
    <th> dag </th><th> afstand </th>  
</tr>
<?php  
for ( $i = 0; $i == $resultaat; $i ++ ) {
 echo "<tr><td>", $resultaat = $resultaat + 1, "</td><td>", $afgelegd = $afgelegd + $afstand, "</td></tr>";
}
?>
    


        </table>
          
 </body>
</html>
