<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Frencken Webtemplate</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="dashboard">
        <h1>Frencken Webtemplate</h1>

        <p>Je ontwikkelomgeving werkt. Je kunt nu aan de slag met HTML, CSS, PHP, SQL, JSON en XML.</p>

        <section class="knoppen">
            <a class="knop" href="/">Open website</a>
            <a class="knop" href="/data/voorbeeld.json">Bekijk JSON</a>
            <a class="knop" href="/data/voorbeeld.xml">Bekijk XML</a>
        </section>

        <section>
            <h2>Waar zet je bestanden?</h2>
            <ul>
                <li>HTML/PHP-bestanden: in <code>public</code></li>
                <li>CSS-bestanden: in <code>public/css</code></li>
                <li>Afbeeldingen: in <code>public/afbeeldingen</code></li>
                <li>JSON/XML-bestanden: in <code>public/data</code></li>
                <li>Geüploade bestanden via PHP: in <code>public/uploads</code></li>
            </ul>
        </section>

        <section>
            <h2>phpMyAdmin</h2>
            <p>Open phpMyAdmin via het tabblad <strong>Ports</strong> en kies poort <strong>8080</strong>.</p>
            <p>Gebruiker: <code>root</code><br>Wachtwoord: <code>root</code></p>
        </section>

        <footer>
            PHP werkt: <?php echo date("d-m-Y H:i"); ?>
        </footer>
    </main>
</body>
</html>