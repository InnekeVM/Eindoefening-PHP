<?php
require_once 'Data/ProductDAO.php';

class ProductService {
    public function getOverzicht() {
        $productDAO = new ProductDAO();
        $lijst = $productDAO->getAll();
        return $Lijst;
    }
    
    public function getIngredienten($id) {
        $productDAO = new ProductDAO();
        $lijst = $productDAO->getIngredienten($id);
        return $lijst;
    }
}