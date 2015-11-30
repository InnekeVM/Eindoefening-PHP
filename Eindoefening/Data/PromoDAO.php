<?php

require_once 'DBConfig.php';
require_once 'Entities/Klant.php';
require_once 'Entities/Promoprijs.php';

class PromoDAO {

    public function getPromoVoorStatus($id) {
        $sql = "select * from promos where statusId = :id ";
        $dbh = new DBConfig();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $promo = new Promoprijs($rij["promoId"], $rij["prijs"], $rij["naam"], $rij["productId"], $rij["statusId"]);
        $dbh = null;
        return $promo;
    }
    
    

}
