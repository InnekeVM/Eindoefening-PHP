<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <h1>Bewerk gegevens</h1>
          <form method="post" action="Update.php?action=update">
            <fieldset>
                <legend>Klantgegevens:</legend>
                Voornaam:
                <?php
                /*@var $klant Klant*/
                ?>
                <input type="text" name="voornaam" value="<?php echo ($klant->getVoornaam());?>" required>
                <br>
                Familienaam:
                <input type="text" name="naam" value="<?php echo ($klant->getNaam());?>" required>
                <br>
                Adres:
                <input type="text" name="adres" value="<?php echo ($klant->getAdres());?>" required>
                <br>
                Nummer:
                <input type="number" name="huisnummer" value="<?php echo ($klant->getNummer());?>" required>
                <br>
                Postcode:
                <input type="number" name="postcode" value="<?php echo ($klant->getPostcode());?>" required>
                <br>
                gemeente:
                <input type="text" name="gemeente"  value="<?php echo ($klant->getGemeente());?>" required>
                <br>
                Telefoonnummer:
                <input type="tel" name="tel" value="<?php echo ($klant->getTelefoonnummer());?>" required>
                <br>
            </fieldset>
           
            <input type="submit" value="Wijzig">
        </form>
    </body>