<?php

 class Product {
     private $product_id;
     private $naam;
     private $beschikbaarheid;
     private $prijs;
   
    
     function __construct($product_id, $naam, $beschikbaarheid, $prijs) {
         $this->product_id = $product_id;
         $this->naam = $naam;
         $this->beschikbaarheid = $beschikbaarheid;
         $this->prijs = $prijs;
         $this->promoprijs = $promoprijs;
     }
     
     function getProduct_id() {
         return $this->product_id;
     }

     function getNaam() {
         return $this->naam;
     }

     function getBeschikbaarheid() {
         return $this->beschikbaarheid;
     }

     function getPrijs() {
         return $this->prijs;
     }

        function setNaam($naam) {
         $this->naam = $naam;
     }

     function setBeschikbaarheid($beschikbaarheid) {
         $this->beschikbaarheid = $beschikbaarheid;
     }

     function setPrijs($prijs) {
         $this->prijs = $prijs;
     }
  
 }
