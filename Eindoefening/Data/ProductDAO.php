<?php

require_once 'includes/init.php';
require_once 'Entities/Product.php';
require_once 'Entities/Ingredient.php';
require_once 'Entities/Promoprijs.php';

class ProductDAO {

    public function getAll() {
        $sql = "select * from producten";
        $dbh = InnekeFramework::getDatabase();
        $resultSet = $dbh->query($sql);

        $lijst = array();

        foreach ($resultSet as $rij) {
            $product = new Product($rij["productId"], $rij["naam"], $rij["beschikbaarheid"], $rij["prijs"]);
            $lijst[] = $product;
        }
        $dbh = null;
        return $lijst;
    }

    public function getById($id) {
        $sql = "select * from producten where productId = :id";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $product = new Product($rij["productId"], $rij["naam"], $rij["beschikbaarheid"], $rij["prijs"]);
        $dbh = null;
        return $product;
    }

}
