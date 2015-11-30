<?php
 class Ingredient {
     private $ingredientId;
     private $ingredient;
     
     function __construct($ingredientId, $ingredient) {
         $this->ingredientId = $ingredientId;
         $this->ingredient = $ingredient;
     }
    
     function setIngredient($ingredient) {
         $this->ingredient = $ingredient;
     }

     function getIngredientId() {
         return $this->ingredientId;
     }

     function getIngredient() {
         return $this->ingredient;
     }



 }

