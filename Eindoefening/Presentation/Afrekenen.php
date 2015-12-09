<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <h1>Pizzeria Mama Mia</h1>
        <h2>Bestelling </h2>
        <table>
            <?php
            foreach ($_SESSION['winkelwagen'] as $id => $lijn) {
                ?>
                <tr>
                    <td>

                        <?php
                        /* @var $lijn OrderLijn */
                        echo ($lijn->getProduct()->getNaam());
                        ?>
                    </td>
                    <td>

                        <?php
                        /* @var $bestelService BestelService */
                        $prijs=$bestelService->getPrijs($_SESSION['klantId'], $lijn->getProduct()->getProductId());
                        $totaal=$totaal+$prijs;
                        echo ($prijs);
                        ?> Euro

                    </td>
                </tr>

                <?php
            }
            ?>

        </table>
        <h2>Totaalprijs van de bestelling:</h2>
        <p> <?php echo $totaal;?> euro</p>
        <h2>Klantgegevens</h2>
          <a href="Update.php">
            <button>
                Wijzig gegevens
            </button>
        </a>
        <h3>Naam:</h3>
        <p>
            <?php
            /* @var $klant Klant */
            echo($klant->getVoornaam() . " " . $klant->getNaam());
            ?>
        </p>
        <h3>Adres:</h3>
      
        <p>
            <?php echo ($klant->getAdres() . " " . $klant->getNummer()); ?><br>
            <?php echo($klant->getPostcode() . " " . $klant->getGemeente()); ?><br>

        </p>
        <h3>Telefoonnummer</h3>
        <p>
            <?php echo ($klant->getTelefoonnummer()); ?>
        </p>



        <form method="post" action="Bestel.php?action=bestel">
            <h3>Opmerkingen:</h3>
            <textarea name="extraInfo" id="extraInfo"></textarea>
            <input type="submit" value="Bestelling Plaatsen">
        </form>
        <a href="Winkelwagen.php">Terug naar winkelwagen</a> 
        <a href="Overzicht.php">Terug naar overzicht</a>       






    </body>
