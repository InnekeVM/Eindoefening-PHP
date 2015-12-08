<?php

require_once 'DBConfig.php';
require_once 'Entities/Klant.php';
require_once 'Entities/Promo.php';

class PromoDAO {

    public function getPromoVoorStatus($id) {
        $sql = "select * from promos where statusId = :id ";
        $dbh = new DBConfig();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $resultSet = $dbh->query($sql);
        $lijst = array();

        foreach ($resultSet as $rij) {
            $promo = new Promo($rij['promoId'], $rij['prijs'], $rij['naam'], $rij['productId'], $rij['statusId']);
            $lijst[] = $promo;
        }
        $dbh = null;
        return $lijst;
    }

}
