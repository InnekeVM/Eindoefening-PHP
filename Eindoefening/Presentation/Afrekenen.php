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

        <a href="Overzicht.php">Terug naar overzicht</a>       
        <a href="Bestel.php">Bestelling plaatsen</a>





    </body>
