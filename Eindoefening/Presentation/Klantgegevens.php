<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'KlantBestaatNiet') {
            ?>
            <p>Klant bestaat niet.  Registreer je hier:</p>
            <?php
        }
        ?>
        <form method="post" action="KlantRegistratie.php?action=registreer">
            <fieldset>
                <legend>Klantgegevens:</legend>
                Voornaam:
                <input type="text" name="voornaam" placeholder="Voornaam" required>
                <br>
                Familienaam:
                <input type="text" name="naam" placeholder="Familienaam" required>
                <br>
                Adres:
                <input type="text" name="adres" placeholder="Straat" required>
                <br>
                Nummer:
                <input type="number" name="huisnummer" required>
                <br>
                Postcode:
                <input type="number" name="postcode" required>
                <br>
                gemeente:
                <input type="text" name="gemeente" placeholder="Gemeente" required>
                <br>
                Telefoonnummer:
                <input type="tel" name="tel" required>
                <br>
            </fieldset>
            <input type="checkbox" name="acount">Een nieuwe account aanmaken<br>
            <input type="submit" value="Vul gegevens in">
        </form>

    </body>
