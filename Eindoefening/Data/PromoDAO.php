<?php

require_once 'includes/init.php';
require_once 'Entities/Klant.php';
require_once 'Entities/Promoprijs.php';

class PromoDAO {

    public function getPromoVoorStatus($id) {
        $sql = "select * from promos where statusId = :id ";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $lijst = array();

        foreach ($resultSet as $rij) {
            $promo = new Promoprijs($rij['promoId'], $rij['prijs'], $rij['naam'], $rij['productId'], $rij['statusId']);
            $lijst[] = $promo;
        }
        $dbh = null;
        return $lijst;
    }

}
