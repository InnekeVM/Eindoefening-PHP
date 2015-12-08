<?php

require_once 'Data/ProductDAO.php';
require_once 'Data/BestellingDAO.php';
require_once 'Data/OrderLijnDAO.php';
require_once 'Data/StatusDAO.php';
require_once 'Data/PromoDAO.php';

class BestelService {

    public function voegToe($extraInfo, $klantId) {
        $bestelDAO = new BestellingDAO();
        $datum = date("d-m-Y");
        $tijdstip = date("H:i:s");
        $id = $bestelDAO->voegToe($datum, $extraInfo, $klantId, $tijdstip);
        return $id;
    }

    public function getPrijs($klantId, $ProductId) {
        $statusDAO = new StatusDAO();
        $promoDAO = new PromoDAO();
        $productDAO = new ProductDAO();
        $promoLijst = $promoDAO->getPromoVoorStatus($statusDAO->getById($klantId));
        $prijs = $productDAO->getById($ProductId)->getPrijs();
        if (isset($promoLijst)) {
            foreach ($promoLijst as $promo) {
                /* @var $promo Promo */
                if ($ProductId == $promo->getProductID) {
                    $prijs = $prijs * $promo->getPrijs();
                }
            }
        }
        return $prijs;
    }

    public function bestel($klantId, $extraInfo) {
        $orderlijnDAO = new OrderLijnDAO();
        $bestelService = new BestelService();
        $bestelId = $bestelService->voegToe($extraInfo, $klantId);
        foreach ($_SESSION['winkelwagen'] as $lijn) {
            /* @var $lijn Orderlijn */
            $productId = $lijn->getProductId();
            $aantal = $lijn->getAantal();
            $prijs = $bestelService->getPrijs($klantId, $productId) * $aantal;
            $orderlijnDAO->voegToe($productId, $aantal, $bestelId, $prijs);
        }
    }

}
