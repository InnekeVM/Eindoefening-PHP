<?php

class OrderLijn {
    private $orderLijnId;
    private $productId;
    private $aantal;
    private $winkelwagenId;
    
    function __construct($orderLijnId, $productId, $aantal, $winkelwagenId) {
        $this->orderLijnId = $orderLijnId;
        $this->productId = $productId;
        $this->aantal = $aantal;
        $this->winkelwagenId = $winkelwagenId;
    }

    function getOrderLijnId() {
        return $this->orderLijnId;
    }

    function getProductId() {
        return $this->productId;
    }

    function getAantal() {
        return $this->aantal;
    }

    function getWinkelwagenId() {
        return $this->winkelwagenId;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setAantal($aantal) {
        $this->aantal = $aantal;
    }

    function setWinkelwagenId($winkelwagenId) {
        $this->winkelwagenId = $winkelwagenId;
    }


}


