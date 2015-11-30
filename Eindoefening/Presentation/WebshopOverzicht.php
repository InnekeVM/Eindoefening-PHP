<html>
    <head>
        <meta charset="utf-8">
        <title>Mama Mia</title>

    </head>
    <body>
        <h1>Pizzeria Mama Mia</h1>
        <h2>Onze Pizza's </h2>
        <ul>
            <?php foreach ($overzicht as $pizza) {
                ?>
                <li>
                    <?php echo ($pizza->getNaam()) ?>
                    <ul>
                        <?php foreach ($ingredientenlijst($pizza->getProductId) as $ingredient) {
                            ?>
                            <li>
                                <?php echo ($ingredient->getNaam); ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <form action="../BestelForm.php?bestel" method="post">
                        <select name="hoeveel">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="submit" value="bestel">
                    </form>
                </li>

            <?php }
            ?>

        </ul>

    </body>