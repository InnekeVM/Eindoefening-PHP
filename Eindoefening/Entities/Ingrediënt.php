<?php
 class Ingredient {
     private $ingredientId;
     private $naam;

     function __construct($ingredientId, $naam) {
         $this->ingredientId = $ingredientId;
         $this->naam = $naam;
     }
     function getIngredientId() {
         return $this->ingredientId;
     }

     function getNaam() {
         return $this->naam;
     }

     function setNaam($naam) {
         $this->naam = $naam;
     }

 }

