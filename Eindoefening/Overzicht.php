<?php
require_once 'includes/init.php';
require_once 'Business/ProductService.php';

$productService = new ProductService();
$overzicht = $productService->getOverzicht();
//$ingredientenlijst = $productService->getIngredienten($id);

include ('Presentation/WebshopOverzicht.php');
        

