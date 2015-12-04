
<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <h1>Pizzeria Mama Mia</h1>
        <h2>Winkelwagen </h2>
        <table>
            <?php
            if (isset($_SESSION['winkelwagen'])) {
                foreach ($_SESSION['winkelwagen'] as $id => $lijn) {
                    ?>
                    <tr>
                        <td>
                            <a href="Winkelwagen.php?verwijder=<?php echo $id; ?>">Verwijder</a>
                        </td>
                        <td>
                            <?php echo ($lijn->getProduct()->getNaam()); ?>
                        </td>
                        <td>
                            <?php echo ($lijn->calculatePrijs()); ?> Euro
                        </td>
                        <td>
                            <form action="Winkelwagen.php?action=wijzig" method="post">
                                <input type="hidden" name="productId" value="<?php echo $lijn->getProduct()->getProductId(); ?>">
                                <input type="number" name="aantal" min="0" max="99" value="<?php echo $lijn->getAantal(); ?>">
                                <input type="submit" value="wijzig">

                            </form>
                        </td>
                    </tr>

                    <?php
                }
                ?>

            </table>
            <a href="Overzicht.php">Terug naar overzicht</a>
            <p>Afrekenen:</p>
            <a href="Login.php">Ik heb reeds een account</a>
            <a href="KlantRegistratie.php">Ik heb geen account</a>
            <?php
        } else {
            ?>
            <p>Winkelwagen is leeg</p>
            <a href="Overzicht.php">Terug naar overzicht</a>
            <?php
        }
        ?>
    </body>

