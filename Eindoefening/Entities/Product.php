<?php

class Product {

    private $productId;
    private $naam;
    private $beschikbaarheid;
    private $prijs;

    function __construct($productId, $naam, $beschikbaarheid, $prijs) {
        $this->productId = $productId;
        $this->naam = $naam;
        $this->beschikbaarheid = $beschikbaarheid;
        $this->prijs = $prijs;
    }

    function getProductId() {
        return $this->productId;
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

    function getIngredienten() {
        $ingredientenDAO = new IngredientDAO();
        return $ingredientenDAO->getIngredienten($this->productId);
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
