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
        $klant = new Klant($rij['naam'], $rij['voornaam'], $rij['adres'], $rij['nummer'], $rij['postcode'], $rij['gemeente'], $rij['telefoonnummer']);
        $dbh = null;
        return $klant;
    }

    public function voegKlantToe($naam, $voornaam, $adres, $nummer, $postcode, $gemeente, $telefoonnummer) {
        $sql = "insert into klanten (naam, voornaam, adres, nummer, postcode, gemeente, telefoonnummer) values (:naam, :voornaam, :adres, :nummer, :postcode, :gemeente, :telefoonnummer)";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':naam' => $naam, ':voornaam' => $voornaam, ':adres' => $adres, ':nummer' => $nummer, ':postcode' => $postcode, ':gemeente' => $gemeente, ':telefoonnummer' => $telefoonnummer));
        $id = $dbh->lastInsertId();
        return $id;
    }
    
    public function updateKlant($klant){
        $sql = "update klanten set naam = :naam, voornaam = :voornaam, adres = :adres, nummer = :nummer, postcode = :postcode, gemeente = :gemeente, telefoonnummer = :telefoonnummer where klantId = :klantId";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        /*@var $klant Klant*/
        $stmt->execute(array(':naam' => $klant->getNaam(), ':voornaam' => $klant->getVoornaam(), ':adres' => $klant->getAdres(), ':nummer' => $klant->getNummer(), ':postcode' => $klant->getPostcode(), ':gemeente' => $klant->getGemeente(), ':telefoonnummer' => $klant->getTelefoonnummer(), ':klantId' => $_SESSION['klantId']));
        $dbh = null;
    }

}
 