<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <h1>Pizzeria Mama Mia</h1>
        <h2>Onze Pizza's </h2>
        <a href="Winkelwagen.php">Naar de winkelwagen</a>
        <table>
            <?php foreach ($overzicht as $pizza) {
                ?>
                <tr>
                    <td>
                        <?php echo ($pizza->getNaam()); ?>
                    </td>
                    <td>
                        <ul>
                            <?php foreach ($pizza->getIngredienten() as $ingredient) {
                                ?>
                                <li>
                                    <?php echo ($ingredient->getNaam()); ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </td>
                    <td>
                        <form action="Winkelwagen.php?action=bestel" method="post">
                            <input type="hidden" name="productId" value="<?php echo $pizza->getProductId(); ?>">
                            <input type="number" name="aantal" min="0" max="99">
                            <input type="submit" value="bestel">
                        </form>
                    </td>
                </tr>

            <?php }
            ?>

        </table>

    </body>