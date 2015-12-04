<?php

require_once 'Entities/OrderLijn.php';

class WinkelwagenService {

    public function getPrijs($ProductId, $aantal) {
        $prijs = new Orderlijn($productId, $aantal);
        return $prijs->calculatePrijs();
    }

    public function bestel() {
        $aangepast = false;
        foreach ($_SESSION['winkelwagen'] as $id => $lijn) {
            /* @var $lijn Orderlijn */
            $productId = $lijn->getProduct()->getProductId();
            if ($productId == $_POST['productId']) {
                $lijn->setAantal($_POST['aantal'] + $lijn->getAantal());
                $aangepast = true;
            }
        }
        if (!$aangepast) {
            $winkelwagenlijn = new Orderlijn($_POST['productId'], $_POST['aantal']);
            array_push($_SESSION['winkelwagen'], $winkelwagenlijn);
        }
    }

    public function verwijder() {
        unset($_SESSION['winkelwagen'][$_GET['verwijder']]);
    }

    public function wijzig() {
        foreach ($_SESSION['winkelwagen'] as $id => $lijn) {
            /* @var $lijn Orderlijn */
            $productId = $lijn->getProduct()->getProductId();
            if ($productId == $_POST['productId']) {
                $lijn->setAantal($_POST['aantal']);
            }
        }
    }

}
