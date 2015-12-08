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
                        <?php echo ($lijn->getProduct()->getNaam()); ?>
                    </td>
                    <td>
                        <?php echo ($lijn->calculatePrijs()); ?> Euro
                    </td>
                </tr>

                <?php
            }
            ?>

        </table>
        <form method="post" action="Bestel.php?action=bestel">
            <p>Opmerkingen:</p>
            <textarea name="extraInfo" id="extraInfo"></textarea>
            <input type="submit" value="Bestelling Plaatsen">
        </form>

        <a href="Overzicht.php">Terug naar overzicht</a>       
      





    </body>
