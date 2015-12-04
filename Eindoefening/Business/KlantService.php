<?php

require_once 'Exceptions/WachtwoordFoutException.php';
require_once 'Exceptions/EmailadresReedsAccountException.php';
require_once 'Exceptions/KlantBestaatNietException.php';
require_once 'Data/KlantDAO.php';
require_once 'Data/WebklantDAO.php';

class KlantService {

    public function getKlant($userId) {
        $webklantDAO = new WebklantDAO();
        $klantId = $webklantDAO->getById($userId)->getKlantId();
        if ($klantId == NULL) {
            throw new KlantBestaatNietException;
        } else {
            $klantDAO = new KlantDAO;
            $klant = $klantDAO->getById($klantId);
            return $klant;
        }
    }

    public function voegToe($naam, $voornaam, $adres, $postcode, $gemeente, $telefoonnummer) {
        $klantDAO = new KlantDAO();        
        return $klantDAO->voegKlantToe($naam, $voornaam, $adres, $postcode, $gemeente, $telefoonnummer);
   }

    public function registreer($email, $wachtwoord, $klantId) {
        $webklantDAO = new WebklantDAO();
        $klant = $webklantDAO->getByEmail($email);
        if ($klant) {
            throw new EmailadresReedsAccountException;
        } else {
            $salt = sha1($email);
            $wachtwoordHash = sha1($salt . $wachtwoord);
            $webklantDAO->voegWebklantToe($email, $wachtwoordHash, $klantId);
        }
    }

    public function login($email, $wachtwoord) {
        $webklantDAO = new WebklantDAO;
        $klant = $webklantDAO->getByEmail($email);
        if ($klant) {
            $_COOKIE['email'] = $email;
            $salt = sha1($email);
            $wachtwoordHash = sha1($salt . $wachtwoord);
            if ($klant->getWachtwoord() == $wachtwoordHash) {
                $_SESSION['login'] = $klant->getKlantId();
                return $_SESSION['login'];
            } else {
                throw new WachtwoordFoutException;
            }
        } else {
            throw new KlantBestaatNietException;
        }
    }

}
