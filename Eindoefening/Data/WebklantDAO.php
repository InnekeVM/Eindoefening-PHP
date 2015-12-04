<?php

require_once 'includes/init.php';
require_once 'Entities/Klant.php';
require_once 'Entities/Webklant.php';

class WebklantDAO {

    public function getById($id) {
        $sql = "select * from webklanten where userId = :id";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $webklant = new Webklant($rij['email'], $rij['wachtwoord'], $rij['status'], $rij['klantId']);
        $dbh = null;
        return $webklant;
    }

    public function getByEmail($email) {
        $sql = "select * from webklanten where email = :email";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':email' => $email));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rij) {
            $webklant = new Webklant($rij['email'], $rij['wachtwoord'], $rij['status'], $rij['klantId']);
            return $webklant;
        } else {
            return false;
        }
    }

    public function voegWebklantToe($email, $wachtwoord, $klantId) {
        $sql = "insert into klanten (email, wachtwoord, klantId) values (:email, :wachtwoord, :klantId)";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':email' => $email, ':wachtwoord' => $wachtwoord, ':klantId' => $klantId));
    }

}
