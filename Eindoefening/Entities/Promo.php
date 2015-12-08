<?php

class Promo {
    private $promoId;
    private $prijs;
    private $naam;
    private $productId;
    private $statusId;
    
    function __construct($promoId, $prijs, $naam, $productId, $statusId) {
        $this->promoId = $promoId;
        $this->prijs = $prijs;
        $this->naam = $naam;
        $this->productId = $productId;
        $this->statusId = $statusId;
    }

 
    function getPromoId() {
        return $this->promoId;
    }

    function getPrijs() {
        return $this->prijs;
    }

    function getNaam() {
        return $this->naam;
    }

    function getProductId() {
        return $this->productId;
    }

    function getStatusId() {
        return $this->statusId;
    }

    function setPrijs($prijs) {
        $this->prijs = $prijs;
    }

    function setNaam($naam) {
        $this->naam = $naam;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setStatusId($statusId) {
        $this->statusId = $statusId;
    }


}

