<?php

require_once 'includes/init.php';
require_once 'Entities/Klant.php';

class KlantDAO {

    public function getById($id) {
        $sql = "select * from klanten where klantId = :id";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $klant = new Klant($rij['klantId'], $rij['naam'], $rij['voornaam'], $rij['adres'], $rij['postcode'], $rij['gemeente'], $rij['telefoonnummer']);
        $dbh = null;
        return $klant;
    }

    public function voegKlantToe($naam, $voornaam, $adres, $postcode, $gemeente, $telefoonnummer) {
        $sql = "insert into klanten (naam, voornaam, adres, postcode, gemeente, telefoonnummer) values (:naam, :voornaam, :adres, :postcode, :gemeente, :telefoonnummer)";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':naam' => $naam, ':voornaam' => $voornaam, ':adres' => $adres, ':postcode' => $postcode, ':gemeente' => $gemeente, ':telefoonnummer' => $telefoonnummer));
        $id = $dbh->lastInsertId();
        return $id;
    }

}
