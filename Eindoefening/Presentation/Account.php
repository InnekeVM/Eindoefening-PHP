<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'EmailaddresReedsAccount') {
            ?>
            <p>Emailadres reeds in gerbuik, kies nieuw adres of ga naar de loginpagina</p>
            <?php
        }
        if (isset($_GET['error']) && $_GET['error'] == 'WachtwoordFout') {
            ?>
            <p>Wachtwoordbevestiging fout, probeer nogmaals</p>
            <?php
        }
        ?>
        <form method="post" action="WebklantRegistratie.php?action=account&id=<?php echo $_GET['id'];?>">
            <fieldset>
                <legend>Logingegevens:</legend>
                Email:
                <input type="email" name="email" placeholder="Emailadres" required>
                <br>
                Wachtwoord:
                <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
                <br>
                Typ nogmaals je wachtwoord:
                <input type="password" name="wachtwoordher" placeholder="Wachtwoord" required>
                <br>

            </fieldset>

            <input type="submit" value="Maak Account">
        </form>

    </body>
