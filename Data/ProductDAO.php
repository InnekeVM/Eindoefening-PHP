<?php

require_once 'DBConfig.php';
require_once '../Entities/Product.php';
require_once '../Entities/Ingrediënt.php';
require_once '../Entities/Promoprijs.php';

class ProductDAO {

    public function getAll() {
        $sql = "select * from producten";
        $dbh = new DBConfig();

        $resultSet = $dbh->query($sql);
        $lijst = array();

        foreach ($resultSet as $rij) {
            $product = new Product($rij["product_id"], $rij["naam"], $rij["beschikbaarheid"], $rij["prijs"]);
            $lijst[] = $product;
        }
        $dbh = null;
        return $lijst;
    }

    public function getById($id) {
        $sql = "select * form producten where productId = :id";

        $$dbh = new DBConfig();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $product = new Product($rij["product_id"], $rij["naam"], $rij["beschikbaarheid"], $rij["prijs"]);
        $dbh = null;
        return $product;
    }

    public function getIngredienten($id) {
        $sql = "select naam from ingredienten where ingredientId = (select ingredientId from productingredient where productId = :id)";
        $dbh = new DBConfig();
        $stmt = $dbh->prepare($sql);

        $stmt->execute(array(':id' => $id));
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lijst = array();

        foreach ($resultSet as $rij) {
            $ingredient = new Ingredient($rij["ingredientId"], $rij["ingredient"]);
            $lijst[] = $ingredient;
        }
        $dbh = null;
        return $lijst;
    }

}
