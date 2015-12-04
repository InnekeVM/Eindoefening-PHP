<?php
require_once 'Data/ProductDAO.php';
require_once 'Data/IngredientDAO.php';

class ProductService {
    public function getOverzicht() {
        $productDAO = new ProductDAO();
      return $productDAO->getAll();
    }
    
    
    public function getIngredienten($id) {
        $ingredientDAO = new IngredientDAO();
        $lijst = $ingredientDAO->getIngredienten($id);
        return $lijst;
    }
}