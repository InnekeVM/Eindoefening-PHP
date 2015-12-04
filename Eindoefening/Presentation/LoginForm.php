<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <h1>Login</h1>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'WachtwoordFout') {
            ?>
            <p>Foutief wachtwoord, probeer nogmaals:</p>
            <?php
        }
         if (isset($_GET['error']) && $_GET['error'] == 'KlantBestaatNiet') {
            ?>
            <p>Foutieve inloggegevens, probeer nogmaals:</p>
            <?php
        }
        ?>
        <form action="Login.php?action=login" method="post">
            <input type="email" name="email" placeholder="e-mail" value="<?php if (isset($_COOKIE['email'])){echo $_COOKIE['email'];}?>">
            <input type="password" name="wachtwoord" placeholder="wachtwoord">
            <input type="submit" value="login">
        </form>
            
    </body>
