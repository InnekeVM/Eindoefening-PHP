<?php
require_once 'includes/init.php';
require_once 'Entities/Product.php';
require_once 'Entities/Ingredient.php';

class IngredientDAO {

    public function getIngredienten($id) {

        $sql = "select ingredientId, naam from ingredienten where ingredientId IN (select ingredientId from producteningredienten where productId = :id)";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lijst = array();

        foreach ($resultSet as $rij) {
            $ingredient = new Ingredient($rij["ingredientId"], $rij["naam"]);
            $lijst[] = $ingredient;
        }
        
        return $lijst;
    }

}
