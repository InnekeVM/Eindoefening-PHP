
<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <h1>Pizzeria Mama Mia</h1>
        <h2>Winkelwagen </h2>
        <table>
            <?php foreach ($_SESSION['winkelwagen'] as $id => $winkelwagenlijn) {
                ?>
                <tr>
                    <td>
                        <a href="Winkelwagen.php?verwijder=<?php echo $id; ?>">Verwijder</a>
                    </td>
                    <td>
                        <?php echo ($winkelwagenlijn->getProduct()->getNaam()); ?>
                    </td>
                    <td>
                        <form action="Winkelwagen.php?action=wijzig" method="post">
                            <input type="hidden" name="productId" value="<?php echo $winkelwagenlijn->getProduct()->getProductId(); ?>">
                            <input type="number" name="aantal" min="0" max="99" value="<?php echo $winkelwagenlijn->getAantal(); ?>">
                            <input type="submit" value="wijzig">

                        </form>
                    </td>
                </tr>
            </a>
            <?php
        }
        ?>

    </table>
        <a href="Overzicht.php">Terug naar overzicht</a>
        <p>Afrekenen:</p>
        <a href="Login.php">Ik heb reeds een account</a>
        <a href="KlantRegistratie.php">Ik heb geen account</a>

</body>

