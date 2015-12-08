<?php

require_once 'Data/ProductDAO.php';

class Orderlijn {

    private $lijnId;
    private $productId;
    private $aantal;
    private $bestelId;
    private $prijs;

    function __construct($productId, $aantal) {
        $this->productId = $productId;
        $this->aantal = $aantal;
    }

    function getLijnId() {
        return $this->lijnId;
    }
    function getProductId() {
        return $this->productId;
    }

        function getProduct() {
        return ProductDAO::getById($this->productId);
    }

    function calculatePrijs() {
        return $this->getProduct()->getPrijs() * $this->aantal;
    }

    function getAantal() {
        return $this->aantal;
    }

    function getbestelId() {
        return $this->bestelId;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setAantal($aantal) {
        $this->aantal = $aantal;
    }

    function setBestelId($bestelId) {
        $this->bestelId = $bestelId;
    }
    
    function setPrijs($prijs) {
        $this->prijs;
    }

}
