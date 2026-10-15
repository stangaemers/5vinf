<?php
$totaal = 0;

$aantal1 = $_POST['aardbei'] ?? 0;
$aantal2 = $_POST['mango'] ?? 0;

$totaal += $aantal1 * 4;
$totaal += $aantal2 * 4.5;

if(isset($_POST['top'])){
    foreach($_POST['top'] as $t){
        $totaal += $t;
    }
}

if(isset($_POST['extra'])){
    foreach($_POST['extra'] as $e){
        $totaal += $e;
    }
}

/* verzendkosten */
if($totaal < 25){
    $totaal += 5;
    $verzend = "€5 verzendkosten";
} else {
    $verzend = "Gratis verzending";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">
<h1>Blend it like Beckham</h1>
</nav>

<div class="contact-blok">
<div class="tekst-blok">

<h2>Bevestiging</h2>

<p>Totaal: €<?php echo number_format($totaal,2); ?></p>
<p><?php echo $verzend; ?></p>

<button>Betaal nu</button>

</div>
</div>

</body>
</html>