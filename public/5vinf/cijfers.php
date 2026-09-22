<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cijfers</title>
    </head>
    <body>
        <h2>Cijfers</h2>
<?php

    $cijfers = array( 6.2, 6.3, 7.0, 5.3, 7.5, 7.0, 7.8, 6.1, 6.9
                    , 6.4, 6.5, 5.3, 7.2, 7.8, 5.0, 4.9, 6.8, 6.3
                    , 6.3, 8.0, 7.1, 6.4, 5.1, 6.5, 6.8
                    );

    $aantal = count($cijfers);

    // bereken de som van de cijfers
    // in de praktijk gebruik je array_sum($cijfers), maar voor
    // deze opgave wil ik, dat je zelf de som van alle cijfers
    // uit de array bepaalt.
  //  $som = ...;
    $totaal = 0;

    for ( $i = 0 ; $i < $aantal ; $i++ ) {
        $cijfer = $cijfers[$i];
    //foreach ($cijfers as $cijfer){
        $totaal += $cijfer;
    }
    
    // het gemiddelde volgt uit de som gedeeld door het aantal.
    $gemiddelde = $totaal / $aantal;
    laagste = $cijfers[0];
    hoogste = $cijfers[0];
 foreach ($cijfers as )
?>
        <p>Het gemiddelde cijfer is <?= $gemiddelde ?></p>
    </body>
</html>