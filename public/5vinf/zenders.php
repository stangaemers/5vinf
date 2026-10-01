<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ziggo zenderoverzicht</title>
          <style>

            

            td, th, tr {
                border: 2px solid #221e1e;
            }
            table {
                border-collapse: seperate;
                 border-spacing: 5px 5px; 
            }


        </style>
    </head>
    <body>
        <h1>Ziggo zenderoverzicht</h1>
<?php

    $zenders = array( "NPO 1"
                    , "NPO 2"
                    , "NPO 3"
                    , "RTL 4"
                    , "RTL 5"
                    , "SBS6"
                    , "RTL 7"
                    , "Veronica / Disney XD"
                    , "Net5"
                    , "RTL 8"
                    );
?>

 <table>
    
     <tr>    <td> zender 1</td> <td> 13:00 - 14:00 </td> <td> NPO 1 </td> </tr> 
     <tr>    <td> zender 2 </td> <td> 14:00 - 15:00</td> <td> NPO 2</td> </tr>
     <tr>    <td> zender 3</td> <td> 15:00 - 16:00 </td><td> NPO 3 </td> </tr>
     <tr>    <td> zender 4 </td> <td> 13:00 - 14:00 </td> <td> rtl 4 </td>  </tr>
    <tr>     <td> zender 5 </td> <td> 14:00 - 15:00 </td> <td> RTL 5 </td>  </tr>
    <tr>    <td> zender 6</td><td> 16:00 - 18:30 </td> <td> SBS </td> </tr>
     <tr>    <td> zender 7</td> <td> 19:00 - 19:45 </td><td> Veronica/Dinsey DX</td> </tr>
     <tr>    <td> zender 8</td> <td> 20:00 - 21:15 </td><td> Net 5 </td> </tr>
     <tr>    <td> zender 9  </td> <td> 21:00 - 22:00 </td> <td> RTL </td>  </tr>
    
 
</table>
    </body>
</html>