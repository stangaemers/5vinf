<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> fifa rankings </title>
        <style>
            ol li {
  margin-bottom: 10px; 
}

ol li:last-child {
  margin-bottom: 0; 
}

ol {
 
  display: flex;
  flex-direction: column;
  gap: 12px;

  
  font-family: 'garamond', 'sans-serif'; 
  font-size: 16px;                 
  
  
  color: #814a25;                  
}       

            </style>
    </head>
    <body>
                <h1>FIFA Wereldranglijst</h1>
<?php
    $fifa = array( "Spanje"
                 , "Argentinië"
                 , "Frankrijk"
                 , "Engeland"
                 , "Marokko"
                 , "Brazilië"
                 , "Portugal"
                 , "België"
                 , "Nederland"
                 , "Mexico"
                 );
?>
<ol>
    <?php
        for($i = 0 ; $i < count($fifa); $i++){
?>
    <li><?= $fifa[$i] ?> </li>
    <?php
        }
    ?>
     </ol>

</bod>
</html>
