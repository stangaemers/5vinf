<link rel="stylesheet" href="style.css">
<nav class="navbar">
<h1>Blend it like Beckham</h1>
<a href="index.php">Home</a>
<a href="bestellen.php">Bestellen</a>
<a href="producten.php">Producten</a>
<a href="info.php">Contact</a>
</nav>
<form action="bevesteging.php" method="post">

<div class="blokken-container">

<div class="tekst-blok">
<h2>Basis</h2>
Aardbei-banaan (€4) <input type="number" name="aardbei" value="0"><br>
Bosvruchten (€4) <input type="number" name="aardbei" value="0"><br>
spinazie-appel (€4.5) <input type="number" name="aardbei" value="0"><br>
Mango-ananas (€4.5) <input type="number" name="mango" value="0">
</div>

<div class="tekst-blok">
<h2>Toppings</h2>
<input type="checkbox" name="top[]" value="0.75"> Chiazaad(€0,75)<br>
<input type="checkbox" name="top[]" value="0.75"> Havermout(€0,75)<br>
<input type="checkbox" name="top[]" value="0.75"> Proteïnepoeder(€0,75)<br>
<input type="checkbox" name="top[]" value="0.75"> Gember(€0,75)<br>
<input type="checkbox" name="top[]" value="0.75"> Kokosmelk(€0,75)<br>
<input type="checkbox" name="top[]" value="0.75"> Honing(€0,75)
</div>

<div class="tekst-blok">
<h2>Extra</h2>
<input type="checkbox" name="extra[]" value="1"> Extra Groot(€1)<br>
<input type="checkbox" name="extra[]" value="1.5"> Biologisch(€1,50)<br>
<input type="checkbox" name="extra[]" value="0.5"> IJs(€0,50)
</div>

<div class="tekst-blok">
<h2>Bestellen</h2>
<button type="submit">Bestel</button>
</div>

</div>

</form>